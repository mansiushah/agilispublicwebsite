<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\{User,Countries,Currencies,Organisation,UserAdPortal};
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use App\Traits\ApiResponser;
class DashboardController extends Controller
{
     use ApiResponser;
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.dashboard', compact('user'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }
    public function getCurrencies($country_code)
    {
        $currencies = Currencies::where('country_code', $country_code)
            ->orderBy('currency', 'asc')
            ->get();

        return response()->json($currencies);
    }
    public function getTaxRegistrations($country_code)
    {
        $taxRegs = \App\Models\TaxRegistration::where('country_code', $country_code)->get();
        return response()->json($taxRegs);
    }
    public function registerorg()
    {
        $user = Auth::user();
        $countries = Countries::get();
        $userDetails = UserAdPortal::where('id',$user->adportal_user_id)->first();
       // $status = 1;
        if($userDetails)
        {
        $organisationDetails = Organisation::where('id',$userDetails->organisation_id)->first();
        $status = $organisationDetails->status;
        }
        return view('dashboard.registerorg', compact('user','countries','status'));
    }
    public function knowledgebase()
    {
        $user = Auth::user();
        return view('dashboard.knowledgebase', compact('user'));
    }
    public function changePassword()
    {
        $user = Auth::user();
        return view('dashboard.changepassword', compact('user'));
    }
    public function profileUpdate(Request $request)
    {
        $admin = auth()->guard('web')->user();
         // Validate input
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => [
            'required',
            'email',
            'max:255',
            Rule::unique('users')->ignore($admin->id)
        ],
        ]);
        // Update the password
        $admin->full_name = $request->full_name;
        $admin->email = $request->email;
        $admin->save();

        return back()->with('success', 'Profile updated successfully.');
    }
    public function UpdatechangePassword(Request $request)
    {
        $admin = auth()->guard('web')->user();
         // Validate input
        $request->validate([
            'old_password'      => 'required',
            'new_password===]['      => 'required|min:6',
            'confirm_password'  => 'required|same:new_password',
        ]);

       // Check if old password is correct
        if (!Hash::check($request->old_password, $admin->password))
        {
            return back()->with(['error' => 'The current password is incorrect.']);
        }
        // Update the password
        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return back()->with('success', 'Password updated successfully.');
    }
    public function storeOrganisation(Request $request)
    {
        $user = auth()->guard('web')->user();
        $request->validate([
            'company_name'     => 'required|string|max:255',
            'trading_name'  => 'required',
            //'company_email'  => 'required|email|unique:organisations',
            'company_number'  => 'required',
            'country_id'       => 'required',
            'currency_id'      => 'required',
              // 🔹 Custom address validation rule
            'company_address_google_placeid' => 'required|string',
        ], [
            // 🔹 Custom error message
            'company_address_google_placeid.required' => 'The company address field is mandatory.',
        ]);
        $token = uniqid(base64_encode(Str::random(10)));
        $urlSafe = $this->makeUrlSafe($token);
        $organisation = new Organisation();
       //$organisation->environment = $this->environment;
        $organisation->company_name = $request->company_name;
        $organisation->trading_name = $request->trading_name;
        $organisation->company_number = $request->company_number;
        $organisation->company_address_line1 = $request->company_address_line1;
        $organisation->company_address_line2 = $request->company_address_line2;
        $organisation->company_address_city = $request->company_address_city;
        $organisation->company_address_state = $request->company_address_state;
        $organisation->company_address_postal_code = $request->company_address_postal_code;
        $organisation->company_address_country = $request->company_address_country;
        $organisation->company_address_google_placeid = $request->company_address_google_placeid;
        $organisation->country_id = $request->country_id;
        $organisation->currency_id = $request->currency_id;
        $organisation->status = 'P';
        $organisation->save();
        $Useradportal = new UserAdPortal();
        $Useradportal->role_id = 1;
        $Useradportal->organisation_id = $organisation->id;
        $Useradportal->full_name = $user->full_name;
        $Useradportal->phone_number = $request->company_number;
        $Useradportal->email = $user->email;
        $Useradportal->custom_token = $urlSafe;
        $Useradportal->password = ''; // no password yet
        $Useradportal->first_logon = true;
        $Useradportal->save();
        $user = auth()->guard('web')->user();
        $user->adportal_user_id = $Useradportal->id;
        $user->save();
        //return back()->with('success', 'Added successfully.');
        return back()->with('success', 'organisation_created');

    }
    public function registerorgstatus(Request $request)
    {

    }
}
