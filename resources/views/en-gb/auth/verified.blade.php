<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Password</title>
    <link rel="shortcut icon" href="{{ url('public/assets/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('public/assets/css/responsive.css')}}">
</head>

<body>
    <!-- Header Section Start -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="#">
                    <img src="{{ url('public/assets/img/Logo.svg')}}" alt="logo" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">FEATURES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#download">DOWNLOAD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="API-DOCS.html">API DOCS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link landing_login_btn" href="login.html">LOGIN</a>
                        </li>

                        <li class="nav-item dropdown">
                            <div class="drodwn_flg">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="{{ url('public/assets/img/UK-Flag.svg')}}" alt="UK-Flag" class="img-fluid">
                                        <span class="pl-2">United States</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="en-us/index.html"><img src="{{ url('public/assets/img/UK-Flag.svg')}}"
                                                alt="UK-Flag" class="img-fluid"><span>United States</span></a>
                                        <a class="dropdown-item" href="en-au/index.html"><img src="{{ url('public/assets/img/australia-flag.png')}}"
                                                alt="australia-flag" class="img-fluid"><span>Australia</span></a>
                                        <a class="dropdown-item" href="en-ca/index.html"><img src="{{ url('public/assets/img/canada-flag.png')}}"
                                                alt="canada-flag" class="img-fluid"><span>Canada</span></a>

                                        <a class="dropdown-item" href="en-gb/index.html"><img src="{{ url('public/assets/img/united-kingdom-flag.png')}}"
                                                alt="united-kingdom-flag" class="img-fluid"><span>Great
                                                Britain</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Login Banner Section Start -->
    <section class="login_banner">
        <div class="container">
            <div class="login_banner_box text-center">
                <h2>Verification</h2>
                <p>Enter verification code</p>
            </div>
        </div>
    </section>
    <!-- Login Banner Section End -->
    <!-- Login Box Section Start -->
    <section class="login_bx_section">
        <div class="container">
            <div class="login_box">
                <form>
                    <p>We have sent the verification code to your email <br><a href="#">loremipsum@mail.com</a><br>
                        If you haven’t received this in your Inbox, we advise checking your Junk/Spam folder too.</p>
                    <div class="form-group">
                        <div class="verification_code_bx">
                            <input type="text" class="form-control" placeholder="5" maxlength="1">
                            <input type="text" class="form-control" placeholder="1" maxlength="1">
                            <input type="text" class="form-control" placeholder="3" maxlength="1">
                            <input type="text" class="form-control" placeholder="-" maxlength="1">

                        </div>
                    </div>
                    <div class="text-center">
                        <h5>02:39</h5>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary login_btn" data-toggle="modal"
                            data-target="#EmailVerificationMdl">Verify</button>
                    </div>
                    <div class="login_create_bx pt-3">
                        <p class="mb-0">Didn’t receive the code? <a href="#" class="resend_link">Resend</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Login Box Section End -->
    <!-- Footer Section CSS Start -->
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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="https://www.agilis.dating/about-us.html">About Us</a></li>
                                <li><a href="mailto:help@agilis.dating">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>FOR BUSINESS</h6>
                            <ul>
                                <li><a href="offers.html">Offers</a></li>
                                <li><a href="https://chessmafia.com/php/M-0402/Ad-Agilis/Ad-agilis">Ad Portal</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                        <div class="footer_bx">
                            <h6>Legal & Policies</h6>
                            <ul>
                                <li><a href="term and condition.html">Terms & Conditions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="cookie-policy.html">Cookie Policy</a></li>
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
                                <li><a href="#"><img src="{{ url('public/assets/img/appstore.svg')}}" alt="appstore" class="img-fluid"></a>
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
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ url('public/assets/img/UK-Flag.svg')}}" alt="UK-Flag" class="img-fluid">
                                    <span class="pl-2">United States</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="en-us/index.html"><img src="{{ url('public/assets/img/UK-Flag.svg')}}" alt="UK-Flag"
                                            class="img-fluid"><span>United States</span></a>
                                    <a class="dropdown-item" href="en-au/index.html"><img src="{{ url('public/assets/img/australia-flag.png')}}"
                                            alt="australia-flag" class="img-fluid"><span>Australia</span></a>
                                    <a class="dropdown-item" href="en-ca/index.html"><img src="{{ url('public/assets/img/canada-flag.png')}}"
                                            alt="canada-flag" class="img-fluid"><span>Canada</span></a>

                                    <a class="dropdown-item" href="en-gb/index.html"><img src="{{ url('public/assets/img/united-kingdom-flag.png')}}"
                                            alt="united-kingdom-flag" class="img-fluid"><span>Great Britain</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section CSS End -->

    <!-- Create Account Modal -->
    <!-- Button trigger modal -->
    <!-- Modal -->
<div class="modal fade verification-mdl_main show" id="EmailVerificationMdl" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 15px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content verification_password-mdl text-center">
                <div class="modal-body text-center py-5">
                    <img src="{{ url('public/assets/img/email-verified.svg')}}" alt="email-verified" class="img-fluid">
                    <h4>Email Verified</h4>
                    <p>We are now redirecting you to your dashboard.<span id="countdown">5</span> seconds...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Account Modal -->
</body>
<script src="{{ url('public/assets/js/jquery.js')}}"></script>
<script src="{{ url('public/assets/js/popper.min.js')}}"></script>
<script src="{{ url('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ url('public/assets/js/custom.js')}}"></script>

</html>

<!-- <div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="text-center">
        <div class="mb-4">
            <img src="{{ asset('images/checkmark.gif') }}" alt="Verified" style="width: 100px;">
        </div>
        <h3 class="text-success mb-2">Email Verified ✅</h3>
        <p>You’ll be redirected to your dashboard in <span id="countdown">5</span> seconds...</p>
    </div>
</div> -->

<script>
    let seconds = 5;
    const countdown = document.getElementById('countdown');

    const timer = setInterval(() => {
        seconds--;
        countdown.textContent = seconds;
        if (seconds <= 0) {
            clearInterval(timer);
            window.location.href = "{{ route('dashboard') }}";
        }
    }, 1000);
</script>
