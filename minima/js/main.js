$(function() {
    $('body').scrollspy({ 
                target: '#dotnav', 
                offset: 000
            }); 

  // This will select everything with the class smoothScroll
  // This should prevent problems with carousel, scrollspy, etc...
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 800); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        trigger: 'hover'
    }); 

    // initializing tooltip    
    $('.smoothScroll').tooltip({
        placement: 'left'
    });
    
    $('.heading').click(function(){
        $(this).find('i').toggleClass('fa-plus fa-minus')
    });
});
