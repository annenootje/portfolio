<template>
    
    <section class="section --about">

        <div class="container">
            <div class="col-7">
                <span class="quote">
                    Een professioneel nerd 
                    met een passie voor alles 
                    wat begint met web
                </span>
                <div class="container">
                    <div class="col-5">
                        <h5>
                            HTML5, CSS3, SCSS, SASS, Vanille JavaScript, ReactJS, VueJS, NodeJS, PHP,  Laravel, Wordpress custom thema’s, OpenAI (LLC & RAG)
                        </h5>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4 -align-end">
                        <span class="link -right-icon">
                            Bekijk mijn CV
                            <IconsIconArrowTopRight/>
                        </span>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-2 no-gutter -align-end">
                <img src="~/assets/img/anne-noteboom.png" alt="Anne Noteboom working">
            </div>
            <div class="col-2">
                <p class="-text-right">
                    Alles wat ik maak is maatwerk. Ik werk niet met standaard of vantevoren aangekochte thema’s.
                </p>
            </div>
        </div>

        <div class="container">
            <div class="col-3 -align-end">
                <p>Professioneel nerd. Zo omschrijf ik mezelf graag. Het mooiste aan coderen is dat alles mogelijk is. Je creëert een eigen, nieuwe wereld en vult deze met de oneindige mogelijkheden. Mijn projecten typeren zich door hun kwaliteit, flexibiliteit en maatwerk. </p>
            </div>

            <div class="col-7 -align-end">
                <span class="quote -small -text-right">
                    Het mooiste aan coderen<br/>
                    is dat je een eigen wereld creeert waar alles mogelijk is
                </span>
            </div>
        </div>

    </section>
    
</template>

<script>
import IconsIconArrowTopRight from '~/components/icons/IconArrowTopRight.vue'
export default {
    name: 'SectionAbout',
    components: {
        IconsIconArrowTopRight
    }
}

</script>