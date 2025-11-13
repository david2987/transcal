/**
 * Scroll Animations - Animaciones de scroll parallax para Transcal
 * Similar al efecto de siroco.ar
 */

(function() {
    'use strict';

    // Configuración
    const config = {
        // Velocidad del parallax (0.1 = lento, 0.5 = rápido)
        parallaxSpeed: 0.3,
        // Offset para activar animaciones (en píxeles desde el viewport)
        offset: 100,
        // Duración de las animaciones en ms
        duration: 800,
        // Deshabilitar en móviles para mejor rendimiento
        disableOnMobile: true
    };

    // Detectar si es móvil
    function isMobile() {
        return window.innerWidth <= 768;
    }

    // Inicializar cuando el DOM esté listo
    function init() {
        if (config.disableOnMobile && isMobile()) {
            return; // No ejecutar en móviles si está deshabilitado
        }

        initScrollAnimations();
        initParallax();
        initSmoothScroll();
    }

    // Animaciones de entrada al hacer scroll
    function initScrollAnimations() {
        // Crear Intersection Observer para animaciones
        const observerOptions = {
            root: null,
            rootMargin: `-${config.offset}px`,
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    // Opcional: dejar de observar después de animar
                    // observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observar todos los elementos con clases de animación
        const animatedElements = document.querySelectorAll(
            '.animate-fade, .animate-slide-up, .animate-slide-left, .animate-slide-right, .animate-scale'
        );

        animatedElements.forEach(el => {
            observer.observe(el);
        });
    }

    // Efecto parallax para imágenes y fondos
    function initParallax() {
        const parallaxElements = document.querySelectorAll('.parallax, [data-parallax]');
        
        if (parallaxElements.length === 0) return;

        let ticking = false;

        function updateParallax() {
            const scrollY = window.pageYOffset || window.scrollY;
            
            parallaxElements.forEach(element => {
                const speed = parseFloat(element.dataset.parallax) || config.parallaxSpeed;
                const rect = element.getBoundingClientRect();
                const elementTop = rect.top + scrollY;
                const elementHeight = rect.height;
                
                // Solo aplicar parallax si el elemento está en el viewport
                if (rect.bottom >= 0 && rect.top <= window.innerHeight) {
                    const yPos = -(scrollY - elementTop) * speed;
                    element.style.transform = `translate3d(0, ${yPos}px, 0)`;
                }
            });

            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick, { passive: true });
        window.addEventListener('resize', requestTick, { passive: true });
        
        // Ejecutar una vez al cargar
        updateParallax();
    }

    // Scroll suave para enlaces internos
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '') return;
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Inicializar cuando el DOM esté listo
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Re-inicializar en resize (con debounce)
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            if (!isMobile() || !config.disableOnMobile) {
                initParallax();
            }
        }, 250);
    }, { passive: true });

})();

