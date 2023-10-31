<script setup>
import CustomButton from './CustomButton.vue';

defineProps({
    video: {
        type: Object,
        required: true
    }
})

</script>

<template>
    <div class="bg-secondary-100 pb-0 md:pb-8 lg:pb-4 ">
        <div class="lg:h-[70vh] mx-auto w-full container flex grid-place-content-center">
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2"> 
                    <div class="w-full h-full grid place-content-center">
                        <div class="py-16 lg:py-2 px-12">
                            <p class="text-4xl text-center font-bold text-secondary-600 mb-4">Despertar de la conciencia</p>
                            <p class="text-justify text-lg text-secondary-800 mb-2">El viaje del ser humano es el despertar de conciencia, el cual nos puede llegar a temprana edad o incluso antes de trasmutar. ¡Cada individuo viene a madre tierra con un propósito o misión, muchos de nosotros no lo sabemos o no lo recordamos!</p>
                            <div class="w-full flex justify-center mt-8">
                                <CustomButton title="Más información" class="bg-secondary-600 hover:bg-secondary-700 text-secondary-100" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 ">
                    <video class="w-auto lg:h-full" height="100hv" :src="video" controls />
                </div>
            </div>
        </div>
    </div>
</template>