$( document ).ready(function() {
  $(window).on('scroll', function() {
    $('.show #nav').toggleClass('fixed', $(this).scrollTop() > 156);
    $('.home #nav').toggleClass('fixed', $(this).scrollTop() > 556);
    $('#nav').toggleClass('mobilescroll', $(this).scrollTop() > 59);
  });

  // var headerHeight = $('.tv-header--intro').height();
  // $('.tv-header--background').css('height', headerHeight);
});
