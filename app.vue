<template>
	<div>

		<div class="cursor__wrapper"></div>
		
		<SectionIntro />
		<SectionServices />
		<SectionPortfolio />
		<SectionAbout />
		<SectionContact />

		<footer>
			<p>&copy; {{ date.getFullYear() }} Studio Noot</p>
		</footer>

		<Mouse />

	</div>
</template>

<script>

import Mouse from './components/Mouse.vue';
import Splide from '@splidejs/splide';
import VanillaTilt from 'vanilla-tilt';
import SectionIntro from './components/sections/SectionIntro.vue';
import SectionServices from './components/sections/SectionServices.vue';
import SectionPortfolio from './components/sections/SectionPortfolio.vue';
import SectionAbout from './components/sections/SectionAbout.vue';
import SectionContact from './components/sections/SectionContact.vue';

export default {
	name: 'App',
	
	components: {
		Mouse,
		SectionIntro,
		SectionServices,
		SectionPortfolio,
		SectionAbout,
		SectionContact
	},

    head() {
		return {
			title: "Anne Noteboom ~ Webcreator"
		}
    },

	data() {
		return {
			date: new Date()
		}
	},

    mounted() {

		const splides = document.querySelectorAll('.splide');

		splides.forEach((item, index) => {
			const direction = index > 0 ? 'ltr' : 'ltr';

			const splide = new Splide(item, {
				type: 'loop',
				perPage: 2,
				autoplay: false,
				gap: '.83vw',
				arrows: true,
				pagination: false,
				start: 0,
				pauseOnHover: false,
				direction: direction,
				perMove: 1,
			}).mount();
		});

		const scroll = document.querySelector('.scroll');

		if (scroll) {
			window.addEventListener('scroll', () => {
				setScrollClass();  
			});

			setScrollClass();
		}

		function setScrollClass() {
			if (window.scrollY > 10) {
				scroll.classList.add('-scrolled');
			} else {
				scroll.classList.remove('-scrolled');
			}
		}
	
		const cases = document.querySelectorAll('.item');
		console.log(cases);

		if (cases.length > 0) {
			let isHovered = false;

			cases.forEach(caseItem => {
				caseItem.addEventListener('mouseover', () => {
					isHovered = true;

					cases.forEach((caseItem) => {
						caseItem.classList.add('-is-hovering');
					});
				});
				
				caseItem.addEventListener('mouseout', () => {
					isHovered = false;

					cases.forEach((caseItem) => {
						caseItem.classList.remove('-is-hovering');
					});
				});
			});
		}
	},
}

</script>