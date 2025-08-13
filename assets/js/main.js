// import 'bootstrap';
import { Collapse } from 'bootstrap';
import '../css/style.scss';

console.log('con bootstrap');

document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.getElementById('component-navbar');

  window.addEventListener('scroll', () => {
    console.log('scrolling');
    if (window.scrollY > 50) {
      console.log('scrolling more than 50px');
      // navbar.classList.remove('bg-primary', 'navbar-dark');
      navbar.classList.add('border-bottom');
    } else {
      console.log('scrolling less than 50px on home');
      navbar.classList.remove('border-bottom');
      // navbar.classList.add('bg-primary', 'navbar-dark');
    }
  });
});
