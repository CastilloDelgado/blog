<script setup>
import Navbar from '@/CustomComponents/Navbar.vue';
import Footer from '@/CustomComponents/Footer.vue';
import Banner1 from '@/CustomComponents/Banner1.vue';
</script>

<template>
    <div class="bg-primary-50 scroll-smooth">
        <Navbar />    
        <div class="min-h-[80vh]">
            <slot />
        </div>
        <Footer />
    </div>
</template>