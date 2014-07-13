//For Off Canvas Functionality

jQuery(document).ready(function ( $ ) {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
});