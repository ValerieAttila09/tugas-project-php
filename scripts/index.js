import gsap from 'https://cdn.skypack.dev/gsap';

const navbarToggles = document.querySelectorAll('.navbar-toggle');
const mobileMenu = document.querySelector('.navbar + div'); 
let menuActive = false;

if (mobileMenu) {
  gsap.set(mobileMenu, {
    height: 0,
    opacity: 0,
    overflow: 'hidden'
  });
}

navbarToggles.forEach((toggle) => {
  toggle.addEventListener('click', () => {
    if (menuActive) {
      gsap.to(mobileMenu, {
        duration: 0.5,
        height: 0,
        opacity: 0,
        ease: 'power2.out',
        onComplete: () => {
          if (mobileMenu) {
            mobileMenu.style.display = 'none';
          }
        }
      });
    } else {
      if (mobileMenu) {
        mobileMenu.style.display = 'block';
        gsap.to(mobileMenu, {
          duration: 0.5,
          height: '100vh',
          opacity: 1,
          ease: 'power2.out'
        });
      }
    }
    menuActive = !menuActive;
  });
});