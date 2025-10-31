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
                            <div class="tab-pane fade show active" id="v-pills-settings-one" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab-one">
                                <div class="dashboard_right_ttl">
                                    <h3>Set your new password</h3>
                                      @include('flash-message')
                                    <p>Enter your current password and choose a new secure password</p>
                                    <p><b>*Note:</b> Changing your password here will also update it for the Ad Portal
                                        login.</p>
                                </div>

                    <div class="dashboard_form">
                        <form method="POST" action="{{ route('update.changepassword') }}">
                        @csrf
                                        <div class="form-group position-relative">
                                            <label for="exampleInputEmail1">Current Password</label>
                                            <input type="password" class="form-control"
                                                placeholder="Enter current password" name="old_password">
                                            <a href="#" toggle="#password-field"
                                                class="fa fa-fw fa-eye field-icon toggle-password"></a>
                                            @error('old_password')
                                              <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group position-relative">
                                            <label for="exampleInputEmail1">New Password</label>
                                            <input type="password" class="form-control"
                                                placeholder="Enter new password" name="new_password">
                                            <a href="#" toggle="#password-field"
                                                class="fa fa-fw fa-eye field-icon toggle-password"></a>
                                            @error('new_password')
                                              <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group position-relative">
                                            <label for="exampleInputEmail1">Confirm New Password</label>
                                            <input type="password" class="form-control"
                                                placeholder="Confirm new password" name="confirm_password">
                                            <a href="#" toggle="#password-field"
                                                class="fa fa-fw fa-eye field-icon toggle-password"></a>
                                            @error('confirm_password')
                                              <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary login_btn update_password">Update
                                            Password</button>
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
    @include('includes.dashboard.footer')
<!-- Footer Section CSS End -->
</body>
@include('includes.dashboard.script')
</html>


