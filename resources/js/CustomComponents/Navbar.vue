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
    <nav class="bg-primary-900 fixed w-full z-10">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <Link href="/">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="h-8 w-auto" :src="logo" alt="Yu-Kal Logo">
                            <img class="h-8 w-auto" :src="textLogo" alt="Yu-Kal Logo">
                        </div>
                    </Link>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div class="align-middle hidden sm:flex">
                        <NavbarLink v-for="option in options" :key="option.id" :option="option"  />
                        <a href="#contact-form">
                            <CustomButton class="bg-primary-600 hover:bg-primary-700 hover:bg-primary-600 text-primary-100" title="Contactanos"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>