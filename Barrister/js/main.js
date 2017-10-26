var amountScrolled = 300;
$(window).scroll(function() {
    if ( $(window).scrollTop() > amountScrolled ) {
        $('a.backtotop').fadeIn('slow');
    } else {
        $('a.backtotop').fadeOut('slow');
    }
});
$('a.backtotop').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 700);
    return false;
});
$(document).ready(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() >= 250) {
            $(".navbar").addClass("compressed");
        } else {
            $(".navbar").removeClass("compressed");
        }
    });
});