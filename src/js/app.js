$( document ).ready(function() {
  $(window).on('scroll', function() {
    $('.show #nav').toggleClass('fixed', $(this).scrollTop() > 156);
    $('.home #nav').toggleClass('fixed', $(this).scrollTop() > 556);
  });
});
