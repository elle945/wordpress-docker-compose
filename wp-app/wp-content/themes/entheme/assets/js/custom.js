jQuery(document).ready(function($) {
    // Aktivera Bootstrap-navigationsmenyn
    $('.navbar-toggler').on('click', function() {
      $('.navbar-collapse').toggleClass('show');
    });
  
    // Aktivera dropdown-funktionalitet för undermenyer
    $('.dropdown').on('show.bs.dropdown', function() {
      $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });
  
    $('.dropdown').on('hide.bs.dropdown', function() {
      $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
  });
  