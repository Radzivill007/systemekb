jQuery(".slider-path").slick({
  infinite: false,
  speed: 400,
  touchThreshold: 50,
  swipeToSlide: true,
  autoplay: false,
  initialSlide: 1,
  arrows: true,
  nextArrow: '<button class="slider-next"></button>',
  prevArrow: '<button class="slider-prev"></button>',
});

jQuery(".slider-home").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  dots: false,
  speed: 500,
  fade: true,
  cssEase: "linear",
});

jQuery(".slider-video_feedback").slick({
  infinite: true,
  speed: 400,
  touchThreshold: 50,
  swipeToSlide: true,
  autoplay: false,
  arrows: true,
  variableWidth: true,
  centerMode: true,
  centerPadding: '0px',
  nextArrow: '<button class="slider-next"></button>',
  prevArrow: '<button class="slider-prev"></button>',
});

jQuery('.slider-feedback').slick({
  infinite: true,
  speed: 400,
  touchThreshold: 50,
  swipeToSlide: true,
  autoplay: false,
  arrows: true,
  variableWidth: true,
 
  nextArrow: '<button class="slider-next"></button>',
  prevArrow: '<button class="slider-prev"></button>',
  slidesToShow: 3,
  slidesToScoll: 3,
  responsive: [
    {
      breakpoint: 1439,
      settings: {
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});