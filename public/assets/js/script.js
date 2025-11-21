$(document).ready(function(){
  // mobile collapse closes on link click
  $('.navbar-collapse .nav-link').on('click', function(){ 
    $('.navbar-collapse').collapse('hide'); 
  });

  // smooth scroll for anchors
  $('a[href^="#"]').on('click', function(e){
    var target = $(this.hash);
    if(target.length){
      e.preventDefault();
      $('html,body').animate({scrollTop: target.offset().top - 80}, 600);
    }
  });
});
