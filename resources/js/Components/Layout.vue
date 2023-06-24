<script setup>
import Footer from './Footer.vue';
import Navbar from './Navbar.vue';


</script>

<template>
    <Navbar />
        <div class="pt-20 pb-4 md:pt-24 bg-white h-full px-2">
            <slot />    
        </div>
    <Footer />
</template>