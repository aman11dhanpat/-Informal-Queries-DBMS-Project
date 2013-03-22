$(document).ready(function(){
	$('#btn_login').click ( function (){
		$.post('', $('#login_form').serialize())
		.done(function(data) {
			//alert("Data Loaded: " + data);
			if ( data == "success" )
			{
			}
			else
			{
				//$('#err_login').fadeIn(500);
				$('#err_login').alert();
			}
		});
	});
});
