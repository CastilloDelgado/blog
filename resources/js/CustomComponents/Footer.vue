<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { SOCIAL_MEDIA_LINKS } from "@/constants"
import facebook from "../../images/icons/facebook.png"
import instagram from "../../images/icons/instagram.png"
import youtube from "../../images/icons/youtube.png"

const links = ref(SOCIAL_MEDIA_LINKS)
</script>


<template>
    <div class="bg-black flex justify-center py-8">
        <div class="max-w-6xl ">
            <div class="flex justify-center">
                <Link href="/">
                    <div class="flex flex-shrink-0 items-center h-full text-white mb-2">
                        <p class="text-2xl font-bold font-serif">Life & Live Music</p>
                        <span class="text-xs font-sans h-full ml-2 align-top">[blog]</span>
                    </div>
                </Link>
            </div>
            <a href="https://www.instagram.com/castillodelgado/" target="_blank" class="flex justify-center">
                <p class="text-white text-xs">
                    Creado por <b>Marco Castillo</b>
                </p>
            </a>
        </div>
    </div>
</template>