<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'JezDan Technology - Innovating Digital Solutions for Tanzania')</title>
    <meta name="description" content="@yield('description', 'JezDan Technology offers secure software development, high-performance websites, and comprehensive IT solutions for Tanzanian businesses.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <!-- Advanced Navigation Header -->
    @include('components.header')
    
    <!-- Main Content -->
    <main class="@yield('main-class', '')">
        @yield('content')
    </main>
    
    <!-- Advanced Footer -->
    @include('components.footer')
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const toggle = document.querySelector('.mobile-menu-toggle');
            
            if (mobileMenu && toggle) {
                mobileMenu.classList.toggle('hidden');
                toggle.classList.toggle('active');
                
                // Prevent body scroll when menu is open
                if (!mobileMenu.classList.contains('hidden')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = 'auto';
                }
            }
        }

        // Close mobile menu when clicking on a link
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
            const mobileMenu = document.getElementById('mobileMenu');
            const toggle = document.querySelector('.mobile-menu-toggle');
            
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        toggle.classList.remove('active');
                        document.body.style.overflow = 'auto';
                    }
                });
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.advanced-header');
            if (header) {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Initialize Swiper if present
        if (typeof Swiper !== 'undefined') {
            const swiper = new Swiper('.swiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                }
            });
        }

        // Counter Animation
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current) + (element.dataset.suffix || '');
            }, 20);
        }

        // Initialize counters when in viewport
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.dataset.counter);
                    if (!counter.dataset.animated) {
                        counter.dataset.animated = 'true';
                        animateCounter(counter, target);
                    }
                }
            });
        }, observerOptions);

        document.querySelectorAll('[data-counter]').forEach(counter => {
            counterObserver.observe(counter);
        });

        // FAQ Toggle functionality
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('i');
                
                // Close all other FAQs
                document.querySelectorAll('.faq-content').forEach(item => {
                    if (item !== content) {
                        item.classList.add('hidden');
                        item.previousElementSibling.querySelector('i').classList.remove('rotate-180');
                    }
                });
                
                // Toggle current FAQ
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Form validation
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const requiredFields = this.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('border-red-500');
                    } else {
                        field.classList.remove('border-red-500');
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    // Scroll to first error
                    const firstError = this.querySelector('.border-red-500');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }
            });
            
            // Remove error styling on input
            const inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(field => {
                field.addEventListener('input', () => {
                    field.classList.remove('border-red-500');
                });
            });
        });

        // Portfolio filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioCards = document.querySelectorAll('.portfolio-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');
                
                const filter = button.dataset.filter;
                
                portfolioCards.forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Add suffix to counters
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('[data-counter]');
            counters.forEach(counter => {
                if (counter.dataset.counter === '98') {
                    counter.dataset.suffix = '%';
                } else if (counter.dataset.counter === '150') {
                    counter.dataset.suffix = '+';
                } else if (counter.dataset.counter === '25') {
                    counter.dataset.suffix = '+';
                } else if (counter.dataset.counter === '15') {
                    counter.dataset.suffix = '+';
                }
            });
        });
    </script>
</body>
</html>
