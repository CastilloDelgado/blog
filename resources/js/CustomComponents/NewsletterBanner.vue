<script setup>
import CustomButton from './CustomButton.vue';
import image from "../../images/banner-1.jpg"
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
    <div class="flex flex-col lg:flex-row" id="newsletter">
        <div class="w-100 lg:w-2/5 bg-black border-t-4 lg:border-t-0 lg:border-r-4 border-white flex justify-center flex-col px-16 py-32 lg:py-0">
            <p class="font-serif text-4xl text-white text-center mb-4">Suscribete</p>
            <p class="font-sans text-xl text-white text-center mb-12">Recibe las últimas noticias y reviews de tus conciertos favoritos!</p>
            <form @submit.prevent="submitForm" class="w-full flex flex-col md:flex-row justify-center " v-if="!formSubmitted">
                <input required class="border-2 border-white mb-2 md:mb-0 md:mr-1 placeholder:text-black" v-model="form.email" type="email" placeholder="Ingresa tu correo electrónico...">
                <CustomButton class="bg-white border-2 hover:bg-black hover:text-white border-white" title="Suscribete"/>
            </form>
            <div v-else class="w-full justify-center">
                <p class="thanks font-bold text-2xl text-center font-serif text-black">¡Gracias por suscribirte!</p>
            </div>
        </div>
        <div class="w-100 lg:w-3/5 object-fill">
            <img :src="image" alt="" class="grayscale">
        </div>
    </div>
</template>

<style scoped>
.thanks{
 text-shadow: -1px 1px #ffffff;
}

</style>