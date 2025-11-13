import gsap from 'https://cdn.skypack.dev/gsap';

const navbarToggles = document.querySelectorAll('.navbar-toggle');
const mobileMenu = document.querySelector('.mobile-menu');
let menuActive = false;

if (mobileMenu) {
  gsap.set(mobileMenu, {
    height: 0,
    opacity: 0,
    overflow: 'hidden',
    display: 'none'
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

class Carousel {
  constructor(carouselName, totalItems) {
    this.carouselName = carouselName;
    this.totalItems = totalItems;
    this.currentIndex = 0;
    this.isAnimating = false;
    this.autoplayTimeout = null;

    this.wrapper = document.querySelector(`.${carouselName}`);
    this.container = this.wrapper.querySelector('.carousel-container');
    this.prevBtn = document.querySelector(`.${carouselName}-prev`);
    this.nextBtn = document.querySelector(`.${carouselName}-next`);
    this.indicator = document.querySelector(`.${carouselName}-indicator`);
    this.dots = document.querySelectorAll(`.${carouselName}-dot`);

    this.init();
  }

  init() {
    this.prevBtn.addEventListener('click', () => this.prev());
    this.nextBtn.addEventListener('click', () => this.next());

    this.dots.forEach((dot, index) => {
      dot.addEventListener('click', () => this.goToSlide(index));
    });

    this.wrapper.addEventListener('mouseenter', () => this.pauseAutoplay());
    this.wrapper.addEventListener('mouseleave', () => this.startAutoplay());

    this.startAutoplay();
  }

  prev() {
    if (this.isAnimating) return;
    this.currentIndex = (this.currentIndex - 1 + this.totalItems) % this.totalItems;
    this.animateToSlide();
    this.resetAutoplay();
  }

  next() {
    if (this.isAnimating) return;
    this.currentIndex = (this.currentIndex + 1) % this.totalItems;
    this.animateToSlide();
    this.resetAutoplay();
  }

  goToSlide(index) {
    if (this.isAnimating || index === this.currentIndex) return;
    this.currentIndex = index;
    this.animateToSlide();
    this.resetAutoplay();
  }

  animateToSlide() {
    this.isAnimating = true;
    const offset = -this.currentIndex * 100;

    gsap.to(this.container, {
      duration: 0.3,
      opacity: 0.7,
      ease: 'power2.inOut',
      onComplete: () => {
        gsap.set(this.container, {
          x: `${offset}%`
        });
        gsap.to(this.container, {
          duration: 0.3,
          opacity: 1,
          ease: 'power2.inOut',
          onComplete: () => {
            this.isAnimating = false;
          }
        });
      }
    });

    this.updateIndicators();
  }

  updateIndicators() {
    if (this.indicator) {
      this.indicator.textContent = this.currentIndex + 1;
    }

    this.dots.forEach((dot, index) => {
      if (index === this.currentIndex) {
        dot.style.backgroundColor = '#1f2937';
      } else {
        dot.style.backgroundColor = '#d1d5db';
      }
    });
  }

  startAutoplay() {
    this.autoplayTimeout = setInterval(() => {
      this.currentIndex = (this.currentIndex + 1) % this.totalItems;
      this.animateToSlide();
    }, 4000);
  }

  pauseAutoplay() {
    if (this.autoplayTimeout) {
      clearInterval(this.autoplayTimeout);
    }
  }

  resetAutoplay() {
    this.pauseAutoplay();
    this.startAutoplay();
  }
}

const projectsCarousel = new Carousel('projects-carousel', 4);
const certificatesCarousel = new Carousel('certificates-carousel', 3);