<script setup>
import Footer from './Footer.vue';
import Navbar from './Navbar.vue';


</script>

<template>
    <Navbar />
        <div class="bg-neutral-200 h-full">
            <div class="bg-white py-32 px-2 md:px-0 container mx-auto">
                <slot />    
            </div>
        </div>
    <Footer />
</template>