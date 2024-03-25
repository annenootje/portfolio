<template>
    <div class="splide__slide item" >
        <a class="item__inner" :href="link" target="_blank">
            <div class="item__top" >
                <h6>{{ subtitle }}</h6>
                <IconArrowTopRight class="item__arrow" />
            </div>
            <h3 v-html="title"></h3>
            <p class="item__bottom">{{ text }}</p>
        </a>
        
    </div>
</template>

<script>

import IconArrowTopRight from './icons/IconArrowTopRight.vue'

export default {
    components: {
        IconArrowTopRight
    },
    props: {
        title: String,
        subtitle: String,
        text: String,
        link: String,
        video: String
    }
}

</script>