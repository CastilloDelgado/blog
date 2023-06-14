<script setup>
import Footer from './Footer.vue';
import Navbar from './Navbar.vue';


</script>

<template>
    <Navbar />
        <div class="pt-16">
            <slot />    
        </div>
    <Footer />
</template>