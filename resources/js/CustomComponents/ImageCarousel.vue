<script setup>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import '@splidejs/vue-splide/css';

defineProps({
    images: {
        type: Array,
        required: true
    }
})

</script>

<template>
    <Splide  :options="{ rewind: true }" aria-label="My Favorite Images">
        <SplideSlide  v-for="image in images" class=" w-full h-full">
            <img :src="image" class="object-container w-full h-full" alt="">
        </SplideSlide>
    </Splide>
</template>