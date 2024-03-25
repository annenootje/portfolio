<template>
    
    <section class="section --contact">
        <!-- <div class="container"> -->
            <!-- <div class="col-12"> -->
                <div class="contact">
                    <span class="contact__title">
                        Con&nbsp;&nbsp;&nbsp;tact
                    </span>
                    <div class="card__container">
                        <div class="card" @click="sendEmail">
                            <div class="card__inner">
                                <div class="card__left">
                                    <div>
                                        <h3 class="card__title">Anne Noteboom</h3>
                                        <p>Webcreator</p>
                                    </div>
                                    <div>
                                        <a href="mailto:anne@noot.studio">
                                            <IconArrowTopRight class="card__icon" />
                                            anne@noot.studio
                                        </a>
                                    </div>
                                </div>
                                <div class="card__right">
                                    <img class="card__image" src="~/assets/img/logo.svg" alt="">
                                    <img class="card__image" src="~/assets/img/peace.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </section>
    
</template>

<script>

import IconArrowTopRight from '~/components/icons/IconArrowTopRight.vue'
export default {
    name: 'SectionContact',
    components: {
        IconArrowTopRight
    },

    methods: {
        sendEmail() {
            // window.location = "mailto:anne@noot.studio";
        }
    }
}

</script>