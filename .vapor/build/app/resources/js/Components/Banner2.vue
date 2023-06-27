<script setup>
import BannerButton from './BannerButton.vue';


</script>

<template>
    <section class="flex flex-col lg:flex-row mb-8">
        <div class="w-100 lg:w-3/5 object-fill">
            <img src="../../images/banner-1.jpg" alt="" class="grayscale">
        </div>
        <div class="w-100 lg:w-2/5 bg-black border-t-4 lg:border-t-0 lg:border-l-4 border-white flex justify-center flex-col px-16 py-16 lg:py-0">
            <p class="font-serif text-4xl text-white text-center mb-4">¿Tienes algo que contar?</p>
            <p class="font-sans text-xl text-white text-center mb-12">Crea tu cuenta y comienza a escribir reviews de los conciertos a los que has asistido.</p>
            <div class="flex justify-center">
                <BannerButton>Crea tu cuenta aquí</BannerButton>
            </div>
        </div>
    </section>
</template>