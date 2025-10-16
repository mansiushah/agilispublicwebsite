<!DOCTYPE html>
<html lang="en">

 @include('includes.head')

<body>
    <!-- Header Section Start -->
     @include('includes.header')
    <!-- Header Section End -->
    <!-- Login Banner Section Start -->
    <section class="login_banner">
        <div class="container">
            <div class="login_banner_box text-center">
                <h2>Create Account</h2>
                <p>Set up your Agilis account and verify your email address.</p>
            </div>
        </div>
    </section>
    <!-- Login Banner Section End -->
    <!-- Login Box Section Start -->
    <section class="login_bx_section">
        <div class="container">
            <div class="login_box">
                <form action="{{route('register.submit')}}" method="post">
                      @csrf
                    <h2>Create Account</h2>
                    <div class="form-group position-relative">
                        <label>Full name</label>
                        <input type="text" class="form-control" placeholder="John |" name="full_name" value="{{old('full_name')}}">
                        @error('full_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group position-relative">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Type here..." name="email" value="{{old('email')}}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group position-relative">
                        <label>Confirm Password</label>
                        <input name="password" type="password" class="form-control mb-1 "
                            placeholder="Enter new password" id="signupInputPassword" aria-describedby="passwordHelp"
                            value="" />
                         @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <a href="#" toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></a>

                        <div class="input-icon-right peek-password-button" data-peek-password="signupInputPassword">
                            <span class="peek-password-icon icon-visibility"></span>
                        </div>
                    </div>
                    <div class="password-strength-group mt-3" data-strength="">

                        <div id="password-strength-meter" class="password-strength-meter">
                            <div class="meter-block"></div>
                            <div class="meter-block"></div>
                            <div class="meter-block"></div>
                            <div class="meter-block"></div>
                        </div>

                        <div class="password-strength-message">
                            <div class="message-item">
                                <span>Weak</span>
                            </div>

                            <div class="message-item">
                                <span>Fair</span>
                            </div>

                            <div class="message-item">
                                <span>Good</span>
                            </div>

                            <div class="message-item">
                                <span>Strong</span>
                            </div>
                        </div>
                    </div>
                    <!-- ******** -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary login_btn">Continue</button>
                    </div>
                    <div class="login_create_bx pt-3">
                        <p>Already have an account? <a href="{{url('login')}}" class="text-decoration-none">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Login Box Section End -->
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
</body>
 @include('includes.script')

</html>
