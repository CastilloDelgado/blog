<script setup>
import Navbar from '@/CustomComponents/Navbar.vue';
import Footer from '@/CustomComponents/Footer.vue';
import Banner1 from '@/CustomComponents/Banner1.vue';
</script>

<template>
    <div class="bg-primary-50 scroll-smooth">
        <Navbar />    
        <slot />
        <Footer />
    </div>
</template>