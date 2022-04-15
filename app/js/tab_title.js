jQuery(document).ready(function($){
	// Get page title
	var pageTitle = $("title").text();

	// Change page title on blur
	$(window).blur(function(){
		$("title").text("We Miss You, Come Back!");
	});

	// Change page title back on focus
	$(window).focus(function(){
		$("title").text(pageTitle);
	});
});