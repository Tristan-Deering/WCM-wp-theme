(function($){
  let menu = $('#fullscreen-menu');

  $('#menu-button').click(function() {
    $('#fullscreen-menu').addClass('open');
   });

   $('#close-menu').click(function() {
    $('#fullscreen-menu').removeClass('open');
   });
  
} )( jQuery );
