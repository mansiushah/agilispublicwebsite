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
                <p>Enter your email address to reset your password</p>
            </div>
        </div>
    </section>
    <!-- Login Banner Section End -->
    <!-- Login Box Section Start -->
    <section class="login_bx_section">
        <div class="container">
            <div class="login_box">
                <form>
                    <h2>Reset your password</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Type here...">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary login_btn">Send</button>
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
