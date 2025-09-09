// main.js
// import 'bootstrap';
import 'bootstrap/js/dist/collapse'; // si usás el Data API de collapse
import '../css/style.scss';

console.log('con bootstrap');

const THRESHOLD = 50;
const BODY_CLASS = 'has-scrolled-50';

function applyScrollClass() {
  const y = window.scrollY || document.documentElement.scrollTop || 0;
  if (y > THRESHOLD) {
    document.body.classList.add(BODY_CLASS);
  } else {
    document.body.classList.remove(BODY_CLASS);
  }
}

// rAF throttle
let ticking = false;
window.addEventListener(
  'scroll',
  () => {
    if (!ticking) {
      requestAnimationFrame(() => {
        applyScrollClass();
        ticking = false;
      });
      ticking = true;
    }
  },
  { passive: true }
);

// Setear estado inicial
document.addEventListener('DOMContentLoaded', applyScrollClass);
window.addEventListener('load', applyScrollClass);
