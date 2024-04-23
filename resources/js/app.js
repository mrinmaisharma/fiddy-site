import "./bootstrap";

import "./ToasterComponent";

import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import "../../node_modules/swiper/swiper-bundle.min.css";

const swiper = new Swiper(".swiper", {
    modules: [Navigation, Pagination],
    // Optional parameters
    spaceBetween: 30,
    effect: "fade",

    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
