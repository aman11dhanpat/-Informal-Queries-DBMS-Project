$(document).ready(function(){
	$('#btn_login').click ( function (){
		$.post('', $('#login_form').serialize())
		.done(function(data) {
			//alert("Data Loaded: " + data);
			bootbox.alert("Hello world!");
			if ( data == "success" )
			{
			}
			else
			{
				//$('#err_login').fadeIn(500);
				//$('#err_login').alert();
			}
		});
	});
	$('#login_forgot').click (function(){
		bootbox.prompt("Please enter your username", function(result) {                
		  if (result === null) {                                             
		    Example.show("Prompt dismissed");                              
		  } else {
		    Example.show("Hi <b>"+result+"</b>");                          
		  }
		});
	});
});
