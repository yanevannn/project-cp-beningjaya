import './bootstrap';

// Mobile menu toggle
const mobileMenuButton = document.querySelector('.mobile-menu-button');
const mobileMenu = document.querySelector('.mobile-menu');

mobileMenuButton.addEventListener('click', function () {
    mobileMenu.classList.toggle('hidden');
});

// Close mobile menu when clicking a link
const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
mobileMenuLinks.forEach(link => {
    link.addEventListener('click', function () {
        mobileMenu.classList.add('hidden');
    });
});

// Smooth scrolling for all links with hashes
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop -
                    80, // Adjust this value if your fixed header height changes
                behavior: 'smooth'
            });
        }
    });
});

// Initialize Swiper
const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    loop: true, // Enable infinite loop

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true, // Allow clicking on pagination bullets
    },

    // Responsive breakpoints
    breakpoints: {
        640: { // md breakpoint (Tailwind default)
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: { // lg breakpoint (Tailwind default)
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1024: { // xl breakpoint (Tailwind default)
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },

    // Autoplay (optional)
    autoplay: {
        delay: 5000, // 5 seconds
        disableOnInteraction: false, // Continue autoplay even after user interaction
    },
});

