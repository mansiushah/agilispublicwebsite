<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\{User};
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     public function index()
    {
        // Get the currently logged-in user
        $user = Auth::user();

        // You can pass user data or other dashboard stats
        return view('dashboard.dashboard', compact('user'));
    }
    public function changePassword()
    {
        return view('auth.changepassword');
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
