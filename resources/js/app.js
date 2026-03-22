import './bootstrap';

// Advanced Header & Swiper Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    const swiper = new Swiper('.heroSwiper', {
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"></span>';
            },
        },
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
        on: {
            init: function () {
                // Animate first slide content
                animateSlideContent(this.activeIndex);
            },
            slideChange: function () {
                // Animate new slide content
                animateSlideContent(this.activeIndex);
            }
        }
    });

    // Animate slide content
    function animateSlideContent(index) {
        const slides = document.querySelectorAll('.swiper-slide');
        const currentSlide = slides[index];
        const slideContent = currentSlide.querySelector('.slide-content');
        
        // Reset all slide contents
        slides.forEach(slide => {
            const content = slide.querySelector('.slide-content');
            if (content) {
                content.style.transform = 'translateY(10px)';
                content.style.opacity = '0';
            }
        });
        
        // Animate current slide content
        if (slideContent) {
            setTimeout(() => {
                slideContent.style.transform = 'translateY(0)';
                slideContent.style.opacity = '1';
            }, 300);
        }
    }

    // Pause autoplay on hover
    const heroSection = document.querySelector('.heroSwiper');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', () => {
            swiper.autoplay.stop();
        });
        
        heroSection.addEventListener('mouseleave', () => {
            swiper.autoplay.start();
        });
    }

    // Service Category Tabs Functionality
    const serviceTabs = document.querySelectorAll('.service-tab');
    const serviceCards = document.querySelectorAll('.service-card');

    serviceTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const category = tab.dataset.category;
            
            // Update active tab
            serviceTabs.forEach(t => {
                t.classList.remove('active', 'bg-blue-600', 'text-white');
                t.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-200');
            });
            tab.classList.add('active', 'bg-blue-600', 'text-white');
            tab.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-200');
            
            // Filter service cards
            serviceCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', () => {
            mobileMenuToggle.classList.toggle('active');
            
            // Create mobile menu overlay if it doesn't exist
            let mobileOverlay = document.querySelector('.mobile-menu-overlay');
            if (!mobileOverlay) {
                mobileOverlay = document.createElement('div');
                mobileOverlay.className = 'mobile-menu-overlay';
                mobileOverlay.innerHTML = `
                    <div class="mobile-menu-backdrop">
                        <div class="mobile-menu-content">
                            <div class="mobile-menu-header">
                                <div class="logo-section">
                                    <div class="logo-icon">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                    <div class="logo-text">
                                        <h1>JezDan</h1>
                                        <span>Technology</span>
                                    </div>
                                </div>
                                <button class="mobile-menu-close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <ul class="mobile-nav-links">
                                <li><a href="#home" class="mobile-nav-link"><i class="fas fa-home"></i> Home</a></li>
                                <li><a href="#about" class="mobile-nav-link"><i class="fas fa-info-circle"></i> About</a></li>
                                <li><a href="#services" class="mobile-nav-link"><i class="fas fa-cogs"></i> Services</a></li>
                                <li><a href="#portfolio" class="mobile-nav-link"><i class="fas fa-briefcase"></i> Portfolio</a></li>
                                <li><a href="#pricing" class="mobile-nav-link"><i class="fas fa-tags"></i> Pricing</a></li>
                                <li><a href="#contact" class="mobile-nav-link"><i class="fas fa-envelope"></i> Contact</a></li>
                            </ul>
                            <div class="mobile-menu-footer">
                                <button class="btn-quote">
                                    <i class="fas fa-calculator"></i> Get Quote
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                document.body.appendChild(mobileOverlay);
                
                // Close mobile menu when clicking close button
                const closeBtn = mobileOverlay.querySelector('.mobile-menu-close');
                closeBtn.addEventListener('click', () => {
                    closeMobileMenu();
                });
                
                // Close mobile menu when clicking backdrop
                const backdrop = mobileOverlay.querySelector('.mobile-menu-backdrop');
                backdrop.addEventListener('click', (e) => {
                    if (e.target === backdrop) {
                        closeMobileMenu();
                    }
                });
                
                // Close mobile menu when clicking nav links
                const mobileNavLinks = mobileOverlay.querySelectorAll('.mobile-nav-link');
                mobileNavLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        closeMobileMenu();
                    });
                });
            }
            
            mobileOverlay.classList.toggle('active');
        });
    }
    
    function closeMobileMenu() {
        const mobileOverlay = document.querySelector('.mobile-menu-overlay');
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        
        if (mobileOverlay) {
            mobileOverlay.classList.remove('active');
        }
        if (mobileMenuToggle) {
            mobileMenuToggle.classList.remove('active');
        }
    }
    
    // Active nav link on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    
    function updateActiveNavLink() {
        const scrollY = window.pageYOffset;
        
        sections.forEach(section => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 100;
            const sectionId = section.getAttribute('id');
            
            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
    
    window.addEventListener('scroll', updateActiveNavLink);
    
    // Header scroll effect
    const advancedHeader = document.querySelector('.advanced-header');
    
    window.addEventListener('scroll', function() {
        if (advancedHeader) {
            if (window.scrollY > 50) {
                advancedHeader.style.background = 'rgba(255, 255, 255, 0.95)';
                advancedHeader.style.backdropFilter = 'blur(10px)';
                advancedHeader.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
            } else {
                advancedHeader.style.background = 'white';
                advancedHeader.style.backdropFilter = 'none';
                advancedHeader.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
            }
        }
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = document.querySelector('.advanced-header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Contact form submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Here you would normally send the data to a server
            // For now, we'll just show a success message
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    }

    // Get Quote button functionality
    const quoteBtns = document.querySelectorAll('.btn-quote');
    quoteBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const contactSection = document.querySelector('#contact');
            if (contactSection) {
                const headerHeight = document.querySelector('.advanced-header').offsetHeight;
                const targetPosition = contactSection.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
