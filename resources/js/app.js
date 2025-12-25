import './bootstrap';

console.log("🔥 APP.JS KELOAD");

document.addEventListener("DOMContentLoaded", () => {

  /* ================= SCROLL REVEAL ================= */
  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 }
  );

  document.querySelectorAll(".scroll-fade")
    .forEach(el => observer.observe(el));

  /* ================= CARD TILT ================= */
  document.querySelectorAll(".card-hover").forEach(card => {
    card.addEventListener("mousemove", e => {
      const r = card.getBoundingClientRect();
      const x = e.clientX - r.left - r.width / 2;
      const y = e.clientY - r.top - r.height / 2;

      card.style.transform = `
        perspective(800px)
        rotateX(${-(y / r.height) * 8}deg)
        rotateY(${(x / r.width) * 8}deg)
        translateY(-8px)
      `;
    });

    card.addEventListener("mouseleave", () => {
      card.style.transform = "none";
    });
  });

  /* ================= NAVBAR SCROLL ================= */
  const navbar = document.querySelector(".navbar");
  if (navbar) {
    window.addEventListener("scroll", () => {
      navbar.classList.toggle("navbar-scrolled", window.scrollY > 60);
    });
  }

});

/* =====================================================
   HERO MOUSE PARALLAX
===================================================== */
const hero = document.querySelector(".hero");
const title = document.querySelector(".hero-title");
const subtitle = document.querySelector(".hero-subtitle");

if (hero) {
    hero.addEventListener("mousemove", (e) => {
        const { width, height } = hero.getBoundingClientRect();
        const x = (e.clientX / width - 0.5) * 10;
        const y = (e.clientY / height - 0.5) * 10;

        title.style.transform = `translate(${x}px, ${-y}px)`;
        subtitle.style.transform = `translate(${x * 0.6}px, ${-y * 0.6}px)`;
    });

    hero.addEventListener("mouseleave", () => {
        title.style.transform = "";
        subtitle.style.transform = "";
    });
}
