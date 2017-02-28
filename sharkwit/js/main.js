$('.nav__toggle').click(function(e){
  $('.menu-main-menu-container').toggleClass('nav--active');
  $('.site').toggleClass('site--pushed');
  e.preventDefault();
});