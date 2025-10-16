<!DOCTYPE html>
<html lang="en">
 @include('includes.head')
<body>
    <!-- Header Section Start -->
      @include('includes.header')
    <!-- Header Section End -->
    <!-- Landing Banner Section Start -->
    <section class="landing_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="landing_banner_lfttxt">
                        <h2>Find Love, Meet People, & Connect Instantly</h2>
                        <p>Agilis is your modern dating companion meet like-minded people, spark real connections, and
                            discover meaningful relationships with just a swipe.</p>
                        <p>Looking for love, friendship, or something fun? With Agilis, it’s never been easier to
                            connect. Our smart matching algorithm, real-time chat, and seamless design make online
                            dating effortless and exciting.</p>
                        <p>Start your journey now!</p>
                        <div class="qrcode_bx">
                            <a href="#"><img src="{{ url('public/assets/img/appstore.svg') }}" alt="appstore" class="img-fluid"></a>
                            <a href="#"><img src="{{ url('public/assets/img/playstore.svg') }}" alt="playstore" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="landing_banner_rhtimg">
                        <img src="{{ url('public/assets/img/landing_mobile_img.svg') }}" alt="landing_mobile_img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Landing Banner Section End -->

    <!-- Features Section Start -->
    <section id="features" class="features_section">
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
                        <img src="{{ url('public/assets/img/browse-freely.svg') }}" alt="browse-freely" class="img-fluid">
                        <h6>Browse Freely</h6>
                        <p>Scroll through multiple profiles at once, without being restricted to one-by-one swipes or
                            hitting a paywall.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets/img/check-likes.svg') }}" alt="check-likes" class="img-fluid">
                        <h6>check Who likes you</h6>
                        <p>See who likes you and express your interest too.</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets/img/search-filters.svg') }}" alt="search-filters" class="img-fluid">
                        <h6>Unlimited search filters</h6>
                        <p>Use a wide range of filters to find exactly what you're looking for - all without paying any
                            money.</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets/img/phone-video-calls.svg') }}" alt="phone-video-calls" class="img-fluid">
                        <h6>In-app phone and video calls</h6>
                        <p>Chat with your matches safely, without needing to exchange phone numbers.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets/img/meaningful-likes.svg') }}" alt="meaningful-likes" class="img-fluid">
                        <h6>Meaningful likes</h6>
                        <p>You can only like up to 10 people at a time, so every like actually means something.</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets/img/report-ghosting.svg') }}" alt="report-ghosting" class="img-fluid">
                        <h6>Report ghosting</h6>
                        <p>Yes, really. If someone ghosts you, there’s a way to report it.</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-xl-4">
                    <div class="features_box">
                        <img src="{{ url('public/assets/img/fake-profiles.svg') }}" alt="fake-profiles" class="img-fluid">
                        <h6>No fake profiles</h6>
                        <p>So when you're engaging someone you know they are real people, not fake profiles created by
                            us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Footer Section CSS Start -->
  	@include('includes.footer')
    <!-- Footer Section CSS End -->
    <!-- Tosat Meeeage Statrt -->
    <div class="toast" id="toast">
        <div class="container-fluid">
            <div class="toast_subdiv">
                <div class="toast-message">
                    <p>We use cookies to enhance your browsing experience, serve personalized ads or content, and
                        analyze our traffic. (View Cookie Policy)</p>
                </div>
                <div class="toast-buttons">
                    <button class="reject">Reject</button>
                    <button class="accept">Accept</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Tosat Meeeage End -->
</body>
@include('includes.script')

</html>
