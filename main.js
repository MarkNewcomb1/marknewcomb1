document.addEventListener("DOMContentLoaded", () => {
  gsap.from("#hero-text", {
    duration: 1,
    opacity: 0,
    y: 50,
    ease: "power3.out"
  });
});