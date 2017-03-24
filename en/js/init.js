$( document ).ready(function() {

    $(".button-collapse").sideNav({
        closeOnClick: true
    });
    
    $('.parallax').parallax();

    $('.scrollspy').scrollSpy({
        scrollOffset: 55
    });

    $(".parallax-container").css('min-height', window.innerHeight);
	
	$('.modal').modal({
		starting_top: '0%', // Starting top style attribute
		ending_top: '0%', // Ending top style attribute
	});
    
});