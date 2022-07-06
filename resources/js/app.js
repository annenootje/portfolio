require('./bootstrap');
require('./vanilla-tilt');

import Modal from './components/modal';

const modalOpeners = document.querySelectorAll('.open-modal');
const modals = document.querySelectorAll('.modal');

if (modalOpeners.length > 0) {
    modalOpeners.forEach((opener) => {

        opener.addEventListener('click', () => {
            
            modals.forEach((modal) => {
                if (modal.dataset.modal === opener.dataset.modal) {
                    modal.classList.add('-active');
                }
            });
        });
    });  
}

document.onkeydown = function(evt) {
    evt = evt || window.event;
    let isEscape = false;
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc");
    } else {
        isEscape = (evt.keyCode === 27);
    }
    if (isEscape) {
        modals.forEach((modal) => {
            modal.classList.remove('-active');
        });
    }
}

const slider = document.querySelector('.--projects');
const slider__items = slider.querySelectorAll('.slider__item');

let index = 0;

slider__items[index].classList.add('-active');

setInterval(() => {
    slider__items[index].classList.remove('-active');
    index = index + 1;

    if (index === slider__items.length) {
        index = 0;
    }

    slider__items[index].classList.add('-active');
}, 10000);

const header = document.querySelector('header');

document.addEventListener('scroll', () => {
    if (window.scrollY > 10) {
        header.classList.add('-scrolled');
    } else {
        header.classList.remove('-scrolled');
    }
});

const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', (event) => {
	cursor.style.left = event.clientX + 'px';
	cursor.style.top = event.clientY + 'px';
});
// import homeSlider from './components/home-slider';

// const homeSliders = document.querySelectorAll('.home-slider');

// if (homeSliders.length > 0) {
//     homeSliders.forEach((homeslider) => {
//         const object = new homeSlider(homeslider);
//         object.init();
//     });  
// }

// let hamburger = document.querySelector('.hamburger');
// let mobileMenu = document.querySelector('.mobile-menu');
// let header = document.querySelector('header');

// hamburger.addEventListener('click', function () {
//     hamburger.classList.toggle('active');
//     mobileMenu.classList.toggle('active');
//     header.classList.toggle('active');
// });

// let greeting = document.querySelector('.greeting');

// var date = new Date();
// var current_hour = date.getHours();

// console.log(current_hour);

// if ( current_hour < 12 && current_hour > 4 ) {
//     greeting.innerHTML = 'Goedemorgen';
// } else if ( current_hour < 18 && current_hour >= 12 ) {
//     greeting.innerHTML = 'Goedemiddag';
// } else if ( current_hour >= 18 && current_hour < 23 ) {
//     greeting.innerHTML = 'Goedenavond';
// } else {
//     greeting.innerHTML = 'Goedenacht';
// }

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