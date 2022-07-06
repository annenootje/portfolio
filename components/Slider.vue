<template>
    <div class="slider"></div>
</template>

<script>

export default {
    name: "Slider",
    props: ['index'],

    methods: {
        nextStep() {
            console.log('done');
        }
    }
}

</script>
