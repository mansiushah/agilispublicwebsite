<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\{User};
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
class DashboardController extends Controller
{
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
    public function registerorg()
    {
        $user = Auth::user();
        return view('dashboard.registerorg', compact('user'));
    }
    public function knowledgebase()
    {
        $user = Auth::user();
        return view('dashboard.knowledgebase', compact('user'));
    }
    public function changePassword()
    {
        return view('dashboard.changepassword');
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
            'new_password'      => 'required|min:6',
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

}
