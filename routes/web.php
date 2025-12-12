<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\{DashboardController};
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;

// 🔹 Add locale pattern at top
Route::pattern('locale', 'en-au|en-ca|en-gb|en-us');
Route::get('api-doc',function () { return view('api-doc')->with('title', 'Api Doc');});
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::get('register', [LoginController::class, 'showRegisterForm'])->name('register');
Route::post('register', [LoginController::class, 'storeUser'])->name('register.submit');


// 👉 Language-based routes: en-au, en-ca, en-gb, en-us etc.
Route::group(['prefix' => '{locale}'], function () {

    Route::get('login', [LoginController::class, 'showLoginForm'])
        ->name('locale.login');
    Route::post('login', [LoginController::class, 'login'])
        ->name('locale.login.submit');

    Route::get('register', [LoginController::class, 'showRegisterForm'])
        ->name('locale.register');
    Route::post('register', [LoginController::class, 'storeUser'])
        ->name('locale.register.submit');

});


Route::get('forgot', [LoginController::class, 'showLoginForm'])->name('forgot');
Route::get('resend-otp/{email}', [LoginController::class, 'ResendOTP'])->name('resend-otp');
Route::get('verify-otp', [LoginController::class, 'showVerifyOtp'])->name('verify.otp.form');
Route::post('verify-otp', [LoginController::class, 'verifyOtp'])->name('verify.otp.submit');

// Default
Route::get('/', [PageController::class, 'home']);
Route::get('/privacy-policy', [PageController::class, 'privacyPolicyDefault'])
     ->name('privacy.policy');
Route::get('/terms-and-conditions',[PageController::class, 'termsAndConditionsDefault'])->name('terms.and.conditions');
Route::get('/app-terms',[PageController::class, 'ApptermsAndConditionsDefault'])->name('app.terms.and.conditions');
Route::get('/cookie-policy',[PageController::class, 'cookiePolicyUseDefault'])->name('cookie.policy');
Route::get('/acceptable-use-policy',[PageController::class, 'acceptableUseDefault'])->name('acceptable.use.policy');
Route::get('/about-us',[PageController::class, 'aboutusUseDefault'])->name('about.us');
Route::get('/offers',[PageController::class, 'offersUseDefault'])->name('offer');
Route::get('morden-slavery',[PageController::class, 'mordenSlaveryUseDefault'])->name('morden-slavery');

// Region based
Route::get('/{locale}', [PageController::class, 'homeWithLocale']);
Route::get('{locale}/privacy-policy', [PageController::class, 'privacyPolicy'])
     ->where('locale', 'en-au|en-ca|en-gb|en-us')
     ->name('locale.privacy.policy');
Route::get('{locale}/terms-and-conditions', [PageController::class, 'termsAndConditions'])
     ->where('locale', 'en-au|en-ca|en-gb|en-us')
     ->name('locale.terms.and.conditions');
Route::get('{locale}/app-terms-and-conditions', [PageController::class, 'ApptermsAndConditions'])
     ->where('locale', 'en-au|en-ca|en-gb|en-us')
     ->name('locale.app.terms.and.conditions');
Route::get('{locale}/cookie-policy', [PageController::class, 'cookiePolicy'])
     ->where('locale', 'en-au|en-ca|en-gb|en-us')
     ->name('locale.cookie.policy');
Route::get('{locale}/acceptable-use-policy', [PageController::class, 'acceptableUse'])
     ->where('locale', 'en-au|en-ca|en-gb|en-us')
     ->name('locale.acceptable-use-policy');
Route::get('{locale}/about-us', [PageController::class, 'aboutUs'])
     ->where('locale', 'en-au|en-ca|en-gb|en-us')
     ->name('locale.about.us');
Route::get('{locale}/offers', [PageController::class, 'offers'])
     ->where('locale', 'en-au|en-ca|en-gb|en-us')
     ->name('locale.offers');
Route::get('{locale}/morden-slavery', [PageController::class, 'mordenSlavery'])
     ->where('locale', 'en-au|en-ca|en-gb|en-us')
     ->name('locale.morden-slavery');


Route::get('choose-your-country',function () { return view('choose-your-country')->with('title', 'Choose Your Country');});



//After Login route

// ✅ Authenticated Dashboard Routes
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('/profile', [DashboardController::class, 'profileUpdate'])->name('update.profile');
    Route::get('/registerorg', [DashboardController::class, 'registerorg'])->name('registerorg');
    Route::get('/knowledgebase', [DashboardController::class, 'knowledgebase'])->name('knowledgebase');
    Route::get('/change-password', [DashboardController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password-update', [DashboardController::class, 'UpdatechangePassword'])->name('update.changepassword');
});
// 🌍 Locale-based dashboard
Route::group([
    'prefix' => '{locale}/dashboard',
    'middleware' => 'auth'
], function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->name('locale.dashboard');

    Route::get('/profile', [DashboardController::class, 'profile'])
        ->name('locale.profile');

    Route::post('/profile', [DashboardController::class, 'profileUpdate'])
        ->name('locale.update.profile');

    Route::get('/registerorg', [DashboardController::class, 'registerorg'])
        ->name('locale.registerorg');

    Route::get('/knowledgebase', [DashboardController::class, 'knowledgebase'])
        ->name('locale.knowledgebase');

    Route::get('/change-password', [DashboardController::class, 'changePassword'])
        ->name('locale.change-password');

    Route::post('/change-password-update', [DashboardController::class, 'UpdatechangePassword'])
        ->name('locale.update.changepassword');
    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('locale.logout');
});


// ✅ Logout Route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');




