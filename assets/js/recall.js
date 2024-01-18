$(".slider-template").slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  centerMode: true,
  arrow: false,
  infinite: true,
  autoplay: true,
  prevArrow: ".left-temp",
  nextArrow: ".right-temp",
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".tesimonials-slider").slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  autoplay: true,
  slidesToScroll: 1,
  arrow: false,
  infinite: true,
  prevArrow: ".left-testi",
  nextArrow: ".right-testi",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      },
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

// Mobile Menu Open

$(".mobile-menu").click(function () {
  $(".mobile-humber").addClass("active");
});
$(".mobile-menu-closed").click(function () {
  $(".mobile-humber").removeClass("active");
});

