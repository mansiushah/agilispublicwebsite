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

                            <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="dashboard_right_ttl">
                                    <h3>Register organisation</h3>
                                </div>

                                <div class="dashboard_form">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Company name *</label>
                                            <input type="text" class="form-control" placeholder="Enter company name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Trading name *</label>
                                            <input type="text" class="form-control" placeholder="Enter trading name">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Country*</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="">Select</option>
                                                <option>US</option>
                                                <option>UK</option>
                                                <option>Dubai</option>
                                                <option>Oman</option>
                                                <option>Kuwait</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Currency</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="">Select</option>
                                                <option>Select</option>
                                                <option>US Dollar</option>
                                                <option>Dinar</option>
                                                <option>INR</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Company address*</label>
                                            <input type="text" class="form-control" placeholder="Enter company number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Company number*</label>
                                            <input type="text" class="form-control" placeholder="Enter company number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">VAT number <span
                                                    class="optional">(optional)</span></label>
                                            <input type="text" class="form-control" placeholder="Enter VAT number">
                                        </div>


                                        <button type="button" class="btn btn-primary login_btn" data-toggle="modal"
                                            data-target="#staticBackdrop">Submit</button>
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

