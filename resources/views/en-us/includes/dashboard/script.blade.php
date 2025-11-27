<script src="{{ url('public/assets/js/jquery.js')}}"></script>
<script src="{{ url('public/assets/js/popper.min.js')}}"></script>
<script src="{{ url('public/assets/js/bootstrap.min.js')}}"></script>
<script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
<script src="{{ url('public/assets/js/isotop.js')}}"></script>
<script src="{{ url('public/assets/js/custom.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".dashboard_sidebar_menu_toggle").click(function () {
            $(".dashboard_section_row_lft").addClass("sidebar_left");
            $("body").addClass("no-scroll");  // ✅ FIXED
        });

        $(".sidebar_close").click(function () {
            $(".dashboard_section_row_lft").removeClass("sidebar_left");
            $("body").removeClass("no-scroll");  // ✅ enable scroll again
        });
    });
</script>
