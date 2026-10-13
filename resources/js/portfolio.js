import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

function initPortfolioAnimations() {
    // Animasi pembuka
    gsap.fromTo(
        '.hero-item',
        {
            y: 45,
            opacity: 0,
        },
        {
            y: 0,
            opacity: 1,
            duration: 0.9,
            stagger: 0.15,
            ease: 'power3.out',
        }
    );

    // Animasi elemen ketika masuk viewport
    gsap.utils.toArray('.reveal').forEach((element) => {
        gsap.fromTo(
            element,
            {
                y: 35,
                opacity: 0,
            },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 85%',
                    once: true,
                },
            }
        );
    });
}

document.addEventListener('DOMContentLoaded', initPortfolioAnimations);