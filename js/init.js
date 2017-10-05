$(document).ready(function() {

  // Give body a class so the banner will zoom in.
  window.onload = function() {
    document.body.className += ' loaded'
  };

  // Side Navigation
  $(".button-collapse").sideNav({
    closeOnClick: true
  });

  $('.scrollspy').scrollSpy({
    scrollOffset: 55
  });

  GHRepos.create('.projects a')

  //    $(".parallax-container").css('min-height', window.innerHeight);

  $('.modal').modal({
    starting_top: '0%', // Starting top style attribute
    ending_top: '0%' // Ending top style attribute
  });

});
