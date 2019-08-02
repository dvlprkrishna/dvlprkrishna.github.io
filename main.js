$(document).ready(function(){
	/*function openNav() {
	  $(document).getElementById("offscreen-nav").css("width", "100%");
	}
	function closeNav() {
	  $(document).getElementById("offscreen-nav").css("width", "0%");
	}

	$(document).getElementsByClassName("hamburger").addEventListener("click", openNav(), false);
	$(document).getElementByClassName("hamburger-close").addEventListener("click", closeNav(), false);*/


	/*function openNav(){
		$("#offscreen-nav").css("width", "100%");
	}
	function closeNav(){
		$("#offscreen-nav").css("width", "0%");
	}
	$(".hamburger").addEventListener("onClick", openNav(), false);
	$(".hamburger-close").addEventListener("click", closeNav(), false);
*/


	$(".hamburger").on('click', function(){
		$("#offscreen-nav").css("width", "100%");
	});
	
	$(".hamburger-close").on('click', function(){
		$("#offscreen-nav").css("width", "0%");
	});

});