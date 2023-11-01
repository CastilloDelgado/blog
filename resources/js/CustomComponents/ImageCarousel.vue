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
        <SplideSlide  v-for="image in images" >
            <img :src="image" class="object-cover w-full h-full" alt="Sample 1">
        </SplideSlide>
    </Splide>
</template>