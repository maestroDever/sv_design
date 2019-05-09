
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Swiper from 'swiper';
import Dropdown from './components/Dropdown';
import HeaderNavTrigger from './components/HeaderNavTrigger';

Vue.component('dropdown', Dropdown);
Vue.component('header-nav-trigger', HeaderNavTrigger);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

var productCarousel = new Swiper('.product-carousel .swiper-container', {
    slidesPerView: 'auto',
    watchSlidesVisibility: true,
    loop: true,
    loopAdditionalSlides: 2,
    loopedSlides: document.querySelectorAll('.product-carousel .swiper-slide').length,
    grabCursor: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var categoryCarousel = new Swiper('.category-carousel .swiper-container', {
    slidesPerView: 'auto',
    watchSlidesVisibility: true,
    loop: true,
    loopAdditionalSlides: 2,
    loopedSlides: document.querySelectorAll('.category-carousel .swiper-slide').length,
    grabCursor: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});