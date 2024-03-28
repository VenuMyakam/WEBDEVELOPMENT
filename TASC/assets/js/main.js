$(window).on('load', function() {
    gridAdjust(".info-benefits-mobile-slider .info-media-content");
    gridAdjust(".info-support-mobile-slider .info-bg-card");
    gridAdjust(".info-partner-mobile-slider .info-partner-media-content");
    gridAdjust(".info-learn-more-mobile-slider .info-learn-more-card");
    gridAdjust(".info-requirements-mobile-slider .info-requirements-media-content");
  });

$(window).resize(function() {
    gridAdjust(".info-benefits-mobile-slider .info-media-content");
    gridAdjust(".info-support-mobile-slider .info-bg-card");
    gridAdjust(".info-partner-mobile-slider .info-partner-media-content");
    gridAdjust(".info-learn-more-mobile-slider .info-learn-more-card");
    gridAdjust(".info-requirements-mobile-slider .info-requirements-media-content");




});
$(window).on('load', function() {
    gridAdjust(".info-benefits-mobile-slider .info-media-content");
    gridAdjust(".info-support-mobile-slider .info-bg-card");
    gridAdjust(".info-partner-mobile-slider .info-partner-media-content");
    gridAdjust(".info-learn-more-mobile-slider .info-learn-more-card");
    gridAdjust(".info-requirements-mobile-slider .info-requirements-media-content");


  });

$(document).ready(function() {
    mobileSlider(".info-benefits-mobile-slider", 1, true, false, 767);
    mobileSlider(".info-support-mobile-slider", 1, true, false, 767);
    mobileSlider(".info-partner-mobile-slider", 1, true, false, 767);
    mobileSlider(".info-learn-more-mobile-slider", 1, true, false, 767);
    mobileSlider(".info-requirements-mobile-slider", 1, true, false, 767);
});


var mobileSlider = ($slidername, $slidesToShow, $dots, $arrows, $breakpoint) => {

    var slider = $($slidername);
      var settings = {
        mobileFirst: true,
        slidesToShow: $slidesToShow,
        slidesToScroll: 1,
        dots: $dots,
        arrows: $arrows,
        autoplay: false,
        autoplaySpeed: 4000,
        infinite: false,
        responsive: [
          {
            breakpoint: $breakpoint,
            settings: "unslick"
          }
        ]
      };
  
      slider.slick(settings);
      slider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
          slider.find(".slick-slide").removeClass('works');
          slider.find('.slick-current').addClass('works');
          slider.find('.slick-current').toggleClass("hovered");
       });
  
      $(window).on("resize", function () {
        if ($(window).width() > $breakpoint) {
  
          return;
        }
        if (!slider.hasClass("slick-initialized")) {
          return slider.slick(settings);
        }
      });
  }

  function gridAdjust(targertSteing) {
	// if ($(window).width() < 767) {
	var targertHight = $(targertSteing);
	  targertHight.css('height', 'auto');
	   var heights = [];
	   targertHight.each(function() {
		 var elem = $(this);
		 var height = elem.outerHeight();
		 heights.push(height);
	   });
	   heights = heights.sort(function(a, b) {
		 return b - a
	   });
	   var tallest = heights[0];
	   targertHight.css('height', tallest + 'px');
	// }
  }