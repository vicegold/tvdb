$( document ).ready(function() {
  var headerHeight = $('.tv-header--intro').height();
  console.log(headerHeight);

  $(window).on('scroll', function() {
    $('.show #nav').toggleClass('fixed', $(this).scrollTop() > 156);
    $('.home #nav, .tv-header').toggleClass('fixed', $(this).scrollTop() > headerHeight + 70);
    $('#nav').toggleClass('mobilescroll', $(this).scrollTop() > 59);
  });


});
