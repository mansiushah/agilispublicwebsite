<!DOCTYPE html>
<html lang="en">

 @include('includes.head')

<body>
    <!-- Header Section Start -->
      @include('includes.header')
    <!-- Header Section End -->
            <section class="term_condition_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Choose Your Country</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Landing Banner Section End -->
 <section class="choose_country_section">
        <div class="container">
            <form class="choose_country_from">
                <div class="form-group">
                    <h3>Asia Pacific</h3>
                    <input type="text" class="form-control" placeholder="Australia">
                </div>
                <div class="form-group">
                    <h3>Europe</h3>
                    <input type="text" class="form-control" placeholder="United Kingdom">
                </div>
                <div class="choose_country_state">
                    <h3>The United States and Canada</h3>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="choose_country_state_ttl">
                                <h6>Canada (English)</h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="choose_country_state_ttl">
                                <h6>United States</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="choose_country_state_ttl">
                                <h6>Canada (Français)</h6>
                            </div>
                        </div>



                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer Section CSS Start -->
   @include('includes.footer2')
    <!-- Footer Section CSS End -->
</body>

@include('includes.script')
</html>
