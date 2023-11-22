<script setup>
import { Link }  from '@inertiajs/vue3';
import { NAVBAR_OPTIONS } from '@/constants';
import NavbarLink from "@/CustomComponents/NavbarLink.vue"
import CustomButton from "@/CustomComponents/CustomButton.vue"
import { ref } from 'vue'

const options = ref(NAVBAR_OPTIONS)
</script>

<template>
    <nav class="bg-white fixed w-full z-10 border-b-4 border-black">
        <div class="mx-auto px-0 sm:px-6 xl:px-0 lg:max-w-6xl">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <Link href="/">
                        <div class="flex flex-shrink-0 items-center h-full">
                            <p class="text-3xl font-bold font-serif">Life & Live Music</p>
                            <span class="text-sm font-sans h-full ml-2 align-top">[blog]</span>
                        </div>
                    </Link>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div class="align-middle hidden sm:flex">
                        <NavbarLink v-for="option in options" :key="option.id" :option="option"  />
                        <a href="#newsletter" class="ml-2">
                            <CustomButton class="bg-black text-white hover:bg-white border-black border-2 hover:text-black" title="Suscribete"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>