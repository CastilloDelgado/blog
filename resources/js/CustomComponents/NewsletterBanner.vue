<script setup>
import CustomButton from './CustomButton.vue';
import image from "../../images/welcome/3.jpg"
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const form = useForm({
    email: null,
    merge_fields: {}
})

const formSubmitted = ref(false)

const submitForm = () => form.post('/suscribe', {
    onSuccess: () => formSubmitted.value = true
})


</script>
<template>
    <div class="bg-light-100 w-full py-6 lg:py-16">
        <div class="lg:h-[60vh] mx-auto w-full container flex grid-place-content-center">
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2"> 
                    <img :src="image" alt="" class="h-full w-auto object-cover py-4">
                </div>
                <div class="lg:w-1/2 container grid place-content-center">
                    <div class="container max-w-lg text-center px-6">
                        <p class="font-bold text-4xl text-light-700 pb-2">Únete a nuestra comunidad</p>
                        <p class="text-xl text-light-600 pb-8">Suscribete a nuestro newsletter para que recibas nuestros últimos post y noticias de nuestros proximos eventos y talleres.</p>
                        <p class="text-sm text-light-600 mb-2">Ingresa su correo y da click en suscribirme</p>
                        <form @submit.prevent="submitForm" class="w-full" v-if="!formSubmitted">
                            <input required class="rounded border-2 border-light-600 bg-light-50 mr-2 w-64 placeholder:text-light-400 text-light-800 mb-2" v-model="form.email" type="email" placeholder="Ingresa tu correo electrónico...">
                            <CustomButton class="bg-light-600 hover:bg-light-800 text-light-200 text-lg" title="Suscribete"/>
                        </form>
                        <div v-else>
                            <p class="text-light-800 font-bold text-xl">¡Gracias por suscribirte!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>