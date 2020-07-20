require('./bootstrap');
require('./vanilla-tilt');

import homeSlider from './components/home-slider';

const homeSliders = document.querySelectorAll('.home-slider');

if (homeSliders.length > 0) {
    homeSliders.forEach((homeslider) => {
        const object = new homeSlider(homeslider);
        object.init();
    });  
}

let hamburger = document.querySelector('.hamburger');
let mobileMenu = document.querySelector('.mobile-menu');
let header = document.querySelector('header');

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
    header.classList.toggle('active');
});

// window.Vue = require('vue');

// const app = new Vue({
//     el: '#app',
//     data: {
//         message: '',
//         messageError: false,
//         name: '',
//         nameError: false,
//         email: '',
//         emailError: false,
//         privacy: false,
//         privacyError: false,
//     },

//     methods: {
//         checkForm() {
            
//             if(!this.name) {
//                 this.nameError = true;
//             }

//             if(!this.email) {
//                 this.emailError = true;
//             }

//             if(!this.message) {
//                 this.messageError = true;
//             }

//             if(!this.privacy) {
//                 this.privacyError = true;
//             }
//         }
//     }
// })