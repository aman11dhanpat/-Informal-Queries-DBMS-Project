$(document).ready(function(){
	$('#btn_register').click ( function (){
		$.post('', $('#register_form').serialize())
		.done(function(data)
		{
			bootbox.alert(data);
		});
	});
});
