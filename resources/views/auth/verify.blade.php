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
                <h2>Verification</h2>
                <p>Enter verification code</p>
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
                <form action="{{ route('verify.otp.submit') }}" method="POST" id="otpForm">
                    @csrf
                    <input type="hidden" name="email" class="form-control" value="{{ $email ?? '' }}">
                    <input type="hidden" name="otp" id="otp"> <!-- final OTP value -->
                    <p>We have sent the verification code to your email <br><a href="#">loremipsum@mail.com</a><br>
                        If you haven’t received this in your Inbox, we advise checking your Junk/Spam folder too.</p>
                    <div class="form-group">
                        <div class="verification_code_bx">
                            <input type="text" class="form-control otp-input" maxlength="1" name="digit1">
                            <input type="text" class="form-control otp-input"  maxlength="1" name="digit2">
                            <input type="text" class="form-control otp-input" maxlength="1" name="digit3">
                            <input type="text" class="form-control otp-input" maxlength="1" name="digit4">
                        </div>
                    </div>
                    <div class="text-center">
                        <h5>02:39</h5>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary login_btn" >Verify</button>
                    </div>
                    <div class="login_create_bx pt-3">
                        <p class="mb-0">Didn’t receive the code? <a href="{{ route('resend-otp', ['email' => $email])}}" class="resend_link">Resend</a></p>
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
<script>
document.addEventListener('DOMContentLoaded', function () {
    const inputs = document.querySelectorAll('.otp-input');
    const hiddenOtp = document.getElementById('otp');

    // Auto move to next input
    inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            const value = e.target.value.replace(/[^0-9]/g, ''); // allow only digits
            e.target.value = value;
            if (value && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
            updateHiddenOtp();
        });

        // Handle backspace → move to previous input
        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && !e.target.value && index > 0) {
                inputs[index - 1].focus();
            }
        });

        // Handle paste (this fixes your issue)
        input.addEventListener('paste', (e) => {
            e.preventDefault();
            const pasteData = (e.clipboardData || window.clipboardData).getData('text').trim();
            if (!/^\d+$/.test(pasteData)) return; // only digits

            // Split pasted text into boxes
            pasteData.split('').forEach((char, i) => {
                if (inputs[i]) inputs[i].value = char;
            });

            updateHiddenOtp();
            inputs[Math.min(pasteData.length - 1, inputs.length - 1)].focus();
        });
    });

    function updateHiddenOtp() {
        const otpValue = Array.from(inputs).map(i => i.value).join('');
        hiddenOtp.value = otpValue;
    }

    // Optional: prevent form submit if OTP incomplete
    document.getElementById('otpForm').addEventListener('submit', function (e) {
        updateHiddenOtp();
        if (hiddenOtp.value.length < inputs.length) {
            e.preventDefault();
            alert('Please enter complete OTP');
        }
    });
});
</script>
</html>
