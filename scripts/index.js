// Since we're loading this as a module, we can use CDN for GSAP
import gsap from 'https://cdn.skypack.dev/gsap';

// Get all navbar toggle buttons
const navbarToggles = document.querySelectorAll('.navbar-toggle');
// Get the mobile menu (the div that contains the mobile navigation)
const mobileMenu = document.querySelector('.navbar + div'); // Select the div after .navbar
let menuActive = false;

// Hide the mobile menu initially
if (mobileMenu) {
  gsap.set(mobileMenu, {
    height: 0,
    opacity: 0,
    overflow: 'hidden'
  });
}

// Add event listeners to all toggle buttons
navbarToggles.forEach((toggle) => {
  toggle.addEventListener('click', () => {
    if (menuActive) {
      // Close menu
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
      // Open menu
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