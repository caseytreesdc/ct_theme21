gsap.registerPlugin(ScrollTrigger);

function init() {
  gsap.to(".main__page-1", {
    opacity: 0,
    scrollTrigger: {
      trigger: ".main__page-1",
      start: "bottom top+=500",
      end: "bottom top+=100",
      scrub: true,
    },
  });
  // gsap.from(".main__page-2", {
  //   opacity: 0,
  //   scrollTrigger: {
  //     trigger: ".main__page-2",
  //     start: "top bottom-=200",
  //     end: "top top+=200",
  //     scrub: true,
  //   },
  // });
  gsap.to(".main__page-2", {
    opacity: 0,
    scrollTrigger: {
      trigger: ".main__page-2",
      start: "bottom top+=500",
      end: "bottom top+=100",
      scrub: true,
    },
  });
  // gsap.from(".main__page-3", {
  //   opacity: 0,
  //   scrollTrigger: {
  //     trigger: ".main__page-3",
  //     start: "top bottom-=200",
  //     end: "top top+=200",
  //     scrub: true,
  //   },
  // });
  gsap.to(".main__page-3", {
    opacity: 0,
    scrollTrigger: {
      trigger: ".main__page-3",
      start: "bottom top+=500",
      end: "bottom top+=100",
      scrub: true,
    },
  });
  // gsap.from(".main__page-4", {
  //   opacity: 0,
  //   scrollTrigger: {
  //     trigger: ".main__page-4",
  //     start: "top bottom-=200",
  //     end: "top top+=200",
  //     scrub: true,
  //   },
  // });
  gsap.to(".main__page-4", {
    opacity: 0,
    scrollTrigger: {
      trigger: ".main__page-4",
      start: "bottom top+=500",
      end: "bottom top+=100",
      scrub: true,
    },
  });
  // gsap.from(".main__page-5", {
  //   opacity: 0,
  //   scrollTrigger: {
  //     trigger: ".main__page-5",
  //     start: "top bottom-=200",
  //     end: "top top+=200",
  //     scrub: true,
  //   },
  // });
}

window.addEventListener("load", function () {
  init();
});
