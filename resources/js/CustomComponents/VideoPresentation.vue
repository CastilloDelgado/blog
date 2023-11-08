<script setup>
import CustomButton from './CustomButton.vue';


defineProps({
    video: {
        type: Object,
        required: true
    },
    poster: {
        type: Object,
        required: false,
        default: null,
    },

    title: {
        type: String,
        required: true
    },
    
    description: {
        type: String,
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
                            <p class="text-4xl text-center font-bold text-secondary-600 mb-4" v-if="title">{{ title }}</p>
                            <p class="text-justify text-lg text-secondary-800 mb-2" v-if="description">{{ description }}</p>
                            <!-- <div class="w-full flex justify-center mt-8">
                                <CustomButton title="Más información" class="bg-secondary-600 hover:bg-secondary-700 text-secondary-100" />
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 ">
                    <video class="w-auto lg:h-full" height="100hv" :src="video" controls  :poster="poster"/>
                </div>
            </div>
        </div>
    </div>
</template>