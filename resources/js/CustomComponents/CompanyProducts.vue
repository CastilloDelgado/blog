<script setup>
import { ref } from 'vue';
import ProductBadge from './ProductBadge.vue';

const backgroundColors = ref([
    'bg-primary-100',
    'bg-primary-200',
    'bg-primary-300',
    'bg-primary-400',
    'bg-primary-500',
    'bg-primary-600',
    'bg-primary-700',
    'bg-primary-800',
    'bg-primary-900',
])

defineProps({
    title: {
        type: String,
        required: true
    },
    description: {
        type: String,
        required: true
    },
    products: {
        type: Array,
        required: true
    }
})

</script>

<template>
    <div class="bg-primary-100 py-24">
        <div class="container mx-auto">
            <div class="px-2">
                <div class="mb-12 text-center">
                    <p class="text-primary-600 font-bold text-4xl mb-6">{{ title }}</p>
                    <p class="text-primary-800 px-8 text-justify text-lg md:px-36 lg:px-64">{{ description }}</p>
                </div>
                <div class="flex flex-wrap w-full justify-center gap-6">
                    <ProductBadge v-for="(product, index) in products" :class="[backgroundColors[index + 1]]" :key="product.id" :product="product"/>
                </div>
            </div>
        </div>
    </div>
</template>