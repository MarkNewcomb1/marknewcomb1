document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);

  // ---------- helpers ----------
  function once(el, event, fn, opts) {
    const onceFn = (e) => { el.removeEventListener(event, onceFn); fn(e); };
    el.addEventListener(event, onceFn, opts);
    return onceFn;
  }
  // ffmpeg -i goozmo2014-1.mp4 -movflags faststart -vcodec libx264 -crf 23 -g 1 -pix_fmt yuv420p output.mp4
  // ---------- elements ----------
  const video = document.querySelector(".video-background");

  // iOS video priming
  try { video.play().then(() => video.pause()); } catch (e) {}
  once(document.documentElement, "touchstart", () => {
    try { video.play(); video.pause(); } catch (_) {}
  });

  // Hero entry animations
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

  // Video scrub timeline
  const tl1 = gsap.timeline({
    defaults: { duration: 1 },
    scrollTrigger: {
      trigger: "body",
      start: "top top",
      end: "+=5500",
      scrub: true
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
  gsap.set(video, { autoAlpha: 1 });

  // Scroll-triggered fade-in for "Built By Me"
  gsap.from(".built-by-me", {
    scrollTrigger: {
      trigger: ".built-by-me",
      start: "top bottom",
      toggleActions: "play reverse play reverse"
    },
    opacity: 0,
    y: 60,
    duration: 3,
    ease: "power3.out",
    immediateRender: false
  });

  // Force refresh to recalculate positions/layout
  ScrollTrigger.refresh();
});