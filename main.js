document.addEventListener("DOMContentLoaded", () => {
  gsap.from(".hero-heading", {
    duration: 2,
    opacity: 0,
    x: -100,
    ease: "expo.out"
  });
  gsap.from(".vue-react-specialist", {
    duration: 2,
    opacity: 0,
    x: 800,
    ease: "expo.out"
  });
});

// ffmpeg -i goozmo2014-1.mp4 -movflags faststart -vcodec libx264 -crf 23 -g 1 -pix_fmt yuv420p output.mp4

gsap.registerPlugin(ScrollTrigger);

// ---------- helpers ----------
function once(el, event, fn, opts) {
  const onceFn = (e) => { el.removeEventListener(event, onceFn); fn(e); };
  el.addEventListener(event, onceFn, opts);
  return onceFn;
}

// ---------- elements ----------
const video  = document.querySelector(".video-background");

// Prime BOTH videos for iOS
once(document.documentElement, "touchstart", () => {
  [video].forEach(v => { try { v.play(); v.pause(); } catch(_) {} });
});

// ---------- TL #1 (video 1 scrub + fade out) ----------
const tl1 = gsap.timeline({
  defaults: { duration: 1 },
  scrollTrigger: {
    trigger: "body",
    start: "top top",
    end: "+=6000",
    scrub: true,
    // markers: true
  }
});

function buildVideo1() {
  tl1.fromTo(video, { currentTime: 0 }, { currentTime: video.duration || 1, ease: "none" })
     .to(".hero-content-wrapper", {
        autoAlpha: 0,
        duration: 0.12,
        ease: "none",
        immediateRender: false,
          onComplete: () => gsap.set(".hero-content-wrapper", { display: "none" }),
          onReverseComplete: () => gsap.set(".hero-content-wrapper", { display: "block" })
      }, "-=0.12");
}
if (video.readyState >= 1) buildVideo1();
else once(video, "loadedmetadata", buildVideo1);


gsap.from(".built-by-me", {
  scrollTrigger: {
    trigger: ".built-by-me",
    start: "top bottom",
    toggleActions: "play none none none",
    // markers: true              // uncomment to debug
  },
  opacity: 0,
  y: 40,
  duration: 1,
  ease: "power3.out"
});
