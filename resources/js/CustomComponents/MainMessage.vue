<script setup>
import CustomButton from "./CustomButton.vue";
import { onMounted, ref } from "vue";

import logo from "../../images/logos/logo-dark.png"
import textLogo from "../../images/logos/text-logo-dark.png"
import image1 from "../../images/welcome/1.jpg"
import image2 from "../../images/welcome/2.jpg"
import image3 from "../../images/welcome/3.jpg"
import image4 from "../../images/welcome/4.jpg"

import facebook from "../../images/icons/facebook.png"
import instagram from "../../images/icons/instagram.png"
import youtube from "../../images/icons/youtube.png"

const showTitle = ref(false)
const showGallery = ref(false)

onMounted(() => {
    showTitle.value = true
    showGallery.value = true
})

</script>

<template>
    <div class="w-full flex justify-center min-h-[50vh] grid place-content-center px-2">
        <div class="max-w-xl">
            <div class="flex mb-8">
                <p class="font-bold text-6xl font-serif text-center w-fit">Life & Live Music</p>
                <p class="text-xl">[blog]</p>
            </div>
            <p class="text-center text-3xl">
                Fotos <b>horribles</b> y <b>buenas</b> historias de momentos <b>innolvidables</b>.
            </p>
        </div>
    </div>  
</template>