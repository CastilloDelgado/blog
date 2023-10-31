<script setup>
import Navbar from '@/CustomComponents/Navbar.vue';
import Footer from '@/CustomComponents/Footer.vue';
import Banner1 from '@/CustomComponents/Banner1.vue';
</script>

<template>
    <div>
        <Navbar />    
        <slot />
        <!-- <Banner1 /> -->
        <Footer />
    </div>
</template>