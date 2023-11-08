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
    <div class="bg-primary-100 rounded-lg text-center w-full sm:w-1/2 lg:w-1/4 hover:scale-[102%] transition h-max grid grid-cols-1 content-between">
        <div class="w-full object-cover flex justify-center mb-2 h-full">
            <img class="rounded-t-lg h-80 w-full object-cover" :src="product.image" />
        </div>
        <div class="p-4">
            <b class="text-primary-600 font-bold text-2xl mb-8">{{ product.title }}</b>
            <p class="text-primary-800 text-center mt-4 mb-2" v-if="product.description">{{ product.description }}</p>
            <div class="flex text-left px-4 mb-6 mt-4">
                <ul v-if="product.bullets" class="list-decimal">
                    <li v-for="bullet in product.bullets" class="mb-[1px] text-primary-900">{{ bullet }}</li>
                </ul>
            </div>
            <a href="#contact-form">
                <CustomButton class="bg-primary-600 hover:bg-primary-700 text-primary-100 mb-6" title="Contactanos" />
            </a>
        </div>
    </div>
</template>