const navbar     = document.getElementById('navbar');
const hamburger  = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');

// ── Efek scroll navbar 
function handleScroll() {
  if (window.scrollY > 40) {
    navbar.classList.remove('at-top');
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.add('at-top');
    navbar.classList.remove('scrolled');
  }
}

window.addEventListener('scroll', handleScroll, { passive: true });
handleScroll(); 

// Toggle hamburger & menu mobile 
hamburger.addEventListener('click', () => {
  const isOpen = hamburger.classList.toggle('open');
  mobileMenu.classList.toggle('open', isOpen);
  document.body.style.overflow = isOpen ? 'hidden' : '';
});

// Tutup menu mobile saat salah satu link diklik
mobileMenu.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    hamburger.classList.remove('open');
    mobileMenu.classList.remove('open');
    document.body.style.overflow = '';
  });
});


//  Swiper Fasilitas 
const facilitiesSwiper = new Swiper('.facilities-swiper', {
  slidesPerView: 'auto',      
  spaceBetween: 24,
  loop: true,
  grabCursor: true,

  // auto scroll
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },

  // navigasi panah custom
  navigation: {
    prevEl: '.fac-prev',
    nextEl: '.fac-next',
  },

  // pagination titik
  pagination: {
    el: '.facilities-pagination',
    clickable: true,
  },
});

//Swiper Testimonials 
const testimonialsSwiper = new Swiper('.testimonialsSwiper', {
  slidesPerView: 1, 
  spaceBetween: 30, 
  loop: true,       
  grabCursor: true,
  

  autoplay: {
    delay: 4000,                 
    disableOnInteraction: false, 
    pauseOnMouseEnter: true,     
  },
  
  pagination: {
    el: '.testimonials-pagination', 
    clickable: true,                
  },
  
  // Breakpoints untuk membuat slider responsif di berbagai ukuran layar
  breakpoints: {
    768: { 
      slidesPerView: 2, 
    },
    1024: { 
      slidesPerView: 3, 
    }
  }
});

// FAQ Accordion 
const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
  const question = item.querySelector('.faq-question');
  
  question.addEventListener('click', () => {
    // Tutup semua FAQ lain
    faqItems.forEach(otherItem => {
      if (otherItem !== item && otherItem.classList.contains('active')) {
        otherItem.classList.remove('active');
      }
    });
    
    // Toggle FAQ yang diklik
    item.classList.toggle('active');
  });
});
