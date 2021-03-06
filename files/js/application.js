// Some general UI pack related JS

$(function () {
    // Custom selects
    $("select").dropkick();
});

$(document).on( 'click' , ".todo li" , function() {
	$(this).toggleClass("todo-done");
});

$(document).on( 'click' , ".fl" , function() {
	var day = $(this).attr('day');
	var id = $(this).attr('uid')
	bootbox.confirm("Are you sure you want to book ticket in flight : " + $(this).attr('fname') + "<br />Total Availablity on " + $(this).attr('day') + " is : " + $(this).attr('aval') + "<br />Total cost is : " + $(this).attr('cost') , function (result){
		if (result == true)
		{
			$.post('book_flight' , 'id=' + id + '&date=' + day , function (data){
				bootbox.alert (data);
			});
		}
	});
	$(this).toggleClass("todo-done");
});

$(document).ready(function() {
    // Todo list
    $(".todo li").click(function() {
        $(this).toggleClass("todo-done");
    });
    
    /*$(".fl").bind('click' , function() {
        bootbox.alert($(this).attr());
    });*/

    // Init tooltips
    //From mumbai to surat on 11/11/1111
    $("[data-toggle=tooltip]").tooltip("show");

    // Init tags input
    $("#tagsinput").tagsInput();

    // Init jQuery UI slider
    $("#slider").slider({
        min: 1,
        max: 5,
        value: 2,
        orientation: "horizontal",
        range: "min",
    });

    // JS input/textarea placeholder
    $("input, textarea").placeholder();

    // Make pagination demo work
    $(".pagination a").click(function() {
        if (!$(this).parent().hasClass("previous") && !$(this).parent().hasClass("next")) {
            $(this).parent().siblings("li").removeClass("active");
            $(this).parent().addClass("active");
        }
    });

    $(".btn-group a").click(function() {
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
    });

    // Disable link click not scroll top
    $("a[href='#']").click(function() {
        return false
    });

});

