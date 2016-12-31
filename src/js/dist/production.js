(function($){
  $(document).ready(function(){

    // Header navigation

    var menuToggle = $('#js-mobile-menu').unbind();
    $('#js-navigation-menu').removeClass('show');
  
    menuToggle.on('click', function(e) {
      e.preventDefault();
      $('#js-navigation-menu').slideToggle(function(){
        if($('#js-navigation-menu').is(':hidden')) {
          $('#js-navigation-menu').removeAttr('style');
        }
      });
    });

  });
}(jQuery));

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNjcmlwdHMuanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJwcm9kdWN0aW9uLmpzIiwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uKCQpe1xuICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xuXG4gICAgLy8gSGVhZGVyIG5hdmlnYXRpb25cblxuICAgIHZhciBtZW51VG9nZ2xlID0gJCgnI2pzLW1vYmlsZS1tZW51JykudW5iaW5kKCk7XG4gICAgJCgnI2pzLW5hdmlnYXRpb24tbWVudScpLnJlbW92ZUNsYXNzKCdzaG93Jyk7XG4gIFxuICAgIG1lbnVUb2dnbGUub24oJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xuICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgJCgnI2pzLW5hdmlnYXRpb24tbWVudScpLnNsaWRlVG9nZ2xlKGZ1bmN0aW9uKCl7XG4gICAgICAgIGlmKCQoJyNqcy1uYXZpZ2F0aW9uLW1lbnUnKS5pcygnOmhpZGRlbicpKSB7XG4gICAgICAgICAgJCgnI2pzLW5hdmlnYXRpb24tbWVudScpLnJlbW92ZUF0dHIoJ3N0eWxlJyk7XG4gICAgICAgIH1cbiAgICAgIH0pO1xuICAgIH0pO1xuXG4gIH0pO1xufShqUXVlcnkpKTtcbiJdfQ==
