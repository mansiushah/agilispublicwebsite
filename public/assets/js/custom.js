//Header scroll Top
$(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 50) {
            $(".header").addClass("header_active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".header").removeClass("header_active");
        }
    });
});

//Page On Loadding Toster
// Show toast on page load
$("#toast").addClass("show");

// Accept button
$(".accept").click(function () {
    //alert("You accepted cookies ✅");
    $("#toast").removeClass("show");
});

// Reject button
$(".reject").click(function () {
    //alert("You rejected cookies ❌");
    $("#toast").removeClass("show");
});



//Toggle Password
$(".toggle-password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    input = $(this).parent().find("input");
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});


// Login Password Meter

function passwordCheck(password) {
    if (password.length >= 8) strength += 1;
    if (password.match(/(?=.*[0-9])/)) strength += 1;
    if (password.match(/(?=.*[!,%,&,@,#,$,^,*,?,_,~,<,>,])/)) strength += 1;
    if (password.match(/(?=.*[a-z])/)) strength += 1;

    displayBar(strength);
}

function displayBar(strength) {
    $(".password-strength-group").attr("data-strength", strength);
}

$("#signupInputPassword").keyup(function () {
    strength = 0;
    var password = $(this).val();
    passwordCheck(password);
});


//Slidebar Arrow Roatate
$(document).ready(function () {
    $('.sub-btn').click(function () {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });
});
