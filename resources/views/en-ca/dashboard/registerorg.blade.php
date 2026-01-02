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
    @include('en-ca.includes.dashboard.footer')
<!-- Footer Section CSS End -->
</body>
@include('en-ca.includes.dashboard.script')
</html>
