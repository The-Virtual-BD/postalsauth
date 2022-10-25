$(document).ready(function() {
    $('.nav-main li').hover(function(e){
      $(this).find('.submenu').toggleClass('hidden');
    });
    $('.mobile-nav-main li').hover(function(e){
      $(this).find('.submenu').toggleClass('hidden');
    });



    $('.owl-dots').css('margin-top', '40px');

    // Mobile Dropdown toggle
    $("#menuToggle").click(function () {
        $("#mobileMenu").slideToggle();
        console.log('Clicked');
    });

    $(document).click(function (e) {
        var target = e.target;
        if (!$(target).is("#menuToggle") && !$(target).parents().is("#menuToggle")) {
            $("#mobileMenu").slideUp();
        }
    });
});


