<script setup>
import Navbar from '@/CustomComponents/Navbar.vue';
import Footer from '@/CustomComponents/Footer.vue';
import Banner1 from '@/CustomComponents/Banner1.vue';
import { Link } from '@inertiajs/vue3';
import { ADMIN_OPTIONS } from '@/constants';
import { ref } from 'vue';

const options = ref(ADMIN_OPTIONS)
</script>

<template>
    <div class="bg-primary-50 scroll-smooth">
        <Navbar />    

        <div class="container mx-auto flex pt-36 pb-12 min-h-screen">
            <div class="w-64 border-r-2 text-right px-4 list-none border-primary-400">
                <ul class="list-none">
                    <li v-for="option in options"><Link :href="option.link">{{ option.title }}</Link></li>
                </ul>
            </div>
            <div class="ml-4 w-full">

                <slot />
            </div>
        </div>
        <Footer />
    </div>
</template>