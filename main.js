document.addEventListener("DOMContentLoaded", () => {
  gsap.from(".hero-heading", {
    duration: 5,
    opacity: 0,
    y: 50,
    ease: "power3.out"
  });
});

// ffmpeg -i goozmo2014-1.mp4 -movflags faststart -vcodec libx264 -crf 23 -g 1 -pix_fmt yuv420p output.mp4
const video = document.querySelector(".video-background");
let src = video.currentSrc || video.src;
console.log(video, src);

/* Make sure the video is 'activated' on iOS */
function once(el, event, fn, opts) {
  var onceFn = function (e) {
    el.removeEventListener(event, onceFn);
    fn.apply(this, arguments);
  };
  el.addEventListener(event, onceFn, opts);
  return onceFn;
}

once(document.documentElement, "touchstart", function (e) {
  video.play();
  video.pause();
});

/* ---------------------------------- */
/* Scroll Control! */

gsap.registerPlugin(ScrollTrigger);

let tl = gsap.timeline({
  defaults: { duration: 1 },
  scrollTrigger: {
    trigger: "#container1",
    start: "top top",
    end: "3000",
    scrub: true,
  }
});

once(video, "loadedmetadata", () => {
  tl.fromTo(
    video,
    { currentTime: 0 },
    { currentTime: video.duration || 1, ease: "none" })
    .to(".hero-content-wrapper", {
    autoAlpha: 0,           // fade + hide from accessibility/pointer events
    duration: 0.12,
    ease: "none",
    immediateRender: false
  }, "-=0.12");
});










const video2 = document.querySelector(".video-background-2");
let src2 = video2.currentSrc || video2.src;
console.log(video2, src);

/* Make sure the video is 'activated' on iOS */
function once(el, event, fn, opts) {
  var onceFn = function (e) {
    el.removeEventListener(event, onceFn);
    fn.apply(this, arguments);
  };
  el.addEventListener(event, onceFn, opts);
  return onceFn;
}

once(document.documentElement, "touchstart", function (e) {
  video2.play();
  video2.pause();
});

/* ---------------------------------- */
/* Scroll Control! */

gsap.registerPlugin(ScrollTrigger);

let tl2 = gsap.timeline({
  defaults: { duration: 1 },
  scrollTrigger: {
    trigger: "#container2",
    start: "top top",
    end: "8000",
    scrub: true
  }
});

once(video2, "loadedmetadata", () => {
  tl2.fromTo(
    video2,
    {
      currentTime: 0
    },
    {
      currentTime: video.duration || 1
    }
  );
});