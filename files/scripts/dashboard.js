$(document).ready(function(){
	$('#datetimepicker').datetimepicker({
        format: 'yyyy-mm-dd',
        pickTime: false
      });
      /*$("#id_of_textbox").keyup(function(event){
	    if(event.keyCode == 13){
		$("#id_of_button").click();
	    }
	});*/
	
	
	
	
	/*
	
	*/
	
	function ajax_load(){
	
		var cog = new Image();
		var id;
		function init() {
			cog.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAYAAACN1PRVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABK1JREFUeNqMVt1ZGzkUvVfS4IW1l8GO82w6IBXE7mCpAFMB+Pt4Z6iApALcAe4AU0HoAJfg7BPYHinnXmmciX+y0YdmJHnQ0bk/R5cvh5cUyFPwRD4EChgEvGWMB36R3+JaiTkmD5gOs8yNb25uLlerFf1pM2yIGA82TEY7xow1oj4GBU6S6yywPNG4JwDH+XGv0Whs7ndN8n97mmPsLCSYgy7ImPQE/pFDyAF+7L0fgTNFUDBcLal90taD1doQ/T6NT9DnW8zkT+jJuQVYukG3hifCVk/L3JOxMBa8VVlSp9MhHKLaB+zpNo1fdgEpmByuMqUAV5viOQLwXNax9KBAFNEEpN1pUwnQmvl6aTza6zNjrCKaymeyOdYAMgfg18iG4T/qw+AC94zvpzDjcwqOXo3VGH26H0xMZ7jPxgT0R2zUi4BYt6bAfEbJvJFZKA4ODgZ5nhcJLE9mk35X21vWC/TXKmiwr2xszoQd/PQv3t/QCzY2twpqBpb5FKOp+hCgzWaTWq0W1Xx0ij5An9WC5VtiLMwvNBrVaSGMvQk5jHQVPN7sb0HzAtE+QJrNgrcUNEARieWCut0ugR0tl8sKcJ5Ahc3jRviPK8ZGTaaBwGKyT+gTiwM4a3Jrba6MbeVXo5F4kp9shn29ndUYC9vLirGDXzRhrYhD8DME5Hkg22df5rDYS/RXmVIsaP/Q/SXs600YnifTjbeSWliEdTYb3QyTqYfdDKTL4B1KS6tVqf6SgGq3P9BvZGpvNIrPCgVKZlGlCDQDxJiCjVppCab05DJHzb+b1Gm36X80cVjLuzozexs0f6IgRkA5XRhzIixRL1+IzhwdHVHrn1Y9oXe1i10aKT6bGGhg1CKK+cT0zCGCs0oXTIogybJMw/779//o48duMvnO9rzLn+Kz8wgS5Shqo4njpCoOQA5Ajb8adHh4SMvVghaLhYb/HsBip88krNVISSEigOlhjmi0LziNhr6wOsgO9C1339vbGznnNAU2AM9Svk235cqKieKGkldAf7DGvTrjnjJnzyQoMu0ZTuZgUqvmlYR+f39XIE4uqCX1E/rDZpCYmKwOOmivAfYK9KF1AM7EdG4uAMLAOjmQideQXOJQkyUisqYiFRhtSFbxCxj8do0T30dmTvLhC+an0MZZVBHX09tBTG4qFigZEJEChjTIEwtRik81Qa7uOQU0IrYAe7FRjqYw6SlYjgAyN1GmHsFIGPfVnxzFuFITKEkfYK+oWZ5qKlIkcZ7UE92oXBmeIgIxtAO5UtSHqo9uiLW+sme5ejSIRASeAFR4LYy8MMzL1aq3EYWzJF28BgMEzGYpBkrMKelgl+P6uTcVY8NjLYyYPwMTCcufSaouH6al9xNJcjC82vDb9uVZKbrWIumNO+waVsu1TCC+Wxcg6xaSpsZSYM2wLO9/U8qZWH+wztQnsfAxV/E3MIKZVf1FsmJVV8mamhEmxZ0X7sSsABsGv1tZJGejmptU7FBUDYzPAXQBwFEEl+9+stFEroJEci2ELwIMmZuWoSTE9DYYcWVCjlJrZWMpeBhlAEqBiulPE84S3ixU5gSTwGGOdyEVNJXxA8nPevshwABHktBS1YoQ+QAAAABJRU5ErkJggg=='; // Set source path
			id = setInterval(draw,10);
		}
		var rotation = 0;
		function draw(){
			var ctx = document.getElementById('myCanvas').getContext('2d');
			ctx.globalCompositeOperation = 'destination-over';
			ctx.save();
			ctx.clearRect(0,0,27,27);
			ctx.translate(13.5,13.5); // to get it in the origin
			rotation +=1;
			ctx.rotate(rotation*Math.PI/64); //rotate in origin
			ctx.translate(-13.5,-13.5); //put it back
			ctx.drawImage(cog,0,0);
			ctx.restore();
		}
		$('#dash_result').html('<center><canvas width="27" height="27" id="myCanvas"></canvas></center>');
		init();
		return id;
	}
	
	
	/*
	
	*/
	
	
	
	function add_flight(from , to)
	{
		bootbox.dialog('<p><form id="add_fl" action="" method="post"><input type="text" value="' + from + '" name="from" placeholder="From" class="span3">'
			+ '<br /><input type="text" value="' + to + '" name="to" placeholder="To" class="span3">'
			+ '<br /><span id="arr_picker" class="input-append date"> <input id="arr_pick_inp" name="arr_pick" type="text" placeholder="Departure Time (HH:MM)"> <span class="add-on fui-calendar-24"></span></span>'
			+ '<br /><br /><span id="dept_picker" class="input-append date"> <input id="dept_pick_inp" name="dept_pick" type="text" placeholder="Arrival Time (HH:MM)"> <span class="add-on fui-calendar-24"></span></span>'
			+ '<br /><br /><input type="text" value="" name="fair" placeholder="Fair" class="span3">'
			+ '<br /><input type="text" value="" name="flname" placeholder="Flight Name" class="span3">'
			+ '</form></p>'
			, [{"label":"Add Flight","callback":
				function(){
					$.post('add_flight' , $('#add_fl').serialize()).done(function(data) {
						bootbox.alert(data);
					});  
				}
			},{"label":"cancel"}]
		);
		$('#arr_picker').datetimepicker({
			format: 'hh:mm',
			pickDate: false
	        });
	        $('#dept_picker').datetimepicker({
			format: 'hh:mm',
			pickDate: false
	        });
	}
	function add_admin(name)
	{
		bootbox.prompt("Enter the username of new admin", function(result) {                
		  if (result === null) {                          
		  } else {                 
		    	    $.post('add_admin' , "name="+result).done(function(data) {
				bootbox.alert(data);
			    });                      
		  }
		});
	}
	function pre_process()
	{
		var val = $('#search').val();
		if (val == "Show transactions.")
		{
			$('#trans').trigger('click');
			return true;
		}
		var sub = val.split(' ');
		//alert (sub[0] + ' + ' + sub[1] + ' + ' + sub[2] + ' + ' + sub[3] + ' + ' + sub[4]);
		if (sub[0] == 'Add' || sub[0] == 'add')
		{
			if (sub[1] == 'flight')
			{
				add_flight(sub[3] , sub[5]);
				return true;
			}
			else if (sub[1] == 'admin')
			{
				add_admin (sub[2]);
				return true;
			}
			else
				return false;
		}
		else if (sub[0] == 'Remove' || sub[0] == 'remove')
		{
			if (sub[1] == 'flight')
			{
				remove_flight(sub[2]);
				return true;
			}
			else if (sub[1] == 'admin')
			{
				remove_admin (sub[2]);
				return true;
			}
			else
				return false;
		}
		else
			return false;
	}
	$("#search").keypress(function(e) {
	    if(e.which == 13) {
	    	$('#dash_search').trigger('click');
	    }
	});
	$('#trans').click(function(){
		var id = ajax_load();
		$.post('trans').done(function(data) {
			$('#dash_result').html(data);
			clearInterval(id);
		});
	});
	$("#dash_search").click(function(){
		if (pre_process() == true)
			return;
		var id = ajax_load();
		if ($('#search').val().length > 10)
		{
			$.post('auto_search' , 'search=' + encodeURIComponent($('#search').val())).done(function(data) {
				console.log(data);
				if ( data.length < 30 )
				{
					$.post('manual_search' , data).done(function(data2) {
						$('#dash_result').html(data2);
						
					});
				}
				else
				{
					bootbox.alert(data);
				}
				clearInterval(id);
			});
			return;
		}
		$('#search').val('Show all flights from City1 to City2 on YYYY-MM-DD.');
		$.post('manual_search' , $('#manual_search').serialize()).done(function(data) {
			$('#dash_result').html(data);
			clearInterval(id);
		});
	});
});
