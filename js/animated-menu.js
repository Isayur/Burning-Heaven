$(document).ready(function(){
	
	$("li.js-dropdown").mouseenter(function(){
		$(this).stop().animate({height:'200px'},{speed:600})
	});
	
	$("li.js-dropdown").mouseleave(function(){
		$(this).stop().animate({height:'40px'},{speed:"fast"})
	});
	
});