$(document).ready(function(){
    $('.launch-modal').on('click', function(e){
        e.preventDefault();
        $( '#' + $(this).data('modal-id') ).modal();
    });
    
    $(".typed").typed({
        strings: ["Advomate"],
            typeSpeed: 50,
            loop: false,
            backDelay: 2000
    });
})