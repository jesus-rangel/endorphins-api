const responsiveCarousel = {
  0: {
    items: 1
  },
  576: {
    items: 2
  },
  992: {
    items: 3
  },
}

$(document).ready(function () {
  $nav = $(".nav");
  $toggleCollapse = $(".toggle-collapse");

  /* Open Toggle menu */
  $toggleCollapse.click(function () {
    $nav.toggleClass("collapse");
  });

  /* Owl Carousel */
  $(".owl-carousel").owlCarousel({
    loop: true,
    autoplay: false,
    autoplayTimeout: 3000,
    dots: false,
    nav: true,
    navText: [
      $(".owl-nav .owl-nav-previous"),
      $(".owl-nav .owl-nav-next"),
    ],
    responsive: responsiveCarousel
  });

  /* Footer arrow to scroll top */
  $(".move-up").click(function(){
    $("html, body").animate({
      scrollTop: 0
    },500);
  })

  /* Animation on Scroll instance */
  AOS.init();

});
