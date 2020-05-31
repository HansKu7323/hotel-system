'use strict';

$(function() {

  var width = 720;
  var animationSpeed = 1000;
  var pause = 3000;
  var currentSlide = 1; 

  var slider = $('#slider');
  var slideContainer = slider.find('.slides');
  var slides = slideContainer.find('.slide');
  var interval;
  
  function startSlider(){
      interval = setInterval(function() {
          slideContainer.animate({'margin-left': '-='+width},animationSpeed, function(){
            currentSlide++;
            if(currentSlide === slides.length){
              currentSlide = 1;
              slideContainer.css('margin-left', 0);
            }
          });
        }, pause);
      }
      function stopSlider(){
        clearInterval(interval);
      }
  slider.on('mouseenter', stopSlider).on('mouseleave',startSlider);
  startSlider();
})


// back to top
const $win = $(window);
const back = $('#back');

$(function () {
      const $win = $(window);
      const $backToTop = $('#back');  
      $win.scroll(function () {
      if ($win.scrollTop() > 50) {
      $backToTop.show();
      } else {
      $backToTop.hide();
      }
    })
  });
  
  back.on('click',function(){
    
    $('html, body').animate({scrollTop: 0}, 200);
  });


