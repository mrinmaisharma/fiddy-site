import "./bootstrap";

import "./ToasterComponent";

import Swiper from "swiper";
import { Navigation, Pagination, EffectFade } from "swiper/modules";
import "../../node_modules/swiper/swiper-bundle.min.css";

const banner = new Swiper(".banner", {
    modules: [Navigation, Pagination, EffectFade],
    // Optional parameters
    spaceBetween: 30,
    effect: "fade",
    speed: 800,
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".banner-next",
        prevEl: ".banner-prev",
    },
});

const testimonial = new Swiper(".testimonial", {
    modules: [Navigation, Pagination],
    // Optional parameters
    spaceBetween: 30,
    speed: 800,
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".testimonial-next",
        prevEl: ".testimonial-prev",
    },
});
