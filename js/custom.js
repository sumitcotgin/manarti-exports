$(document).ready(function () {
  // loader
  $("body").addClass("overflow-hidden");
  $(window).on("load", function () {
    $("body").removeClass("overflow-hidden");
    $(".loader").fadeOut();
  });

  //   input type phone
  $("input[type=tel]").keydown(function (event) {
    if (
      event.keyCode == 46 ||
      event.keyCode == 8 ||
      event.keyCode == 9 ||
      event.keyCode == 27 ||
      event.keyCode == 13 ||
      (event.keyCode == 65 && event.ctrlKey === true) ||
      (event.keyCode >= 35 && event.keyCode <= 39)
    ) {
      return;
    } else {
      if (
        event.shiftKey ||
        ((event.keyCode < 48 || event.keyCode > 57) &&
          (event.keyCode < 96 || event.keyCode > 105))
      ) {
        event.preventDefault();
      }
    }
  });

  const scroll = $(".scroll-top");
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(scroll).addClass("active");
    } else {
      $(scroll).removeClass("active");
    }
  });
  $(scroll).click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      "fast"
    );
  });

  $(".scroll-text").on("click", function () {
    $("html, body").animate(
      {
        scrollTop: $("#about").offset().top,
      },
      1000
    );
  });

  // testimonial slider
  $(".card-slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    loop: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".card-slider2").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    loop: true,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1500,
    // rtl: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});

const container = document.querySelector(".horizontalContainer");
const content = document.querySelectorAll(".horizontal-scroll");

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);
gsap.utils.toArray(".section").forEach((sections) => {
  ScrollTrigger.create({
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    trigger: sections,
    start: "top left",
    pin: true,
    pinSpacing: false,
  });
});

const horizontal = gsap.utils.toArray(".horizontal-scroll");
console.log(horizontal)

    gsap.to(horizontal, {
      xPercent: -100 * (horizontal.length - 1),
      ease: "none",
      scrollTrigger: {
        trigger: ".horizontal",
        pin: true,
        invalidateOnRefresh: true,
        scrub: 0.5,
        snap: 1 / (horizontal.length - 1),
        end: () => "+=" + document.querySelector(".horizontal-scroll").offsetWidth,
      },
    });

/* const horizontal = document.querySelectorAll(".horizontal-scroll");

horizontal.forEach((element) => {
  const container = element.parentElement;
  const elementWidth = element.offsetWidth;

  gsap.to(container, {
    scrollTo: {
      x: element, // Scroll to the target element
      autoKill: false, // Keep the scroll position when animation ends
    },
    ease: "power2.inOut", // Easing function for smoother animation
    scrollTrigger: {
      trigger: container,
      start: "top center", // Adjust the start position of the scroll animation
      end: "bottom center", // Adjust the end position of the scroll animation
      scrub: true, // Enable scrubbing for smoother animation
      pin: true, // Keep the container pinned during scroll animation
    },
  });
}); */
