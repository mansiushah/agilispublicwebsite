<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    <!-- Header Section Start -->
      @include('includes.header')
    <!-- Header Section End -->
    <!-- Offer Banner Section Start -->
    <!-- Landing Banner Section Start -->
    <section class="term_condition_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Cookie Policy</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Landing Banner Section End -->

    <!-- Term And Constion Section Start -->
    <section class="term_and_condition_section">
        <div class="container">
            <div class="term_section">
                <p>A cookie is a small file of letters and numbers that is stored in users’ internet browsers and hard
                    drives. Our website uses cookies to distinguish you from other users of our website and help us to
                    improve our services. This helps us to provide you with a good experience when you browse our
                    website and also allows us to improve our site.</p>

                <p>We use the following cookies:</p>
            </div>

            <div class="term_section">
                <h5>Strictly necessary cookies</h5>
                <p>These are cookies that are required for the operation of our services</p>
            </div>


            <div class="term_section">
                <h5>Analytical or performance cookies</h5>
                <p>These allow us to recognise and count the number of visitors and to see how visitors use our
                    services. We use this information to improve the way our services works, for example, by ensuring
                    that users are finding what they are looking for easily.</p>
                <p>You can find more information about the individual cookies we use and the purposes for which we use
                    them in the table below:</p>
            </div>

            <div class="term_section">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Sample Cookies</th>
                                <th>Category</th>
                                <th>Purpose</th>
                                <th>Third-party link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cloudflare</td>
                                <td>_cf_bm, cf_clearance</td>
                                <td>Strictly necessary cookies</td>
                                <td>To detect and prevent inappropriate use of the website</td>
                                <td><a href="#">CloudflareCookies.CloudflareFundamentalsdocs</a></td>
                            </tr>
                            <tr>
                            <tr>
                                <td class="bdr_lft">Cloudflare</td>
                                <td>_cf_bm, cf_clearance</td>
                                <td>Strictly necessary cookies</td>
                                <td>To detect and prevent inappropriate use of the website</td>
                                <td class="bdr_rht"><a href="#">https://matomo.org/faq/general/faq_146/</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
    <!-- Term And Constion Section End -->

    <!-- Footer Section CSS Start -->
   @include('includes.footer')
    <!-- Footer Section CSS End -->
</body>

@include('includes.script')
</html>
