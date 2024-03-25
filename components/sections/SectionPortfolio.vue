<template>
    <section class="section --portfolio">
            <div class="container">
                <div class="col-3 portfolio__left">
                    <div>
                        <h2>Portfolio</h2>
                        <p>
                            Bekijk hier een greep uit mijn gedane projecten. Sommige zijn gemaakt in 
                            samenwerking of in opdracht van. Andere uit eigen initiatief.
                        </p>
                    </div>
                    <div class="splide__controls">
                        <IconArrowTopRight class="-enlarge-mouse" @click="setSplideLeft" />
                        <IconArrowTopRight class="-enlarge-mouse" @click="setSplideRight" />
                    </div>
                </div>
                <div class="col-7">
                    <div class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <CaseItem
                                    subtitle="Website"
                                    title="Hero Dakkappellen"
                                    text="DEVELOPMENT & DESIGN"
                                    link="https://herodakkapellen.nl"
                                    video=""
                                />
                                <CaseItem
                                    subtitle="Webapplicatie"
                                    title="I’m There"
                                    text="DEVELOPMENT"
                                    link="https://www.imthere.nl"
                                    video=""
                                />
                                <CaseItem
                                    subtitle="Webshop"
                                    title="Studio<br/> Huis van Mijn"
                                    text="DEVELOPMENT & DESIGN"
                                    link="https://www.studiohuisvanmijn.nl"
                                    video=""
                                />
                                <CaseItem
                                    subtitle="Website"
                                    title="Coquelicots"
                                    text="DEVELOPMENT & DESIGN"
                                    link="https://www.coquelicots.nl"
                                    video=""
                                />
                                <CaseItem
                                    subtitle="Website"
                                    title="Tours de Drone"
                                    text="DEVELOPMENT & DESIGN"
                                    link="https://www.toursdedrone.com"
                                    video=""
                                />
                            </div>
                        </div>
                    </div>
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <CaseItem
                                    subtitle="Webapplicatie"
                                    title="PodcastFinder"
                                    text="DEVELOPMENT & DESIGN"
                                    link="https://podcast-finder.com/"
                                    video=""
                                />
                                <CaseItem
                                    subtitle="Website"
                                    title="Notegrafie"
                                    text="DEVELOPMENT & DESIGN"
                                    link="https://www.notegrafie.nl"
                                    video=""
                                />
                                <CaseItem
                                    subtitle="Webapplicatie"
                                    title="Tafels leren<br/> met Brammetje"
                                    text="DEVELOPMENT & DESIGN"
                                    link="https://leertafels.nl/"
                                    video=""
                                />  
                                <CaseItem
                                    subtitle="Website"
                                    title="Groeneveld <br/>CTO"
                                    text="DEVELOPMENT & DESIGN"
                                    link="https://www.groeneveldcto.nl"
                                    video=""
                                />
                                <CaseItem
                                    subtitle="Webapplicatie"
                                    title="Can I <br/> surf today?"
                                    text="DEVELOPMENT & DESIGN"
                                    link="https://www.canisurftoday.com"
                                    video=""
                                />                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</template>

<script>

import CaseItem from './../CaseItem.vue';
import IconArrowTopRight from '~/components/icons/IconArrowTopRight.vue'

export default {
    components: {
        CaseItem,
        IconArrowTopRight
    },

    methods: {
        setSplideLeft() {
            const prevArrows = document.querySelectorAll('.splide__arrow.splide__arrow--prev');
            const nextArrows = document.querySelectorAll('.splide__arrow.splide__arrow--next');

            if (prevArrows.length > 0) {
                prevArrows[0].click();
            }

            if (nextArrows.length > 1) {
                nextArrows[1].click();
            }
            
        },
        setSplideRight() {
            const prevArrows = document.querySelectorAll('.splide__arrow.splide__arrow--prev');
            const nextArrows = document.querySelectorAll('.splide__arrow.splide__arrow--next');

            if (prevArrows.length > 1) {
                prevArrows[1].click();
            }

            if (nextArrows.length > 0) {
                nextArrows[0].click();
            }
        }
    }
}

</script>