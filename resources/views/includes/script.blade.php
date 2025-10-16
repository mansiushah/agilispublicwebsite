<script src="{{ url('public/assets/js/jquery.js') }}"></script>
<script src="{{ url('public/assets/js/popper.min.js') }}"></script>
<script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/assets/js/custom.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

      navLinks.forEach(link => {
        link.addEventListener("click", function (e) {
          const targetId = this.getAttribute("href");

          // For internal sections (#features or #download)
          if (targetId.startsWith("#")) {
            e.preventDefault();

            // Smooth scroll to section
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
              targetSection.scrollIntoView({
                behavior: "smooth",
                block: "start"
              });
            }
          }

          // Remove active from all
          navLinks.forEach(l => l.parentElement.classList.remove("active"));
          // Add active to clicked
          this.parentElement.classList.add("active");
        });
      });
    });
  </script>
<script>
document.getElementById('countrySwitcher').addEventListener('change', function() {
  window.location.href = '/' + this.value;
});
</script>
<script>
    const inputs = document.querySelectorAll(".otp-input");
    const otpHidden = document.getElementById("otp");
    const otpForm = document.getElementById("otpForm");

    inputs.forEach((input, index) => {
        // auto move to next
        input.addEventListener("input", (e) => {
            if (e.target.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        // backspace to previous
        input.addEventListener("keydown", (e) => {
            if (e.key === "Backspace" && !input.value && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });

    // before submit, combine into hidden field
    otpForm.addEventListener("submit", () => {
        let otpValue = "";
        inputs.forEach(input => otpValue += input.value);
        otpHidden.value = otpValue;
    });
</script>
