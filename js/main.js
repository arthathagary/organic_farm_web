// Fixed Navbar
$(window).scroll(function () {
    if ($(window).width() < 1500) {
        if ($(this).scrollTop() > 45) {
            $('.fixed-top').addClass('bg-white shadow');
        } else {
            $('.fixed-top').removeClass('bg-white shadow');
        }
    } else {
        if ($(this).scrollTop() > 45) {
            $('.fixed-top').addClass('bg-white shadow').css('top', -45);
        } else {
            $('.fixed-top').removeClass('bg-white shadow').css('top', 0);
        }
    }
});

