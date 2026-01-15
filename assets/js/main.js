

(function () {
  function initHeroCarousel(root) {
    const track = root.querySelector(".hero-carousel-track");
    const slides = Array.from(root.querySelectorAll(".hero-carousel-slide"));
    const btnPrev = root.querySelector(".js-carousel-prev");
    const btnNext = root.querySelector(".js-carousel-next");

    if (!track || slides.length === 0 || !btnPrev || !btnNext) return;

    // ---- AUTOPLAY SETTINGS ----
    const AUTOPLAY_MS = 2600; // cambia qui la velocità (ms)

    let index = 0;
    let isAnimating = false;

    let autoplayTimer = null;
    let isHovering = false;

    function update() {
      track.style.transform = `translateX(-${index * 100}%)`;
    }

    function goTo(newIndex) {
      if (isAnimating) return;
      isAnimating = true;

      index = (newIndex + slides.length) % slides.length;
      update();

      const onDone = () => {
        isAnimating = false;
        track.removeEventListener("transitionend", onDone);
      };
      track.addEventListener("transitionend", onDone);
    }

    function next() {
      goTo(index + 1);
    }

    function prev() {
      goTo(index - 1);
    }

    // ---- AUTOPLAY ----
    function startAutoplay() {
      stopAutoplay();
      autoplayTimer = window.setInterval(() => {
        // non avanzare se hover oppure tab non visibile
        if (isHovering) return;
        if (document.hidden) return;
        // evita conflitti mentre sta animando
        if (isAnimating) return;
        next();
      }, AUTOPLAY_MS);
    }

    function stopAutoplay() {
      if (autoplayTimer) {
        window.clearInterval(autoplayTimer);
        autoplayTimer = null;
      }
    }

    // init
    update();
    startAutoplay();

    // click arrows
    btnNext.addEventListener("click", () => {
      next();
      startAutoplay(); // reset timer dopo interazione
    });

    btnPrev.addEventListener("click", () => {
      prev();
      startAutoplay(); // reset timer dopo interazione
    });

    // tastiera
    window.addEventListener("keydown", (e) => {
      if (e.key === "ArrowRight") {
        next();
        startAutoplay();
      }
      if (e.key === "ArrowLeft") {
        prev();
        startAutoplay();
      }
    });

    // pausa su hover (desktop)
    root.addEventListener("mouseenter", () => {
      isHovering = true;
    });
    root.addEventListener("mouseleave", () => {
      isHovering = false;
    });

    // pausa quando la tab non è visibile, riparti quando torna visibile
    document.addEventListener("visibilitychange", () => {
      if (document.hidden) {
        stopAutoplay();
      } else {
        startAutoplay();
      }
    });

    // riallinea su resize
    window.addEventListener("resize", update);
  }

  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".js-hero-carousel").forEach(initHeroCarousel);
  });
})();
