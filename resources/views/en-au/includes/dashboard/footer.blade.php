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

    // Get full path (e.g. "Ad-public-website/en-ca/dashboard")
    $uri = request()->path();

    // Remove base folder name
    $uri = Str::after($uri, 'Ad-public-website/');

    // Remove existing locale
    foreach ($locales as $code => $info) {
        if (Str::startsWith($uri, $code . '/')) {
            $uri = Str::after($uri, $code . '/');
        }
    }
    // Clean path (example: "dashboard" or "dashboard/profile")
    $cleanPath = ltrim($uri, '/');
@endphp
 <footer>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <img src="{{ url('public/assets/img/footer-logo.svg')}}" alt="footer-logo" class="footer-logo">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Company</h6>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="https://www.agilis.dating/about-us.html">About Us</a></li>
                                <li><a href="mailto:help@agilis.dating">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>FOR BUSINESS</h6>
                            <ul>
                                <li><a href="#">Offers</a></li>
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
                                <li><a href="#">Change Location</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Apps</h6>
                            <ul>
                                <li><a href="#"><img src="{{ url('public/assets/img/appstore.svg')}}" alt="appstore"
                                            class="img-fluid"></a>
                                </li>
                                <li><a href="#"><img src="{{ url('public/assets/img/playstore.svg')}}" alt="playstore"
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
