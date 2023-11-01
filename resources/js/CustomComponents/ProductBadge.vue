<script setup>
import CustomButton from './CustomButton.vue';

defineProps({
    product: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <div class="bg-primary-100 rounded-lg text-center w-full sm:w-1/2 lg:w-1/4 hover:scale-[102%] transition h-full grid grid-cols-1 content-between">
        <div class="w-full object-cover flex justify-center mb-6 h-full">
            <img class="rounded-t-lg h-80 w-full object-cover" :src="product.image" />
        </div>
        <div class="p-4">
            <p class="mb-2 text-primary-600 font-bold text-2xl">{{ product.title }}</p>
            <p class="text-primary-800 text-justify mb-8">{{ product.description }}</p>
            <CustomButton class="bg-primary-600 hover:bg-primary-700 text-primary-100 mb-6" title="Contactanos" />
        </div>
    </div>
</template>