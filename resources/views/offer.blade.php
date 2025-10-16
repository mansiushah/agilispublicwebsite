<!DOCTYPE html>
<html lang="en">

 @include('includes.head')

<body>
    <!-- Header Section Start -->
      @include('includes.header')
    <!-- Header Section End -->
    <!-- Offer Banner Section Start -->
    <section class="offer_banner_section">
        <div class="container">
            <div class="offer_banner_bx">
                <h2>Grow with Agilis</h2>
                <p>Promote your Offers to a Targeted Dating Audience</p>
                <a href="Create-Account.html" class="create_account_btn create_outline_account_btn">Create An Account</a>
            </div>
        </div>
    </section>
    <!-- Landing Banner Section End -->
    <!-- Beneficial Section Start -->
    <section class="beneficial_section">
        <div class="container">
            <div class="row beneficial_section_row">
                <div class="col-md-6 mb-3">
                    <div class="beneficial_lft_bx">
                        <img src="{{ url('public/assets//img/beneficial-img.svg') }}" alt="beneficial-img" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="beneficial_rht_bx">
                        <h2>why it’s beneficial to advertise
                            on the Agilis app</h2>

                        <ul class="mt-4">
                            <li><img src="{{ url('public/assets//img/squre.svg') }}" alt="squre" class="img-fluid"><span>Promote Your Offers
                                    to users within any geographic area</span></li>
                            <li><img src="{{ url('public/assets//img/squre.svg') }}" alt="squre" class="img-fluid"><span>A fair Fixed price
                                    model that is easy to understand</span></li>
                            <li><img src="{{ url('public/assets//img/squre.svg') }}" alt="squre" class="img-fluid"><span>Track ad
                                    impressions, engagement, and redemptions with real-time analytics</span></li>
                            <li><img src="{{ url('public/assets//img/squre.svg') }}" alt="squre" class="img-fluid"><span>Set your own budget
                                    and keep in control of your finances</span></li>
                            <li><img src="{{ url('public/assets//img/squre.svg') }}" alt="squre" class="img-fluid"><span>Partner with a
                                    platform that values kindness, fairness, transparency and data privacy</span></li>
                            <li><img src="{{ url('public/assets//img/squre.svg') }}" alt="squre" class="img-fluid"><span>Use our advertiser
                                    portal and developer-friendly APIs to Publicise your Offers quickly</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Beneficial Section End -->
    <!-- Offer Apply Section Start -->
    <section class="offer_apply_section">
        <div class="container">
            <div class="offer_apply_bx">
                <h2>Apply now</h2>
                <p>register your business and start promoting your offers</p>
                <a href="Create-Account.html" class="create_account_btn">Create An Account</a>
            </div>
        </div>
    </section>
    <!-- Offer Apply Section End -->
    <!-- Features Section Start -->
    <section class="features_section">
        <div class="container">
            <div class="features_top">
                <h2>Features</h2>
                <p>Agilis is packed with smart, simple features to help you find real connections. Whether you're
                    looking for love, friendship, or fun, we make it easy to connect. Enjoy a smooth, secure dating
                    experience anytime, anywhere.</p>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets//img/browse-freely.svg') }}" alt="browse-freely" class="img-fluid">
                        <h6>Browse Freely</h6>
                        <p>Scroll through multiple profiles at once, without being restricted to one-by-one swipes or
                            hitting a paywall.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets//img/check-likes.svg') }}" alt="check-likes" class="img-fluid">
                        <h6>check Who likes you</h6>
                        <p>See who likes you and express your interest too.</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets//img/search-filters.svg') }}" alt="search-filters" class="img-fluid">
                        <h6>Unlimited search filters</h6>
                        <p>Use a wide range of filters to find exactly what you're looking for - all without paying any
                            money.</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets//img/phone-video-calls.svg') }}" alt="phone-video-calls" class="img-fluid">
                        <h6>In-app phone and video calls</h6>
                        <p>Chat with your matches safely, without needing to exchange phone numbers.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets//img/meaningful-likes.svg') }}" alt="meaningful-likes" class="img-fluid">
                        <h6>Meaningful likes</h6>
                        <p>You can only like up to 10 people at a time, so every like actually means something.</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets//img/report-ghosting.svg') }}" alt="report-ghosting" class="img-fluid">
                        <h6>Report ghosting</h6>
                        <p>Yes, really. If someone ghosts you, there’s a way to report it.</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets//img/fake-profiles.svg') }}" alt="fake-profiles" class="img-fluid">
                        <h6>No fake profiles</h6>
                        <p>So when you're engaging someone you know they are real people, not fake profiles created by
                            us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->
    <!-- Download Section Start -->
   <!--  <section class="download_section">
        <h2>Download</h2>
        <img src="{{ url('public/assets//img/qr-code.svg') }}" alt="qr-code" class="image">
        <div class="qrcode_bx mt-5">
            <a href="#"><img src="{{ url('public/assets//img/appstore.svg') }}" alt="appstore" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets//img/playstore.svg') }}" alt="playstore" class="img-fluid"></a>
        </div>
    </section> -->
    <!-- Download Section End -->
    <!-- Mobile App Section CSS Start -->
   <!--  <section class="mobile_app_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile_app_bx">
                        <img src="{{ url('public/assets//img/mobile-app-img.svg') }}" alt="mobile-app-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Mobile App Section CSS End -->
    <!-- Social Section Start -->
   <!--  <section class="social_section">
        <h2>Socials</h2>
        <div class="social_icon mt-4">
            <a href="#"><img src="{{ url('public/assets//img/facebook.svg') }}" alt="facebook" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets//img/instagram.svg') }}" alt="instagram" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets//img/linkdien.svg') }}" alt="linkdien" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets//img/twitter.svg') }}" alt="twitter" class="img-fluid"></a>
            <a href="#"><img src="{{ url('public/assets//img/tiktok.svg') }}" alt="tiktok" class="img-fluid"></a>
        </div>
        <div class="social_subscribe">
            <form action="#">
                <input type="email" placeholder="E-mail Address">
                <button type="submit">SUBSCRIBE</button>
            </form>
        </div>
    </section> -->
    <!-- Social Section End -->
    <!-- Footer Section CSS Start -->
   @include('includes.footer')
    <!-- Footer Section CSS End -->
</body>

@include('includes.script')
</html>
