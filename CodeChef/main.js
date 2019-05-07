$( document ).ready(function() {
    // console.log( "ready!" );
	  console.log(localStorage);

	  var tx1, tx2, tx3, tx4;

	  $('#btn1').click(function () {
	  	tx1 = $("#lb1").val();
	  	tx2 = $("#lb2").val();
	  	localStorage.setItem("key0", tx1);
	  	localStorage.setItem("key1", tx2);
	  	// console.log(localStorage.getItem("key0"));
	  	// console.log(localStorage.getItem("key1"));
	  });

	  $('#btn2').click(function () {
	  	tx3 = $("#lb3").val();
	  	tx4 = $("#lb4").val();
	  	localStorage.setItem("key2", tx3);
	  	localStorage.setItem("key3", tx4);
	  	// console.log(localStorage.getItem("key2"));
	  	// console.log(localStorage.getItem("key3"));
	  });

	  $("#t1").text(localStorage.getItem("key0"));
	  $("#t2").text(localStorage.getItem("key1"));
	  $("#t3").text(localStorage.getItem("key2"));
	  $("#t4").text(localStorage.getItem("key3"));

});