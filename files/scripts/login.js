$(document).ready(function(){
	$('#btn_login').click ( function (){
		$.post('', $('#login_form').serialize())
		.done(function(data) {
			if ( data == "success" )
			{
				window.location.replace("redirect/sys");
			}
			else
			{
				bootbox.alert(data);
			}
		});
	});
	$("#login-name,#login-pass").keypress(function(e) {
	    if(e.which == 13) {
		$.post('', $('#login_form').serialize())
		.done(function(data) {
			if ( data == "success" )
			{
				window.location.replace("redirect/sys");
			}
			else
			{
				bootbox.alert(data);
			}
		});
	    }
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
