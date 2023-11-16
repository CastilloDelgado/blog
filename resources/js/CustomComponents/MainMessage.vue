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
    <div class="bg-light-200 pt-16 pb-6 lg:pt-6 lg:h-screen background px-2">
        <div class="container h-full mx-auto grid place-content-center">
            <div class="flex flex-col lg:flex-row justify-center w-full">
                <div class="lg:w-3/5 md:py-12">
                    <Transition>
                        <div v-if="showTitle" class="h-[80vh] md:h-full grid place-content-center">
                            <div class="flex justify-center mb-6">
                                <img :src="logo" class="h-24 md:h-44" alt="">
                                <img :src="textLogo" class="h-20 md:h-36" alt="">
                            </div>
                            <p class="text-2xl text-center text-primary-900  mx-2 lg:mx-16 mb-6">
                                Acompañar e impulsar el despertar espiritual y de consciencia <b>resideñando el camino.</b>
                            </p>
                            <p class="text-center text-primary-800 text-lg mb-2">Siguenos en nuestras redes</p>
                            <div class="w-full flex justify-center gap-4 mb-8">
                                <a href="https://www.facebook.com/profile.php?id=61553355485348" target="_blank"><img :src="facebook" class="w-8 h-8 hover:scale-[105%] transition" /></a>
                                <a href="https://www.instagram.com/yukal55/" target="_blank"><img :src="instagram" class="w-8 h-8 hover:scale-[105%] transition" /></a>
                                <a href="https://www.youtube.com/channel/UCES11jeVrqq2QrK8tgrBLtQ" target="_blank"><img :src="youtube" class="w-8 h-8 hover:scale-[105%] transition" /></a>
                            </div>
                            <div class="flex justify-center">
                                <a href="#contact-form">
                                    <CustomButton class="text-xl bg-primary-600 hover:bg-primary-700 text-primary-100" title="Contactanos" />
                                </a>
                            </div>
                        </div>
                    </Transition>
                </div>
                <div class="lg:w-2/5 h-full mb-6">
                    <Transition name="slide-fade">
                        <div v-if="showGallery" class="columns-2 gap-2">   
                            <img @load="() => console.log('image loaded 1')" class="w-full rounded aspect-square object-cover mb-2" :src="image3" />
                            <img @load="() => console.log('image loaded 2')" class="w-full rounded aspect-video  object-cover mb-2" :src="image1" />
                            <img @load="() => console.log('image loaded 3')" class="w-full rounded aspect-video  object-cover mb-2" :src="image2" />
                            <img @load="() => console.log('image loaded 4')" class="w-full rounded aspect-square object-cover mb-2" :src="image4" />
                        </div>
                    </Transition>     
                </div>
            </div>
        </div>
    </div>  
</template>

<style scoped>
.background {
    background-image: url("../../graphics/welcome-background.svg");
    object-fit: cover;
    background-repeat: no-repeat;
}

.v-enter-active {
  transition: opacity 1s ease;
}

.v-enter-from {
  opacity: 0;
}

.slide-fade-enter-active {
  transition: all 1.5s ease-out;
}

.slide-fade-enter-from {
  transform: translateX(20px);
  opacity: 0;
}
</style>