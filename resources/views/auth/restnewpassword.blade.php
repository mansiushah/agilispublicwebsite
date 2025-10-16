<!DOCTYPE html>
<html lang="en">

 @include('includes.head')

<body>
    <!-- Header Section Start -->
     @include('includes.header')
    <!-- Header Section End -->
    <!-- Login Banner Section Start -->
    <section class="login_banner">
        <div class="container">
            <div class="login_banner_box text-center">
                <h2>Reset your password</h2>
                <p>Enter a unique password to protect your account.</p>
            </div>
        </div>
    </section>
    <!-- Login Banner Section End -->
    <!-- Login Box Section Start -->
    <section class="login_bx_section">
        <div class="container">
            <div class="login_box">
                <form>
                    <h2>Set Password</h2>
                    <div class="form-group position-relative">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="******">
                        <a href="#" toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></a>
                    </div>
                    <div class="form-group position-relative">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="******">
                        <a href="#" toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></a>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary login_btn">Reset</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- Login Box Section End -->
    <!-- Footer Section CSS Start -->
   @include('includes.footer2')
    <!-- Footer Section CSS End -->
</body>
 @include('includes.script')

</html>
