<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\ApiResponser;
use App\Models\User;
use App\Services\TwilioService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class LoginController extends Controller
{
    use ApiResponser;
    protected $twilio;
    public function __construct(TwilioService $twilio)
    {
        $this->twilio = $twilio;
    }
    private function loadAuthView($view, $data = [])
    {
        $locale = request()->route('locale'); // example: en-us

        // If localized view exists → load it
        if ($locale && view()->exists("$locale/auth/$view")) {
            return view("$locale/auth/$view", $data);
        }

        // Otherwise → load default view
        return view("auth.$view", $data);
    }
    private function detectLocale(Request $request)
    {
        // 1. Check route
        $locale = $request->route('locale');

        if ($locale) {
            return $locale;
        }

        // 2. Check URL manually
        $uri = $request->getRequestUri(); // example: /en-us/login

        foreach (['en-us','en-au','en-gb','en-ca'] as $lang) {
            if (strpos($uri, "/$lang/") === 0 || strpos($uri, "/$lang") === 0) {
                return $lang;
            }
        }

        // 3. Default → no locale
        return null;
    }
    public function showLoginForm()
    {
        return $this->loadAuthView('login');
    }
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($validated)) {

            // 🎯 Correct locale detection
             $locale = $this->detectLocale($request);

            if ($locale) {
                return redirect()->route('locale.dashboard', ['locale' => $locale]);
            }

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Your Username and Password are wrong.');
    }
    public function showRegisterForm()
    {
        return $this->loadAuthView('register');
        //return view('auth.register');
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|string',
        ]);

        $otp = rand(1000, 9999);
        $expirySeconds = 159; // or you can use: (2 * 60) + 39
        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'otp' => $otp,
            'otp_verify' => 0,
            'first_logon' => 1,
            'expires_at' => Carbon::now()->addSeconds($expirySeconds)->timestamp,
        ]);
        $user = auth()->guard('web')->user($user);
        // Send OTP via email
        Mail::to($request->email)->send(new \App\Mail\Verification($request->full_name,$otp));
        return redirect()->route('verify.otp.form')->with('email', $request->email);
    }
    public function showVerifyOtp(Request $request)
    {
        $email = session('email');
        return $this->loadAuthView('verify', compact('email'));
       // return view('auth.verify', compact('email'));
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $otp = implode('', [
            $request->digit1, $request->digit2,
            $request->digit3, $request->digit4
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'User not found']);
        }

        if ($user->otp == $otp) {
            $user->update([
                'otp_verify' => 1,
                'first_logon' => 0,
                'otp' => null,
            ]);
               Auth::login($user);
              return view('auth.verified');
          //  return redirect('/dashboard')->with('success', 'OTP verified successfully!');
        } else {
            $request->session()->flash('error', 'Invalid OTP. Try again.');
            $request->session()->flash('class', 'red');
            return back()->with(['email' => $request->email]);
        }
    }
    public function ResendOTP(Request $request,$email)
    {
        $otp = rand(1000, 9999);
        $user = User::where('email', $email)->first();
        $user->otp = $otp;
        $user->otp_verify = 0;
        $user->save();
        $email = $email;
         try {
               Mail::to($email)->send(new \App\Mail\ResetUserPassword($user->full_name,$otp));
            session([
            'reset_email' => $request->email
        ]);
        $request->session()->flash('error', 'OTP resend.');
        $request->session()->flash('class', 'red');
        //$request->session()->flash('type', $verification);
         return view('auth.verify', compact('email'));;

        } catch (\Exception $e) {
            if (str_contains($e->getMessage(), 'Inactive recipients')) {
                // Mark email as invalid in DB
                $request->session()->flash('error', 'Can not send mail on this email');
                return back()->with(['email' => $email]);
                //User::where('email', $request->email)->update(['email_status' => 'inactive']);
            }
        }
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
    public function showForgotForm()
    {
        return $this->loadAuthView('reset');
    }
    public function sendOtpForgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email||email:rfc,dns',
        ]);

        $otp = rand(1000, 9999);

        User::where('email', $request->email)->update([
            'otp' => $otp,
           // 'otp_expired_at' => Carbon::now()->addMinutes(10),
        ]);
            $user = User::where('email', $request->email)->first();
       /* Mail::raw("Your verification code is: $otp", function ($msg) use ($request) {
            $msg->to($request->email)->subject('Password Reset OTP');
        });*/
        try {
            Mail::to($request->email)->send(new \App\Mail\ResetUserPassword($user->full_name,$otp));
            session([
            'reset_email' => $request->email
        ]);
        return redirect()->route('verify.otp.form.forgot')->with('email', $request->email)->with('success', 'OTP sent to your email');
        } catch (\Exception $e) {
            if (str_contains($e->getMessage(), 'Inactive recipients')) {
                // Mark email as invalid in DB
                $request->session()->flash('error', 'Can not send mail on this email');
                return back()->with(['email' => $request->email]);
                //User::where('email', $request->email)->update(['email_status' => 'inactive']);
            }
        }
    }
    public function showVerifyOtpForgot(Request $request)
    {
        $email = session('email');
        //return view('auth.forgotOtp', compact('email'));
        return $this->loadAuthView('forgotOtp', compact('email'));
    }
    public function verifyOtpForgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $otp = implode('', [
            $request->digit1, $request->digit2,
            $request->digit3, $request->digit4
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'User not found']);
        }

        if ($user->otp == $otp) {
            $user->update([
                'otp_verify' => 1,
                'first_logon' => 0,
                'otp' => null,
            ]);
            /* Auth::login($user);
             return view('auth.restnewpassword');
            */session(['otp_verify' => true]);
            return redirect()->route('password.reset');
          //  return redirect('/dashboard')->with('success', 'OTP verified successfully!');
        } else {

            $request->session()->flash('error', 'Invalid OTP. Try again.');
            $request->session()->flash('class', 'red');
            return back()->with(['email' => $request->email]);
        }
    }
    public function showResetForm()
    {
        if (!session('otp_verify')) {
            return redirect()->route('password.request');
        }
        return $this->loadAuthView('restnewpassword');
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        User::where('email', session('reset_email'))->update([
            'password' => Hash::make($request->password),
            'otp' => null,
        ]);

        session()->forget(['reset_email', 'otp_verified']);

        return redirect()->route('login')->with('success', 'Password reset successfully');
    }
}

