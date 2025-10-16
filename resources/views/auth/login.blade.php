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
                <h2>Login to Agilis</h2>
            </div>
        </div>
    </section>
    <!-- Login Banner Section End -->
    <!-- Login Box Section Start -->
    <section class="login_bx_section">
        <div class="container">
            <div class="login_box">
                @if(session('error'))
                    <div class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <h2>Log In</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Type here..." name="email">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group position-relative">
                        <div class="form_password">
                            <label>Password</label>
                            <a href="{{ url('forgot')}}">Forgot your password?</a>
                        </div>
                        <input type="password" class="form-control" placeholder="******" name="password">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <a href="#" toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></a>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary login_btn">LogIn</button>
                    </div>
                    <div class="login_create_bx pt-3">
                        <p>Already have an account? <a href="{{url('register')}}">Create an Account</a></p>
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
