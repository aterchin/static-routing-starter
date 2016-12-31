(function($){
  $(document).ready(function(){

    // Header navigation

    var menuToggle = $('#js-mobile-menu').unbind();
    $('#js-navigation-menu').removeClass('show');
  
    menuToggle.on('click', function(e) {
      e.preventDefault();
      $('#js-navigation-menu').slideToggle();
    });

  });
}(jQuery));
