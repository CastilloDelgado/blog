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
    <div class="bg-primary-900 py-6 w-full">
        <div class="container mx-auto max-w-7xl flex flex-col sm:flex-row  px-6 mb-4">
            <div class="w-full sm:w-1/2 mb-4 sm:mb-0">
                <div class="text-center sm:text-left text-primary-300">
                    <p class="text mb-2 font-bold">Yukal - Rediseñando el camino</p>
                    <p class="text-xs">Email: <a class="font-bold" href="#">contacto@yu-kal.com</a></p>
                    <p class="text-xs">Dirección: <a class="font-bold" href="#">contacto@yu-kal.com</a></p>
                    <!-- <p class="text-xs">Página creada por: <a class="font-bold" href="#">marcocastillo1997@gmail.com</a></p> -->
                </div>
            </div>
            <div class="w-full sm:w-1/2 mb-4 sm:mb-0">
                <div class="text-center sm:text-right text-xs text-primary-300">
                    <p class="mb-2">Enlaces a nuestras redes sociales</p>
                    <!-- <div  class="flex justify-center sm:justify-end gap-2">
                        <div v-for="link in links" :key="link.media" class="bg-primary-100 hover:scale-110 transition w-5 h-5 rounded-full text-center">
                            <a class="text-primary-700 font-bold h-full inline-block align-middle"  :href="link.link" :title="link.media">
                                {{ link.title[0] }}
                            </a>
                        </div>
                    </div> -->
                    <div class="w-full flex justify-end gap-4">
                        <a href="https://www.facebook.com/profile.php?id=61553355485348" target="_blank"><img :src="facebook" class="w-6 h-6 hover:scale-[105%] transition" /></a>
                        <a href="https://www.instagram.com/yukal55/" target="_blank"><img :src="instagram" class="w-6 h-6 hover:scale-[105%] transition" /></a>
                        <a href="https://www.youtube.com/channel/UCES11jeVrqq2QrK8tgrBLtQ" target="_blank"><img :src="youtube" class="w-6 h-6 hover:scale-[105%] transition" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-xs container  max-w-7xl  mx-auto flex justify-between px-6 text-primary-600"> 
            <div class="flex flex-col sm:flex-row justify-left gap-2 w-full sm:w-1/2">
                <a v-for="link in links" :key="link.media" target="_blank" :href="link.link" class="hover:border-b border-primary-600">{{ link.title }}</a>
            </div>
            <div class="flex flex-col text-right ">
                <div class="flex mb-2 justify-end">
                    <p class="mr-1">Yukal</p>
                    <p>Rediseñando el camino</p>
                </div>
                <div class="flex flex-col md:flex-row justify-end">
                    <Link href="/login">
                        <p class="ml-1 mb-1 text-primary-200 hover:border-b hover:border-primary-200">Iniciar Sesión</p>
                    </Link>
                    <Link href="/admin/posts">
                        <p class="ml-1 mb-1 text-primary-200 hover:border-b hover:border-primary-200">Admin</p>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>