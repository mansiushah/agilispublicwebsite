<!DOCTYPE html>
<html lang="en">
@include('en-us.includes.dashboard.head')
<body>
<!-- Header Section Start -->
@include('en-us.includes.dashboard.header')
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
                @include('en-us.includes.dashboard.menu')
                  <div class="dashboard_section_row_rht">
                        <div class="tab-content dashboad_right_penal" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="dashboard_right_ttl">
                                    <h3>Profile</h3>
                                    @include('flash-message')
                                </div>

                                <div class="dashboard_form">
                                    <form method="POST" action="{{ route('update.profile') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full Name</label>
                                            <input type="text" class="form-control" value="{{$user->full_name}}" name="full_name">
                                            @error('full_name')
                                              <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="email" class="form-control" value="{{$user->email}}" name="email">
                                             @error('email')
                                              <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary login_btn">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
 </section>
<!-- Footer Section CSS Start -->
    @include('en-us.includes.dashboard.footer')
<!-- Footer Section CSS End -->
</body>
@include('en-us.includes.dashboard.script')
</html>
