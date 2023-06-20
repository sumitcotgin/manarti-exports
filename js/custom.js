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

});

// testimonial slider
/* const swiper = new Swiper(".card-slider", {
  slidesPerView: 'auto',
  spaceBetween: 10,
  loop: true,
  speed: 2000,
  infinite: true,
  freeMode: true,
  centeredSlides: true,
  autoplay: true,
  delay: 0,
  // autoplay: {
  //   delay: 0,
  //   disableOnInteraction: false,
  // },
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
}); */

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
    filter: 'blur(5px)'
  });
});

const horizontalContainer = gsap.utils.toArray(".horizontalContainer");
const horizontal = gsap.utils.toArray(".horizontal-scroll");
// console.log(horizontal);
gsap.to(horizontal, {
  xPercent: -50 * (horizontal.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: horizontalContainer,
    pin: true,
    // invalidateOnRefresh: true,
    scrub: 1,
    // snap: 1 / (horizontal.length - 1),
    // end: () => "+=" + document.querySelector(".horizontal-scroll").offsetWidth,
    end: '=+2000'
  },
});

const cardSlider = gsap.utils.toArray(".card-slider");
const card1 = gsap.utils.toArray(".card-slider .card1");
gsap.to(card1, {
  xPercent: -250 * (card1.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: cardSlider,
    // pin: true,
    scrub: true,
    end: '=+3000'
  },
});

const cardSlider2 = gsap.utils.toArray(".card-slider2");
const card2 = gsap.utils.toArray(".card-slider .card2");
gsap.to(card2, {
  xPercent: -250 * (card2.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: cardSlider2,
    // pin: true,
    scrub: true,
    end: '=+3000'
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

// custom mouse
var cursor = document.querySelector(".cursor");
var cursorinner = document.querySelector(".cursor2");
var a = document.querySelectorAll("a");
document.addEventListener("mousemove", function (e) {
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
});
document.addEventListener("mousemove", function (e) {
  var x = e.clientX;
  var y = e.clientY;
  cursorinner.style.left = x + "px";
  cursorinner.style.top = y + "px";
});
document.addEventListener("mousedown", function () {
  cursor.classList.add("click");
  cursorinner.classList.add("cursorinnerhover");
});
document.addEventListener("mouseup", function () {
  cursor.classList.remove("click");
  cursorinner.classList.remove("cursorinnerhover");
});
a.forEach((item) => {
  item.addEventListener("mouseover", () => {
    cursor.classList.add("hover");
  });
  item.addEventListener("mouseleave", () => {
    cursor.classList.remove("hover");
  });
});
