
/* --------------------------------------------------------------
    Menu mobile
----------------------------------------------------------------- */
let hamburger = document.querySelector('.header__hamburger');

hamburger.addEventListener("click", function() {
  document.body.classList.toggle('menu-open');      //classe menu-open aggiunta al body per animare più elementi insieme
});


// Add class on scroll
window.addEventListener('scroll', function(e) {
  if(window.scrollY > 550){
    document.body.classList.add('scroll-down');
  } else {
    document.body.classList.remove('scroll-down');
  }
});


/* -------------------------------------------------------------------------------------------------------------------------- 
Animation
----------------------------------------------------------------------------------------------------------------------------- */

/* Scroll Trigger (batch) - fade up elementi */
ScrollTrigger.batch(".fade-up", {
    start: "top 95%",
    onEnter: (elements, triggers) => {
        gsap.to(elements, { opacity: 1, stagger: 0.3, y: 0, duration: 1.5, ease: "Power2.out" });
        //console.log(elements.length, "Elemento entrato");
    }
});

gsap.to(".text-reveal", { clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)", y: 0, duration: 1, stagger: 0.3, ease: "power2.out" })
