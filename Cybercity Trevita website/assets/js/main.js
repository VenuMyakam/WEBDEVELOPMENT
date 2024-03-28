$(document).ready(function() {
  mobileSlider(".highlights-slider-mobile", 2, true, false, 767);
  mobileSlider(".amenities-slider-mobile", 1.3, true, false, 767);
});



$('.hero-banner-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    fade:true,
  });


  $('.center-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    // centerMode: true,
    arrows: true,
    appendArrows: $('.info_spec_arrows'),
        prevArrow: '<div class="slick-nav news__arrow news__arrow_dir_left"><i class="fa-solid fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-nav news__arrow news__arrow_dir_right"><i class="fa-solid fa-chevron-right"></i></div>',
    dots: false,
    speed: 300,
    // centerPadding: '150px',
    infinite: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.center-slider-small').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    // centerMode: false,
    arrows: true,
    appendArrows: $('.info_small_slider_arrows'),
        prevArrow: '<div class="slick-nav news__arrow news__arrow_dir_left"><i class="fa-solid fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-nav news__arrow news__arrow_dir_right"><i class="fa-solid fa-chevron-right"></i></div>',
    dots: false,
    speed: 300,
    // centerPadding: '20px',
    infinite: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.info-floor-plan-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    // centerMode: false,
    arrows: true,
    appendArrows: $('.info_floor_plan_arrows'),
        prevArrow: '<div class="slick-nav news__arrow news__arrow_dir_left"><i class="fa-solid fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-nav news__arrow news__arrow_dir_right"><i class="fa-solid fa-chevron-right"></i></div>',
    dots: false,
    speed: 300,
    // centerPadding: '20px',
    infinite: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });



  $('.info-testmonial-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    fade: true,
    arrows: true,
    appendArrows: $('.info_testmonial_arrows'),
        prevArrow: '<div class="slick-nav news__arrow news__arrow_dir_left"><i class="fa-solid fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-nav news__arrow news__arrow_dir_right"><i class="fa-solid fa-chevron-right"></i></div>',
    dots: false,
    speed: 300,
    centerPadding: '20px',
    infinite: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });


  var mobileSlider = ($slidername, $slidesToShow, $dots, $arrows, $breakpoint) => {

    var slider = $($slidername);
      var settings = {
        mobileFirst: true,
        slidesToShow: $slidesToShow,
        slidesToScroll: 1,
        dots: $dots,
        arrows: $arrows,
        autoplay: true,
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
      // slider.on('laod', function(event, slick, currentSlide, nextSlide){
      //     let actives = slider.find(".slick-active").addClass('balaraju');
      // });
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

