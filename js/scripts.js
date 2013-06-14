$(document).ready(function() {

    //body fade in
  $("body").css("display", "none");
    $("body").fadeIn(1000);

 //Start of hover opacity effect
  $('.social a, .prev, .next').hover(function() {
    $(this).find('img').stop().fadeTo( 'fast', .2 );

    }, function() {
      $(this).find('img').stop().fadeTo( 'slow', 1 );
    }); //End of hover

 //start Fancybox
  $(".fancybox").fancybox();
 //end Fancybox

 //SlideJS script
  $(function(){
    $('#slides').slides({
      preload: true,
      preloadImage: 'images/slide/loading.gif',
      play: 10000,
      pause: 2500,
      hoverPause: true
    });
  });

 //nav button page animation
  $("#contactbutton").click(function(){
    $('html, body').animate({
      scrollTop: $("#contact").offset().top -100
    }, 1500);
    return false;
  });

  $("#portfoliobutton").click(function(){
    $('html, body').animate({
      scrollTop: $("#portfolio").offset().top -150
    }, 1500);
    return false;
  });

  $("#homebutton").click(function(){
    $('html, body').animate({
      scrollTop: $("#home").offset().top
    }, 1500);
    return false;
  });

});