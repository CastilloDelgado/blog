<script setup>
import CustomButton from './CustomButton.vue';
import image from "../../images/welcome/3.jpg"

</script>
<template>
    <div class="bg-light-100 pb-0 md:pb-8 lg:pb-4 w-full py-16">
        <div class="lg:h-[60vh] mx-auto w-full container flex grid-place-content-center">
            <div class="flex flex-col lg:flex-row">
                <div class="w-1/2"> 
                    <img :src="image" alt="" class="h-full w-auto object-cover py-4">
                </div>
                <div class="w-1/2 container grid place-content-center">
                    <div class="container max-w-lg text-center">
                        <p class="font-bold text-4xl text-light-800 pb-2">Únete a nuestra comunidad</p>
                        <p class="text-xl text-light-600 pb-8">Suscribete a nuestro newsletter para que recibas nuestros úlitmos post y noticias de nuestros proximos eventos</p>
                        <p class="text-sm text-light-600 mb-2">Ingresa su correo y da click en suscribirme</p>
                        <form class="w-full">
                            <input  required class="rounded border-2 border-light-400 mr-2 w-64 placeholder:text-light-400 text-light-800" type="email" placeholder="Ingresa tu correo electrónico...">
                            <CustomButton class="bg-light-600 hover:bg-light-800 text-light-200 text-lg" title="Suscribete"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>