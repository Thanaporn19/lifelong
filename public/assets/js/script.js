$(document).ready(function(){

  // -------------------------------
  // Navbar auto-close on mobile
  // -------------------------------
  $('.navbar-collapse .nav-link').on('click', function(){ 
    $('.navbar-collapse').collapse('hide'); 
  });

  // -------------------------------
  // Smooth scroll for anchors
  // -------------------------------
  $('a[href^="#"]').on('click', function(e){
    var target = $(this.hash);
    if(target.length){
      e.preventDefault();
      $('html,body').animate({
        scrollTop: target.offset().top - 80
      }, 600);
    }
  });

  // -------------------------------
  // Header change color on scroll
  // -------------------------------
  $(window).on('scroll', function(){
    if($(this).scrollTop() > 50){
      $('.site-header').addClass('scrolled');
    } else {
      $('.site-header').removeClass('scrolled');
    }
  });

});
