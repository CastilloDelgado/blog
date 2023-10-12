<script setup>
import Banner1 from './Banner1.vue';
import Footer from './Footer.vue';
import Navbar from './Navbar.vue';


</script>

<template>
    <Navbar />
        <div class="bg-neutral-200 h-full">
            <div class="bg-white pt-32 pb-6 px-2 md:px-0 container mx-auto">
                <slot />  
                
                <Banner1 />
            </div>
        </div>
    <Footer />
</template>