(function($) {

$(document).ready(function(){

  // Header Slider
  $('.sliders__header').slick({
    dots: false,
    arrows: false,
    infinite: false,
    autoplay: true,
    autoplaySpeed: 7000,
    speed: 1000,
    fade: true,
  });

  $('.sliders').slick({
      dots: true,
      arrows: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },

      ]
  });
});

})(jQuery);
    