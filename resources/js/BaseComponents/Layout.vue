<script setup>
import Navbar from '@/CustomComponents/Navbar.vue';
import Footer from '@/CustomComponents/Footer.vue';
import Banner1 from '@/CustomComponents/Banner1.vue';
</script>

<template>
    <div class="bg-neutral-300 scroll-smooth w-full justify-center">
        <Navbar />    
        <div class="min-h-[80vh] max-w-6xl mx-auto pt-24 bg-white">
            <slot />
        </div>
        <Footer />
    </div>
</template>