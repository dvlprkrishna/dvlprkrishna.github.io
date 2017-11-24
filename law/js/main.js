$(document).ready(function() {
    var biscuit = localStorage.getItem('status');
    if (biscuit == null) {
        localStorage.setItem('biscuit', 1);

        // Show popup here
        $('#largeModal').modal('show');
    }
    window.onload = function () {
        $('#load').fadeOut(300, function(){ 
            $('#load').remove(); 
        });
    }
});

/*$(window).on('load',function(){
    $('#largeModal').modal('show');
});*/

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
$(document).ready(function(){
    $('.heading').click(function(){
        $(this).find('i').toggleClass('fa-plus fa-minus')
    });
});
