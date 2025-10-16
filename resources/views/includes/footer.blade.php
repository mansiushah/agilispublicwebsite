  <!-- Download Section Start -->
    <section class="download_section">
        <h2>Download</h2>
        <img src="{{ url('public/assets/img/qr-code.svg') }}" alt="qr-code" class="image">
        <div class="qrcode_bx mt-5">
            <a href="#"><img src="{{ url('public/assets/img/appstore.svg') }}" alt="appstore" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets/img/playstore.svg') }}" alt="playstore" class="img-fluid"></a>
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
            <a href="#"><img src="{{ url('public/assets/img/facebook.svg') }}" alt="facebook" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets/img/instagram.svg') }}" alt="instagram" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets/img/linkdien.svg') }}" alt="linkdien" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets/img/twitter.svg') }}" alt="twitter" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets/img/tiktok.svg') }}" alt="tiktok" class="img-fluid"></a>
        </div>
        <div class="social_subscribe">
            <form action="#">
                <input type="email" placeholder="E-mail Address">
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
                                <li><a href="https://www.agilis.dating/about-us.html">About Us</a></li>
                                <li><a href="mailto:help@agilis.dating">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>FOR BUSINESS</h6>
                            <ul>
                                <li><a href="{{ url('/offer') }}">Offers</a></li>
                                <li><a href="https://chessmafia.com/php/M-0402/Ad-Agilis/Ad-agilis">Ad Portal</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Legal & Policies</h6>
                            <ul>
                                <li><a href="{{url('/terms-and-conditions')}}">Terms & Conditions</a></li>
                                <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
                                <li><a href="{{url('/cookie-policy')}}">Cookie Policy</a></li>
                                <li><a href="https://www.agilis.dating/app-terms.html">App Terms</a></li>
                                <li><a href="https://www.agilis.dating/acceptable-use-policy.html">Acceptable Use Policy</a></li>
                                <li><a href="https://www.agilis.dating/slavery.html">Modern Slavery Statement</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Settings</h6>
                            <ul>
                                <li><a href="Choose-Your-Country.html">Change Location</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Apps</h6>
                            <ul>
                                <li><a href="#"><img src="{{ url('public/assets/img/appstore.svg') }}" alt="appstore" class="img-fluid"></a>
                                </li>
                                <li><a href="#"><img src="{{ url('public/assets/img/playstore.svg') }}" alt="playstore"
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
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ url('public/assets/img/UK-Flag.svg') }}" alt="UK-Flag" class="img-fluid">
                                    <span class="pl-2">United States</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('en-us') }}"><img src="{{ url('public/assets/img/UK-Flag.svg') }}" alt="UK-Flag"
                                            class="img-fluid"><span>United States</span></a>
                                    <a class="dropdown-item" href="{{ url('en-au') }}"><img src="{{ url('public/assets/img/australia-flag.png') }}"
                                            alt="australia-flag" class="img-fluid"><span>Australia</span></a>
                                    <a class="dropdown-item" href="{{ url('en-ca') }}"><img src="{{ url('public/assets/img/canada-flag.png') }}"
                                            alt="canada-flag" class="img-fluid"><span>Canada</span></a>

                                    <a class="dropdown-item" href="{{ url('en-gb') }}"><img src="{{ url('public/assets/img/united-kingdom-flag.png') }}"
                                            alt="united-kingdom-flag" class="img-fluid"><span>Great Britain</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
