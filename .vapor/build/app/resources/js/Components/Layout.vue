<script setup>
import Footer from './Footer.vue';
import Navbar from './Navbar.vue';


</script>

<template>
    <Navbar />
        <div class="bg-white h-full">
            <slot />    
        </div>
    <Footer />
</template>