if (screen.width > 991) {
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
}

$(document).ready(function () {
  // loader
  /* $("body").addClass("overflow-hidden");
  $(window).on("load", function () {
    $("body").removeClass("overflow-hidden");
    $(".loader").fadeOut();
  }); */

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
      100
    );
  });

  $(".scroll-text").on("click", function () {
    $("html, body").animate(
      {
        scrollTop: $("#about").offset().top,
      },
      10
    );
  });

  $('.event-carousel').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 100,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});

gsap.from(".main-title", {
  x: -500,
  ease: "bounce",
  duration: 2,
});



if (screen.width > 991) {
  const text_scroll_container = gsap.utils.toArray(".text_scroll_container");
  const text_scroll = gsap.utils.toArray(".text_scroll");
  gsap.from(text_scroll, {
    xPercent: 100 * (text_scroll.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: text_scroll_container,
      scrub: true,
      start: "70% 80%",
      end: "=+800",
    },
  });

  const horizontalContainer1 = gsap.utils.toArray(".horizontalContainer1");
  const horizontal1 = gsap.utils.toArray(".horizontal-scroll1");
  gsap.from(horizontal1, {
    x: -1500,
    ease: "power.inOut",
    scrollTrigger: {
      trigger: horizontalContainer1,
      scrub: true,
      start: "40% 80%",
      end: "40% 60%",
    },
  });
  const horizontalContainer2 = gsap.utils.toArray(".horizontalContainer2");
  const horizontal2 = gsap.utils.toArray(".horizontal-scroll2");
  gsap.from(horizontal2, {
    x: 1500,
    ease: "power.inOut",
    scrollTrigger: {
      trigger: horizontalContainer2,
      scrub: 1,
      start: "40% 80%",
      end: "40% 60%",
    },
  });
  const horizontalContainer3 = gsap.utils.toArray(".horizontalContainer3");
  const horizontal3 = gsap.utils.toArray(".horizontal-scroll3");
  gsap.from(horizontal3, {
    x: -1500,
    ease: "power.inOut",
    scrollTrigger: {
      trigger: horizontalContainer3,
      scrub: 1,
      start: "40% 80%",
      end: "40% 60%",
    },
  });
  const horizontalContainer4 = gsap.utils.toArray(".horizontalContainer4");
  const horizontal4 = gsap.utils.toArray(".horizontal-scroll4");
  gsap.from(horizontal4, {
    x: 1500,
    ease: "power.inOut",
    scrollTrigger: {
      trigger: horizontalContainer4,
      scrub: 1,
      start: "40% 80%",
      end: "40% 60%",
    },
  });
  const horizontalContainer5 = gsap.utils.toArray(".horizontalContainer5");
  const horizontal5 = gsap.utils.toArray(".horizontal-scroll5");
  gsap.from(horizontal5, {
    x: -1500,
    ease: "power.inOut",
    scrollTrigger: {
      trigger: horizontalContainer5,
      scrub: 1,
      start: "40% 80%",
      end: "40% 60%",
    },
  });

  const cardSlider = gsap.utils.toArray(".card-slider");
  const card1 = gsap.utils.toArray(".card-slider .card1");
  gsap.from(card1, {
    xPercent: -250 * (card1.length - 1),
    ease: "linear",
    scrollTrigger: {
      trigger: cardSlider,
      scrub: true,
      start: "30% 80%",
      end: "40% 60%",
    },
  });

  const cardSlider2 = gsap.utils.toArray(".card-slider2");
  const card2 = gsap.utils.toArray(".card-slider2 .card2");
  gsap.from(card2, {
    xPercent: 250 * (card2.length - 1),
    ease: "linear",
    scrollTrigger: {
      trigger: cardSlider2,
      scrub: true,
      start: "30% 80%",
      end: "40% 60%",
    },
  });

  const certificateContainer = gsap.utils.toArray(".certificateContainer");
  const certificate1 = gsap.utils.toArray(".certificate1");
  gsap.from(certificate1, {
    x: -500,
    y: -500,
    duration: 5,
    ease: "power.inOut",
    opacity: 0,
    scrollTrigger: {
      trigger: certificateContainer,
      scrub: true,
      start: "40% 100%",
      end: "50% 40%",
      stagger: true,
    },
  });
  const certificate2 = gsap.utils.toArray(".certificate2");
  gsap.from(certificate2, {
    x: 500,
    y: -500,
    duration: 5,
    delay: 2,
    ease: "power.inOut",
    opacity: 0,
    scrollTrigger: {
      trigger: certificateContainer,
      scrub: true,
      start: "40% 100%",
      end: "50% 40%",
      stagger: true,
    },
  });
  const certificate3 = gsap.utils.toArray(".certificate3");
  gsap.from(certificate3, {
    x: -500,
    ease: "power.in",
    opacity: 0,
    scrollTrigger: {
      trigger: certificateContainer,
      scrub: true,
      start: "top 50%",
      end: "bottom 20%",
    },
  });
  const certificate4 = gsap.utils.toArray(".certificate4");
  gsap.from(certificate4, {
    x: 500,
    ease: "power.in",
    opacity: 0,
    scrollTrigger: {
      trigger: certificateContainer,
      scrub: true,
      start: "top 50%",
      end: "bottom 20%",
    },
  });

  /* const eventContainer1 = gsap.utils.toArray(".eventContainer1");
  const eventScroll1 = gsap.utils.toArray(".eventScroll1");
  gsap.from(eventScroll1, {
    duration: 2,
    ease: "expo.out",
    y: 800,
    opacity: 0,
    scrollTrigger: {
      trigger: eventContainer1,
      scrub: 1,
      start: "70% 80%",
      end: "80% 20%",
    },
  });

  const eventContainer2 = gsap.utils.toArray(".eventContainer2");
  const eventScroll2 = gsap.utils.toArray(".eventScroll2");
  gsap.from(eventScroll2, {
    duration: 4,
    ease: "expo.out",
    y: 800,
    opacity: 0,
    scrollTrigger: {
      trigger: eventContainer2,
      scrub: 1,
      start: "50% 80%",
      end: "80% 20%",
    },
  });

  const eventContainer3 = gsap.utils.toArray(".eventContainer3");
  const eventScroll3 = gsap.utils.toArray(".eventScroll3");
  gsap.from(eventScroll3, {
    duration: 6,
    ease: "expo.out",
    y: 800,
    opacity: 0,
    scrollTrigger: {
      trigger: eventContainer3,
      scrub: 1,
      start: "50% 80%",
      end: "80% 20%",
    },
  });

  const eventContainer4 = gsap.utils.toArray(".eventContainer4");
  const eventScroll4 = gsap.utils.toArray(".eventScroll4");
  gsap.from(eventScroll4, {
    duration: 8,
    ease: "expo.out",
    y: 800,
    opacity: 0,
    scrollTrigger: {
      trigger: eventContainer4,
      scrub: 1,
      start: "70% 80%",
      end: "80% 20%",
    },
  }); */

  gsap.from(".about-banner p", {
    x: -1500,
    delay: 0.5,
    duration: 0.8,
    stagger: 0.4,
  });
  gsap.to(".signature", {
    y: 20,
    delay: 0.5,
    duration: 1,
    repeat: -1,
    yoyo: true,
  });

  const tradeMark = gsap.utils.toArray(".trademark-section");
  gsap.from(".textScroll", {
    ease: "expo.out",
    y: -100,
    opacity: 0,
    scrollTrigger: {
      trigger: tradeMark,
      scrub: 1,
      start: "70% 80%",
      end: "50% 20%",
    },
  });
  gsap.from(".textScrollBack", {
    ease: "expo.out",
    x: -800,
    opacity: 0,
    scrollTrigger: {
      trigger: tradeMark,
      scrub: 1,
      start: "70% 80%",
      end: "50% 20%",
    },
  });

  gsap.from(".tradeLogo1", {
    ease: "expo.inOut",
    y: -800,
    opacity: 0,
    scrollTrigger: {
      trigger: tradeMark,
      scrub: 1,
      start: "50% 80%",
      end: "50% 20%",
    },
  });
  gsap.from(".tradeLogo2", {
    ease: "expo.inOut",
    y: -700,
    opacity: 0,
    scrollTrigger: {
      trigger: tradeMark,
      scrub: 1,
      start: "40% 80%",
      end: "50% 20%",
    },
  });
  gsap.from(".tradeLogo3", {
    ease: "expo.inOut",
    y: -600,
    opacity: 0,
    scrollTrigger: {
      trigger: tradeMark,
      scrub: 1,
      start: "30% 80%",
      end: "50% 20%",
    },
  });

  /* gsap.from(".visionTextScroll", {
    ease: "expo.inOut",
    x: -600,
    opacity: 0,
    stagger: 0.3,
    fontSize: "10px",
    scrollTrigger: {
      trigger: ".vision-sec",
      scrub: 1,
      start: "30% 80%",
      end: "50% 20%",
    },
  });
  gsap.from(".qualityTextScroll", {
    ease: "expo.inOut",
    x: 600,
    opacity: 0,
    stagger: 0.3,
    fontSize: "10px",
    scrollTrigger: {
      trigger: ".qualityContainer",
      scrub: 1,
      start: "30% 80%",
      end: "50% 20%",
    },
  });
  gsap.from(".docTextScroll", {
    ease: "expo.inOut",
    x: -600,
    opacity: 0,
    stagger: 0.3,
    fontSize: "10px",
    scrollTrigger: {
      trigger: ".docContainer",
      scrub: 1,
      start: "30% 80%",
      end: "50% 20%",
    },
  });
  gsap.from(".supplyTextScroll", {
    ease: "expo.inOut",
    x: 600,
    opacity: 0,
    stagger: 0.3,
    fontSize: "10px",
    scrollTrigger: {
      trigger: ".supplyContainer",
      scrub: 1,
      start: "30% 80%",
      end: "50% 20%",
    },
  });
  gsap.from(".edgeTextScroll", {
    ease: "expo.inOut",
    x: -600,
    opacity: 0,
    stagger: 0.3,
    fontSize: "10px",
    scrollTrigger: {
      trigger: ".edgeContainer",
      scrub: 1,
      start: "30% 80%",
      end: "50% 20%",
    },
  }); */
  gsap.from(".bandageScroll1", {
    ease: "expo.inOut",
    x: -600,
    scrollTrigger: {
      trigger: ".product-listing-section",
      scrub: 1,
      start: "30% 80%",
      end: "60% 20%",
    },
  });
  gsap.from(".bandageScroll2", {
    ease: "expo.inOut",
    x: 800,
    scrollTrigger: {
      trigger: ".product-listing-section",
      scrub: 1,
      start: "0% 80%",
      end: "80% 0%",
    },
  });
  /* gsap.from(".productScroll", {
    ease: "expo.inOut",
    y: 600,
    opacity: 0,
    duration: 3,
    stagger: 1,
    width: "50%",
    height: "50%",
    scrollTrigger: {
      trigger: ".productContainer",
      scrub: 1,
      start: "10% 100%",
      end: "50% 20%",
    },
  }); */
}

const text_scroll_container1 = gsap.utils.toArray(".text_scroll_container1");
const text_scroll1 = gsap.utils.toArray(".text_scroll1");
gsap.to(text_scroll1, {
  xPercent: -100 * (text_scroll1.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: text_scroll_container1,
    scrub: true,
    start: "70% 80%",
    end: "=+800",
  },
});

const qualityPolicy = gsap.utils.toArray(".qualityPolicy");
const qualityScroll = gsap.utils.toArray(".qualityScroll");
gsap.from(qualityScroll, {
  xPercent: -100 * (qualityScroll.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: qualityPolicy,
    scrub: true,
    start: "40% 90%",
    end: "90% 20%",
  },
});
const policyScroll = gsap.utils.toArray(".policyScroll");
gsap.from(policyScroll, {
  xPercent: 100 * (policyScroll.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: qualityPolicy,
    scrub: true,
    start: "40% 90%",
    end: "90% 20%",
  },
});

const testimonialContainer = gsap.utils.toArray(".testimonialContainer");
const testimonialSlide = gsap.utils.toArray(".testimonialSlide");
gsap.from(testimonialSlide, {
  y: -500 * (testimonialSlide.length - 1),
  opacity: 0,
  ease: "none",
  scrollTrigger: {
    trigger: testimonialContainer,
    scrub: true,
    start: "40% 90%",
    end: "90% 20%",
  },
});

const eventContainer = gsap.utils.toArray(".eventContainer");
const eventSlide = gsap.utils.toArray(".eventSlide");
gsap.from(eventSlide, {
  xPercent: -500 * (eventSlide.length - 1),
  ease: "back.out(1.5)",
  scrollTrigger: {
    trigger: eventContainer,
    scrub: true,
    start: "40% 90%",
    end: "90% 20%",
  },
});
console.clear();