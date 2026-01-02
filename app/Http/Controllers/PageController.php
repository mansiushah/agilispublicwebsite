<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Root domain - default locale (home page)
    public function home()
    {
        return view('index')->with('locale', 'default');
    }
    // Region-based language root
    public function homeWithLocale($locale)
    {
        $viewPath = $locale . '.index';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('index');
        // List of supported region locales
        $allowedLocales = ['en-au', 'en-ca', 'en-gb', 'en-us'];
        if (!in_array($locale, $allowedLocales)) {
            abort(404);
        }
        // You can store locale for multilingual content
        app()->setLocale($locale);
        return view('index')->with('locale', $locale);
    }
    public function privacyPolicyDefault()
    {
        return view('privacy-policy');
    }
    public function privacyPolicy($locale)
    {
        $viewPath = $locale . '.privacy-policy';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('privacy-policy');
    }
    public function termsAndConditionsDefault()
    {
        return view('terms-and-conditions');
    }
    public function aboutusUseDefault()
    {
        return view('about-us');
    }
    public function aboutUs($locale)
    {
         $viewPath = $locale . '.about-us';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('about-us');
    }
    public function termsAndConditions($locale)
    {
        $viewPath = $locale . '.terms-and-conditions';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('terms-and-conditions');
    }
     public function acceptableUseDefault()
    {
        return view('acceptable-use-policy');
    }

    public function acceptableUse($locale)
    {
        $viewPath = $locale . '.acceptable-use-policy';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('acceptable-use-policy');
    }
     public function ApptermsAndConditionsDefault()
    {
        return view('app');
    }

    public function ApptermsAndConditions($locale)
    {
        $viewPath = $locale . '.app';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('app');
    }
     public function cookiePolicyUseDefault()
    {
        return view('cookie-policy');
    }

    public function cookiePolicy($locale)
    {
        $viewPath = $locale . '.cookie-policy';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('cookie');
    }
     public function offersUseDefault()
    {
        return view('offer');
    }
    public function chooseYourCountryDefult()
    {
        return view('choose-your-country');
    }
    public function mordenSlaveryUseDefault()
    {
        return view('morden-slavery');
    }
    public function offers($locale)
    {
        $viewPath = $locale . '.offer';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('offer');
    }
     public function chooseYourCountry($locale)
    {
        $viewPath = $locale . '.choose-your-country';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('choose-your-country');
    }
     public function mordenSlavery($locale)
    {
        $viewPath = $locale . '.morden-slavery';

        if (view()->exists($viewPath)) {
            return view($viewPath, compact('locale'));
        }

        return view('morden-slavery');
    }
}
