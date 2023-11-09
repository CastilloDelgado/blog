<script setup>
import Navbar from '@/CustomComponents/Navbar.vue';
import Footer from '@/CustomComponents/Footer.vue';
import { Link, router } from '@inertiajs/vue3';
import { ADMIN_OPTIONS } from '@/constants';
import { ref } from 'vue';

const options = ref(ADMIN_OPTIONS)
const selected = (link) => router.page.url === link
</script>

<template>
    <div class="bg-primary-50 scroll-smooth">
        <Navbar />    
        <div class="container mx-auto flex pt-36 pb-12 min-h-screen">
            <div class="w-64 border-r-2 text-right px-4 list-none border-primary-400">
                <ul class="list-none">
                    <li v-for="option in options">
                        <Link :href="option.link">
                            <p 
                            class="w-auto" 
                            :class="{
                                'border-b-2 border-primary-200 font-bold': selected(option.link)
                            }">
                                {{ option.title }}
                            </p>
                        </Link>
                    </li>
                </ul>
            </div>
            <div class="ml-4 w-full">
                <slot />
            </div>
        </div>
        <Footer />
    </div>
</template>