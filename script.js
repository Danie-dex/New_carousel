const slides = [...document.querySelectorAll('.hero-slide')];
const dots = [...document.querySelectorAll('.hero-dot')];
const currentSlideLabel = document.getElementById('current-slide');
let activeIndex = 0;
let autoplay;

function showSlide(index) {
  activeIndex = (index + slides.length) % slides.length;
  slides.forEach((slide, i) => {
    const active = i === activeIndex;
    slide.classList.toggle('active', active);
    slide.setAttribute('aria-hidden', String(!active));
  });
  dots.forEach((dot, i) => {
    const active = i === activeIndex;
    dot.classList.toggle('active', active);
    dot.setAttribute('aria-pressed', String(active));
  });
  currentSlideLabel.textContent = String(activeIndex + 1);
}

function startAutoplay() {
  stopAutoplay();
  autoplay = setInterval(() => showSlide(activeIndex + 1), 6000);
}
function stopAutoplay() { if (autoplay) clearInterval(autoplay); }

document.querySelector('.hero-prev').addEventListener('click', () => { showSlide(activeIndex - 1); startAutoplay(); });
document.querySelector('.hero-next').addEventListener('click', () => { showSlide(activeIndex + 1); startAutoplay(); });
dots.forEach((dot, i) => dot.addEventListener('click', () => { showSlide(i); startAutoplay(); }));

const hero = document.querySelector('.hero');
hero.addEventListener('mouseenter', stopAutoplay);
hero.addEventListener('mouseleave', startAutoplay);
hero.addEventListener('focusin', stopAutoplay);
hero.addEventListener('focusout', startAutoplay);
startAutoplay();

const track = document.querySelector('.destination-track');
document.querySelector('.destination-prev').addEventListener('click', () => {
  track.scrollBy({ left: -track.clientWidth * 0.8, behavior: 'smooth' });
});
document.querySelector('.destination-next').addEventListener('click', () => {
  track.scrollBy({ left: track.clientWidth * 0.8, behavior: 'smooth' });
});

const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.main-nav');
menuToggle.addEventListener('click', () => {
  const open = nav.classList.toggle('open');
  menuToggle.setAttribute('aria-expanded', String(open));
  menuToggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
  menuToggle.textContent = open ? '×' : '☰';
});
nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
  nav.classList.remove('open');
  menuToggle.setAttribute('aria-expanded', 'false');
  menuToggle.textContent = '☰';
}));

document.querySelector('.search-button').addEventListener('click', () => {
  document.querySelector('#destinations').scrollIntoView({ behavior: 'smooth' });
  track.focus?.({ preventScroll: true });
});
