<template>

  <div class="layout">

    <!-- <Logo /> -->
    <section>
      <div class="container">
        <div class="card" data-tilt-max="10" data-title-scale="2"></div>
      </div>
    </section>

    <!-- <div class="naming -starter">
      <h2>Anne Noteboom <h3>&nbsp;/ Portfolio</h3></h2>
    </div> -->
    <!-- <div class="naming">
      <div class="faders">
        <h2 class="fader">Coquelicots <h3>&nbsp;/ Website</h3></h2>
        <h2 class="fader">Huis van Mijn <h3>&nbsp;/ Webshop</h3></h2>
        <h2 class="fader">EK Balgevoel <h3>&nbsp;/ Webapp</h3></h2>
        <h2 class="fader">Bram <h3>&nbsp;/ Webapp</h3></h2>
      </div>
    </div> -->

    <!-- <div :class="['hamburger', {'-active': activeMenu}]" @click="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div> -->
    
    <!-- <div class="slider__container" data-tilt-max="10" data-title-scale="2">
      <div class="slider">
        <div
          class="slider__inner faders"
          @mouseenter="setCursor('SLIDE')"
          @mouseleave="resetCursor()"
        >
          <div class="slider__item fader">
            <!-- <img src="@/assets/img/cocktail-website.png" alt="Website showcase Coquelicots"> -->
          <!-- </div>
          <div class="slider__item fader"> -->
            <!-- <img src="@/assets/img/huisvanmijn-phone.png" alt="Website showcase Huis van Mijn"> -->
          <!-- </div> -->
          <!-- <div class="slider__item fader"> -->
            <!-- <img src="@/assets/img/restaurant-ree.jpg" alt="Website showcase Huis van Mijn preview"> -->
          <!-- </div> -->
          <!-- <div class="slider__item fader"> -->
            <!-- <img src="@/assets/img/huisvanmijn.jpg" alt="Website showcase Huis van Mijn preview"> -->
          <!-- </div>
        </div>
      </div>
    </div> --> 

    <!-- <div class="controls">
      <div class="controls__number -start">0{{this.index + 1}}</div>
      <div class="controls__container">
        <div
          class="controls__control"
          :style="'height: ' + 100 / (max + 1) + '%; top: ' + index * 100 / (max + 1) + '%; '"
        ></div>
      </div>
      <div class="controls__number -end">0{{this.max + 1}}</div>
    </div> -->

    <!-- <div :class="['menu', {'-active': activeMenu}]">
      <div class="menu__part">
        <h1>
          Een website, webapp of webshop nodig. Neem contact op voor een gesprek.
        </h1>
        <small>&copy;{{ new Date().getFullYear() }} Anne Noteboom</small>
      </div>
      <div class="menu__part">
        <p>
          Anne Noteboom<br/>
          Webcreator
        </p>
        <p>
          <a href="tel:0639723285">+31 6 39 72 32 85</a><br/>
          <a href="mailto:hallo@anne.no">hallo@anne.no</a>
        </p>
        <p>
          KVK 98765432<br/>
          BTW 323456789
        </p>
        <p>
          <a href="https://www.linkedin.com/in/anne-noteboom-61b121158/?originalSubdomain=nl" target="_blank">LinkedIn</a>
        </p>
      </div>
    </div> -->

    <Mouse />
<!-- 
    <div class="loader">
      <h1>
        Haven is a passionate team of game makers<br/>
        working on breakthrough experiences. 
      </h1>
    </div> -->

  </div>
</template>

<script>
  import Logo from '../components/Logo.vue';
  import Mouse from '../components/Mouse.vue';
  import Actions from '../components/Actions.vue';
  import Slider from '../components/Slider.vue';
  import VanillaTilt from 'vanilla-tilt';

  export default {
    name: 'IndexPage',
    
    components: { Logo, Mouse, Actions, Slider },
    
    data() {
      return {
        index: 0,
        timer: 0,
        max: 3,
        intervalTime: 3000,
        primaryColors: [
          "#FF7E9A",
          "#EDDAC9",
          "#FF7C1F",
          "#B5D8AD",
        ],
        darkColors: [
          "#020033",
          "#301511",
          "#020645",
          "#121212",
        ],
        activeMenu: false,
      }
    },

    head() {
      return {
        title: "Anne Noteboom ~ Webcreator"
      }
    },

    mounted() {
      
      setTimeout(() => {
        this.startSlider();
      }, 5000);

      const element = document.querySelector(".card");
      
      VanillaTilt.init(element);
    },

    methods: {
      
      startSlider() {
        this.setFaders();
        this.setColors();
        
        setInterval(() => {

          if (!this.activeMenu) {
            this.timer++;

            if (this.timer > 1) {
              this.index++;

              if (this.index > this.max) {
                this.index = 0;
              }

              this.setFaders();
              this.setColors();
              
              this.timer = 0;
            }
          }

        }, this.intervalTime);
      },

      setFaders() {
        const faders = document.querySelectorAll(".faders");

        faders.forEach(container => {
          const items = container.querySelectorAll(".fader");
          
          items.forEach(item => {
            item.classList.remove('-active');
          });

          items[this.index].classList.add('-active');
        });
      },

      setColors() {
        document.documentElement.style.setProperty('--color-1', this.primaryColors[this.index]);
        document.documentElement.style.setProperty('--color-dark', this.darkColors[this.index]);
      },

      setCursor(type) {
        const cursor = document.querySelector('.cursor');

        if (type === "SLIDE") {
          cursor.classList.add('-slide');

        }
      },

      resetCursor() {
        const cursor = document.querySelector('.cursor');
        cursor.classList.remove('-slide');
      },

      toggleMenu() {
        this.activeMenu = !this.activeMenu;
      }

    }
  }
</script>
