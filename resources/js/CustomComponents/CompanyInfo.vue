<script setup>
import CustomButton from "./CustomButton.vue";
import ImageCarousel from "./ImageCarousel.vue";

defineProps({
    title: {
        type: String,
        required: true
    },
    description: {
        type: String,
        required: true
    },
    images: {
        type: Array,
        required: true
    }
})

</script>

<template>
    <div class="bg-white grid place-content-center">
        <div class="container mx-auto flex flex-col lg:flex-row py-12">
            <div class="hidden lg:inline-block lg:w-1/2 h-full grid place-content-center">
                <div>
                    <ImageCarousel :images="images" />
                </div>
            </div>
            <div class="py-12 mb-6 lg:w-1/2 text-center px-8 grid place-content-center">
                <div>
                    <p class="text-primary-600 text-4xl font-bold mb-8">{{ title }}</p>
                    <p class="text-primary-800 text-justify mb-8 px-4 md:px-16 lg:px-12 text-lg">{{  description }}</p>
                    <CustomButton class="bg-primary-600 hover:bg-primary-700 text-primary-100" title="Contactanos" />
                </div>
            </div>
            <div class="lg:hidden lg:w-1/2 h-auto grid place-content-center">
                <ImageCarousel :images="images" />
            </div>
        </div>
    </div>
</template>