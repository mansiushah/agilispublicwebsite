<!DOCTYPE html>
<html lang="en">
@include('en-au.includes.dashboard.head')
<body>
<!-- Header Section Start -->
@include('en-au.includes.dashboard.header')
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
                @include('en-au.includes.dashboard.menu')
                <div class="dashboard_section_row_rht">
                    <div class="tab-content dashboad_right_penal" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="dashboard_right_ttl">
                                <h3>Announcements</h3>
                            </div>
                            <div class="announcements_bx">
                                <img src="{{ url('public/assets/img/announcements-img.svg')}}" alt="announcements-img"
                                    class="img-fluid">
                            </div>
                            <div class="announcements_bx_content mt-4">
                                <p>Welcome to the Announcements section! Here you’ll find the latest updates, news,
                                    and important information about our platform.</p>

                                <p>We regularly post system improvements, feature launches, scheduled maintenance
                                    alerts, and tips to help you get the most out of your account.</p>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make.</p>

                                <p>We regularly post system improvements, feature launches, scheduled maintenance
                                    alerts, and tips to help you get the most out of your account.</p>

                                <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- Footer Section CSS Start -->
    @include('en-au.includes.dashboard.footer')
<!-- Footer Section CSS End -->
</body>
@include('en-au.includes.dashboard.script')
</html>

