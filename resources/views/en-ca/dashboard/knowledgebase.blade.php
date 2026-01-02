<!DOCTYPE html>
<html lang="en">
@include('en-ca.includes.dashboard.head')
<body>
<!-- Header Section Start -->
@include('en-ca.includes.dashboard.header')
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
                @include('en-ca.includes.dashboard.menu')
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
    @include('en-ca.includes.dashboard.footer')
<!-- Footer Section CSS End -->
</body>
@include('en-ca.includes.dashboard.script')
</html>


