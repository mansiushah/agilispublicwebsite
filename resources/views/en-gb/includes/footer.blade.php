  @php
    use Illuminate\Support\Str;

    // Available locales
    $locales = [
        'en-us' => ['label' => 'United States', 'flag' => 'UK-Flag.svg'],
        'en-au' => ['label' => 'Australia', 'flag' => 'australia-flag.png'],
        'en-ca' => ['label' => 'Canada', 'flag' => 'canada-flag.png'],
        'en-gb' => ['label' => 'Great Britain', 'flag' => 'united-kingdom-flag.png'],
    ];

    // Detect current locale (fallback to en-us)
    $currentLocale = request()->route('locale') ?? 'en-us';

    // Get full current path (ex: "Ad-public-website/en-au/cookie-policy")
    $uri = request()->path();

    // Remove base folder name
    $uri = Str::after($uri, 'Ad-public-website/');

    // Remove locale prefix from URI
    foreach ($locales as $code => $info) {
        if (Str::startsWith($uri, $code . '/')) {
            $uri = Str::after($uri, $code . '/');
        }
    }

    // Clean path (example: "dashboard" or "privacy-policy")
    $cleanPath = ltrim($uri, '/');

    // IMPORTANT FIX — If user is on root locale page (/en-au), $cleanPath becomes "en-au". Avoid duplicates.
    if (array_key_exists($cleanPath, $locales)) {
        $cleanPath = ''; // Reset to empty
    }
@endphp
  <!-- Download Section Start -->
    <section id="download"  class="download_section">
        <h2>Download</h2>
        <img src="{{ url('public/assets/img/qr-code.svg') }}" alt="qr-code" class="image">
        <div class="qrcode_bx mt-5">
            <a href="https://apps.apple.com/gb/app/agilis/id6479391708"><img src="{{ url('public/assets/img/appstore.svg') }}" alt="appstore" class="img-fluid"></a>
            <a href="https://play.google.com/store/apps/details?id=com.app.agilis"><img src="{{ url('public/assets/img/playstore.svg') }}" alt="playstore" class="img-fluid"></a>
        </div>
    </section>
    <!-- Download Section End -->
    <!-- Mobile App Section CSS Start -->
    <section class="mobile_app_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile_app_bx">
                        <img src="{{ url('public/assets/img/mobile-app-img.svg') }}" alt="mobile-app-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mobile App Section CSS End -->
    <!-- Social Section Start -->
    <section class="social_section">
        <h2>Socials</h2>
        <div class="social_icon mt-4">
            <a href="https://www.facebook.com/AgilisDating"><img src="{{ url('public/assets/img/facebook.svg') }}" alt="facebook" class="img-fluid"></a>
            <a href="https://www.instagram.com/agilisdating"><img src="{{ url('public/assets/img/instagram.svg') }}" alt="instagram" class="img-fluid"></a>
            <a href="https://www.linkedin.com/company/agilisdating"><img src="{{ url('public/assets/img/linkdien.svg') }}" alt="linkdien" class="img-fluid"></a>
            <a href="https://x.com/agilisdating"><img src="{{ url('public/assets/img/twitter.svg') }}" alt="twitter" class="img-fluid"></a>
            <a href="https://www.tiktok.com/@agilisdatingapp"><img src="{{ url('public/assets/img/tiktok.svg') }}" alt="tiktok" class="img-fluid"></a>
        </div>
        <div class="social_subscribe">
            <form action="#">
                <input type="email" placeholder="E-mail address">
                <button type="submit">SUBSCRIBE</button>
            </form>
        </div>
    </section>
    <!-- Social Section End -->
  <footer>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <img src="{{ url('public/assets/img/footer-logo.svg') }}" alt="footer-logo" class="footer-logo">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Company</h6>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{ locale_route('about.us')}}">About Us</a></li>
                                <li><a href="mailto:help@agilis.dating">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>FOR BUSINESS</h6>
                            <ul>
                                <li><a href="{{ url('en-gb/offers') }}">Offers</a></li>
                                <li><a href="https://chessmafia.com/php/M-0402/Ad-Agilis/Ad-agilis">Ad Portal</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Legal & Policies</h6>
                            <ul>
                               <li><a href="{{ locale_route('terms.and.conditions')}}">Terms & Conditions</a></li>
                                <li><a href="{{ locale_route('privacy.policy')}}">Privacy Policy</a></li>
                                <li><a href="{{ locale_route('cookie.policy')}}">Cookie Policy</a></li>
                                <li><a href="{{ locale_route('app.terms.and.conditions') }}">App Terms</a></li>
                                <li><a href="{{ locale_route('acceptable-use-policy')}}">Acceptable Use Policy</a></li>
                                <li><a href="{{ locale_route('morden-slavery')}}">Modern Slavery Statement</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Settings</h6>
                            <ul>
                                <li><a href="{{ url('choose-your-country') }}">Change Location</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Apps</h6>
                            <ul>
                                 <li><a href="https://apps.apple.com/gb/app/agilis/id6479391708"><img src="{{ url('public/assets/img/appstore.svg') }}" alt="appstore" class="img-fluid"></a>
                                </li>
                                <li><a href="https://play.google.com/store/apps/details?id=com.app.agilis"><img src="{{ url('public/assets/img/playstore.svg') }}" alt="playstore"
                                            class="img-fluid"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="footer_bottom_main">
                    <div class="header_bottom_lft">
                        <p>Copyright © 2025 - All rights reserved</p>
                    </div>
                    <div class="header_bottom_rht">
                        <div class="drodwn_flg">
                            <div class="dropdown">
                               <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ url('public/assets/img/' . $locales[$currentLocale]['flag']) }}"
                                         alt="flag" class="img-fluid">
                                    <span class="pl-2">{{ $locales[$currentLocale]['label'] }}</span>
                                </button>

                                <!-- DROPDOWN MENU -->
                                <div class="dropdown-menu">
                                    @foreach($locales as $code => $info)

                                        <a class="dropdown-item {{ $currentLocale == $code ? 'active' : '' }}"
                                           href="{{ url($code . '/' . $cleanPath) }}">
                                            <img src="{{ url('public/assets/img/' . $info['flag']) }}" class="img-fluid">
                                            <span>{{ $info['label'] }}</span>
                                        </a>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
