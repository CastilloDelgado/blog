<script setup>
import CustomButton from './CustomButton.vue';

defineProps({
    message: {
        type: String,
        rquired: true
    }
})
</script>

<template>
    <div id="contact-form" class="bg-dark-700 background px-2" >
        <div class="flex justify-center py-16 text-white">
            <form class="w-full sm:2/3 lg:w-1/2">
                <p class="text-center text-4xl font-bold mb-4">Contacto</p>
                <p class="text-center text-lg  px-6 lg:px-24 mb-8">{{ message }}</p>
                <div class="lg:px-16">
                    <div class="mb-2 flex flex-col">
                        <label class="text-lg mb-1" for="">Nombre Completo</label>
                        <input class="bg-dark-400 px-2 py-1 text-white placeholder:text-dark-100" placeholder="Nombre Completo"/>
                    </div>
                    <div class="mb-2 flex flex-col">
                        <label class="text-lg mb-1" for="">Título</label>
                        <input class="bg-dark-400 px-2 py-1 text-white placeholder:text-dark-100"  placeholder="Título" />
                    </div>
                    <div class="mb-2 flex flex-col">
                        <label class="text-lg mb-1" for="">Teléfono</label>
                        <input class="bg-dark-400 px-2 py-1 text-white placeholder:text-dark-100"  placeholder="Teléfono" />
                    </div>
                    <div class="mb-2 flex flex-col mb-6">
                        <label class="text-lg mb-1" for="">Escribe aquí tus dudas</label>
                        <textarea rows="6" class="bg-dark-400 px-2 py-1 text-white placeholder:text-dark-100"  placeholder="..." />
                    </div>
                    <div class="flex justify-center">
                        <CustomButton class="text-lg bg-dark-500 hover:bg-dark-600 text-dark-100 hover:scale-100 w-full" title="Enviar dudas" />
                    </div>
                </div>

            </form>
        </div>
    </div>
</template>

<style scoped>
.background {
    background-image: url("../../graphics/contact-background.svg");
    background-size: cover;
    background-repeat: no-repeat;
}
</style>

