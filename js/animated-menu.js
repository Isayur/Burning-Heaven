$(document).ready(function(){
	
	$(".js-dropdown").mouseenter(function(){
		$(this).stop().animate({height:'200px'},{speed:600})
	});
	
	$(".js-dropdown").mouseleave(function(){
		$(this).stop().animate({height:'40px'},{speed:"fast"})
	});
	
});