<template>

  <div class="layout">

    <div class="cursor__wrapper"></div>

    <div class="gradient"></div>

    <section>
      <div class="container">
        <div class="intro">
          <div>
            <h1>creative</h1>
            <h1>web</h1>
            <h1>developer</h1>
          </div>
          <div class="card" data-tilt>
            <div class="card__inner">
              <div class="card__left">
                <div>
                  <h2>Anne Noteboom</h2>
                  <p>Welkom op mijn portfolio</p>
                </div>
                <div>
                  <a class="link" href="https://www.linkedin.com/in/anne-noteboom-61b121158/?originalSubdomain=nl" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42.745" height="20.189" viewBox="0 0 42.745 20.189">
                      <g id="arrow-right" transform="translate(1 0.385)">
                        <path id="Path_158" data-name="Path 158" d="M32.685,1H0A1,1,0,0,1-1,0,1,1,0,0,1,0-1H32.685a1,1,0,0,1,1,1A1,1,0,0,1,32.685,1Z" transform="translate(0 10.089)"/>
                        <path id="Union_3" data-name="Union 3" d="M3856.35-21792.611a1.011,1.011,0,0,1-.684-.34,1.018,1.018,0,0,1-.252-.729,1.049,1.049,0,0,1,.339-.689l9.511-8.332-9.511-8.344-.044-.043a1,1,0,0,1-.049-1.369,1.012,1.012,0,0,1,.69-.34,1,1,0,0,1,.723.248l10.073,8.834a.993.993,0,0,1,.319.953,1,1,0,0,1-.27,1.023l-.049.049-10.067,8.83a1,1,0,0,1-.664.25Z" transform="translate(-3825.763 21812.414)"/>
                      </g>
                    </svg>
                  LinkedIn</a>
                  <a class="link" href="mailto:hallo@anne.web">
                      <svg xmlns="http://www.w3.org/2000/svg" width="42.745" height="20.189" viewBox="0 0 42.745 20.189">
                        <g id="arrow-right" transform="translate(1 0.385)">
                          <path id="Path_158" data-name="Path 158" d="M32.685,1H0A1,1,0,0,1-1,0,1,1,0,0,1,0-1H32.685a1,1,0,0,1,1,1A1,1,0,0,1,32.685,1Z" transform="translate(0 10.089)"/>
                          <path id="Union_3" data-name="Union 3" d="M3856.35-21792.611a1.011,1.011,0,0,1-.684-.34,1.018,1.018,0,0,1-.252-.729,1.049,1.049,0,0,1,.339-.689l9.511-8.332-9.511-8.344-.044-.043a1,1,0,0,1-.049-1.369,1.012,1.012,0,0,1,.69-.34,1,1,0,0,1,.723.248l10.073,8.834a.993.993,0,0,1,.319.953,1,1,0,0,1-.27,1.023l-.049.049-10.067,8.83a1,1,0,0,1-.664.25Z" transform="translate(-3825.763 21812.414)"/>
                        </g>
                      </svg>
                    hallo@anne.web
                  </a>
                  <!-- <a href="mailto:31639723285">+31 6 39 72 32 85</a> -->
                </div>
              </div>
              <div class="card__right">
                <div class="card__image">
                  <img src="@/assets/img/logo.svg" />
                  <img src="@/assets/img/hello.svg" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section> 
      <div class="container">
        <div class="portfolio">
          <a href="https://coquelicots.nl" target="_blank" class="portfolio__item case">
            <img class="case__image" src="@/assets/img/coquelicots-startscreen.png" alt="Webapp EK Balgevoel preview">
            <span class="case__type">Website</span>
            <h2 class="case__title">Coquelicots</h2>
          </a>
          <a href="https://studiohuisvanmijn.nl" target="_blank" class="portfolio__item case">
            <img class="case__image" src="@/assets/img/huisvanmijn.png" alt="Webshop Studio Huis van Mijn preview">
            <span class="case__type">Webshop</span>
            <h2 class="case__title">Studio Huis van Mijn</h2>
          </a>
          <a href="https://dnalegal.nl" target="_blank" class="portfolio__item case">
            <img class="case__image" src="@/assets/img/dnalegal-website-preview.png" alt="Webapp EK Balgevoel preview">
            <span class="case__type">Website</span>
            <h2 class="case__title">DNA Legal</h2>
          </a>
          <a href="https://www.cocktailbar-caipiroska.nl/" target="_blank" class="portfolio__item case">
            <img class="case__image" src="@/assets/img/cocktailbar-website-preview.png" alt="Website Cocktailbar preview">
            <span class="case__type">Website</span>
            <h2 class="case__title">Cocktailbar Caipiroski</h2>
          </a>
          <a href="https://leertafels.nl/" target="_blank" class="portfolio__item case">
            <img class="case__image" src="@/assets/img/bram-preview.png" alt="Webapp EK Balgevoel preview">
            <span class="case__type">Webapp</span>
            <h2 class="case__title">Tafels leren met Bram</h2>
          </a>
          <a href="https://ek-balgevoel.nl/" target="_blank" class="portfolio__item case">
            <img class="case__image" src="@/assets/img/ekbalgevoel-square.png" alt="Webapp EK Balgevoel preview">
            <span class="case__type">Webapp</span>
            <h2 class="case__title">EK balgevoel</h2>
          </a>
        </div>
      </div>

      <a class="scroll" id="scroll" href="#scroll">
        <div class="scroll__circle"></div>
        <p class="scroll__text">Scroll down to projects</p>
      </a>
    </section>

    <!-- <section>
      <div class="container">
        <div class="slider">
          <div
            class="slider__inner faders"
            @mouseenter="setCursor('SLIDE')"
            @mouseleave="resetCursor()"
          >
            <div class="slider__item fader">
              <img src="@/assets/img/cocktail-website.png" alt="Website showcase Coquelicots">
            </div>
            <div class="slider__item fader">
              <img src="@/assets/img/huisvanmijn-phone.png" alt="Website showcase Huis van Mijn">
            </div>-->
            <!-- <div class="slider__item fader"> -->
              <!-- <img src="@/assets/img/restaurant-ree.jpg" alt="Website showcase Huis van Mijn preview"> -->
            <!-- </div> -->
            <!-- <div class="slider__item fader"> -->
              <!-- <img src="@/assets/img/huisvanmijn.jpg" alt="Website showcase Huis van Mijn preview"> -->
            <!-- </div>-->
 

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

    <footer>
      <p>&copy;{{ new Date().getFullYear() }} Anne Noteboom</p>
    </footer>

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
        max: 1,
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

      const scroll = document.querySelector('.scroll');

      if (scroll) {
        window.addEventListener('scroll', () => {
          setScrollClass();  
        })
        setScrollClass();
      }

      function setScrollClass() {
        if (window.scrollY > 10) {
          scroll.classList.add('-scrolled');
        } else {
          scroll.classList.remove('-scrolled');
        }
      }
      
      setTimeout(() => {
        this.startSlider();
      }, 5000);

      const element = document.querySelector(".card");
      
      VanillaTilt.init(element, {
        max: 5,
        "max-glare": .1,
        reverse: true,
        speed: "2000",
      });
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
