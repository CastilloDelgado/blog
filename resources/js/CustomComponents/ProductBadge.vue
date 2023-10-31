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
    <div class="rounded-lg text-center p-3 w-full sm:w-1/2 lg:w-1/4 hover:scale-[102%] transition">
        <div class="w-full object-cover flex justify-center mb-6">
            <img class="rounded-lg h-80 w-full object-cover" :src="product.image" />
        </div>
        <div class="px-4">
            <p class="mb-2 text-primary-600 font-bold text-2xl">{{ product.title }}</p>
            <p class="text-primary-800 text-justify mb-8">{{ product.description }}</p>
            <CustomButton class="bg-primary-600 hover:bg-primary-700 text-primary-100 mb-6" title="Contactanos" />
        </div>
    </div>
</template>