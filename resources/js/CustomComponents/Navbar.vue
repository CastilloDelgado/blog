<script setup>
import { Link }  from '@inertiajs/vue3';
import { NAVBAR_OPTIONS } from '@/constants';
import NavbarLink from "@/CustomComponents/NavbarLink.vue"
import CustomButton from "@/CustomComponents/CustomButton.vue"
import { ref } from 'vue'
import logo from "../../images/logos/logo.png"
import textLogo from "../../images/logos/text-logo.png"

const options = ref(NAVBAR_OPTIONS)
const menuOpen = ref(false)

function changeMenuOpen() {
    menuOpen.value = !menuOpen.value
}
</script>

<template>
    <nav class="bg-white fixed w-full z-10 border-b-4 border-black">
        <div class="mx-auto max-w-6xl px-2">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <Link href="/">
                        <div class="flex flex-shrink-0 items-center h-full">
                            <p class="text-2xl font-bold font-serif">Life & Live Music</p>
                            <span class="text-xs font-sans h-full ml-2 align-top">[blog]</span>
                        </div>
                    </Link>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div class="align-middle hidden sm:flex">
                        <NavbarLink v-for="option in options" :key="option.id" :option="option"  />
                        <a href="#contact-form" class="ml-2">
                            <CustomButton class="bg-black text-white" title="Contactanos"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>