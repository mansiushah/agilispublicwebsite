<!DOCTYPE html>
<html lang="en">
@include('includes.dashboard.head')
<body>
<!-- Header Section Start -->
@include('includes.dashboard.header')
<!-- Header Section End -->
<!-- Landing Banner Section Start -->
<section class="landing_banner_section dashboard_banner_section">
    <div class="container">
        <div class="dashboard_ttl">
            <h2>DASHBOARD</h2>
        </div>
    </div>
</section>
<!-- Landing Banner Section End -->
<section class="dashboard_tabing _section">
    <div class="container">
        <div class="dashboard_section_main">
            <div class="dashboard_section_row">
                @include('includes.dashboard.menu')
                <div class="dashboard_section_row_rht">
                        <div class="tab-content dashboad_right_penal" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="dashboard_right_ttl">
                                    <h3>Knowledgebase</h3>
                                    <h6>36 Artcles</h6>
                                </div>

                                <div class="row gallery-row px-0">
                                    <!-- ***********Row-1*********** -->
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-one.svg') }}" alt="gallary-one"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Ghosting</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-six.svg') }}" alt="gallary-six"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-three.svg') }}" alt="gallary-three"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-four.svg') }}" alt="gallary-four"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Ghosting</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-five.svg') }}" alt="gallary-five"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-six.svg') }}" alt="gallary-six"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-three.svg') }}" alt="gallary-three"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Ghosting</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-six.svg') }}" alt="gallary-six"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-one.svg') }}" alt="gallary-one"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Ghosting</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ***********Row-1*********** -->

                                    <!-- ***********Row-2*********** -->
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-one.svg') }}" alt="gallary-one"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Ghosting</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-six.svg') }}" alt="gallary-six"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-three.svg') }}" alt="gallary-three"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-four.svg') }}" alt="gallary-four"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Ghosting</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-five.svg') }}" alt="gallary-five"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-six.svg') }}" alt="gallary-six"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-three.svg') }}" alt="gallary-three"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Ghosting</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-six.svg') }}" alt="gallary-six"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Lorem Ipsum is simply</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  img-thumbnail gallery-item">
                                        <div class="isotope_main_card">
                                            <div class="isotope_card_img"><img class="img-responsive"
                                                    src="{{ url('public/assets/img/gallary-one.svg') }}" alt="gallary-one"></div>
                                            <div class="isotope_card_txt ">
                                                <h4>Ghosting</h4>
                                                <p>Lorem Ipsum is simply dummy text of the print...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
 </section>
<!-- Footer Section CSS Start -->
    @include('includes.dashboard.footer')
<!-- Footer Section CSS End -->
</body>
@include('includes.dashboard.script')
</html>
<!-- <div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="mb-3">Welcome, {{ $user->full_name ?? 'User' }} 👋</h2>
        <p class="text-muted mb-4">You are successfully logged in to your dashboard.</p>

        <hr>

        <div class="mt-3">
            <h5>Your Account Details:</h5>
            <ul>
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>First Logon:</strong> {{ $user->first_logon ? 'Yes' : 'No' }}</li>
                <li><strong>Verified:</strong> {{ $user->otp_verify ? 'Yes' : 'No' }}</li>
                <li><strong>Member Since:</strong> {{ $user->created_at->format('d M, Y') }}</li>
            </ul>
        </div>

        <div class="mt-4">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="btn btn-danger">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="get" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div> -->

