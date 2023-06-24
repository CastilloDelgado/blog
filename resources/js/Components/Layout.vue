<script setup>
import Footer from './Footer.vue';
import Navbar from './Navbar.vue';


</script>

<template>
    <Navbar />
        <div class="pt-8 md:pt-24 bg-white h-full">
            <slot />    
        </div>
    <Footer />
</template>