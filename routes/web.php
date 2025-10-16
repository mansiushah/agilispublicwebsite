<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\{DashboardController};
use Illuminate\Http\Request;

// 🌍 Detect location and redirect automatically
/*Route::get('/', function (Request $request) {
    $location = geoip()->getLocation($request->ip());

    $map = [
        'US' => 'en-us',
        'CA' => 'en-ca',
        'AU' => 'en-au',
        'GB' => 'en-gb',
    ];

    $locale = $map[$location->iso_code] ?? 'en-us';

    return redirect("/{$locale}");
});

// 🌐 Localized routes
Route::prefix('{locale}')->group(function () {
    Route::get('/', function ($locale) {
        app()->setLocale($locale);
        return view('index', ['locale' => $locale]);
    })->name('home');

    // Optional: add other pages if needed
    Route::get('/offer', function ($locale) {
        return view('offer', ['locale' => $locale]);
    })->name('offer');
});*/
Route::get('/', function () { return view('index');});
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::get('register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('register', [LoginController::class, 'storeUser'])->name('register.submit');

Route::get('forgot', [LoginController::class, 'showLoginForm'])->name('forgot');
Route::get('resend-otp/{email}', [LoginController::class, 'ResendOTP'])->name('resend-otp');
Route::get('verify-otp', [LoginController::class, 'showVerifyOtp'])->name('verify.otp.form');
Route::post('verify-otp', [LoginController::class, 'verifyOtp'])->name('verify.otp.submit');
Route::get('terms-and-conditions', function () { return view('terms-and-conditions')->with('title', 'Terms and Conditions');});
Route::get('privacy-policy', function () { return view('privacy-policy')->with('title', 'Privacy Policy');});
Route::get('cookie-policy',function () { return view('cookie-policy')->with('title', 'Cookie Policy');});
Route::get('offers',function () { return view('offer')->with('title', 'Privacy Policy');});
//After Login route



   //Auth Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('change-password', [DashboardController::class, 'changePassword'])->name('change-password')->middleware('auth');
   Route::post('change-password-update', [DashboardController::class, 'UpdatechangePassword'])->name('update.changepassword')->middleware('auth');
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');



