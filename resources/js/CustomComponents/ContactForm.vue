<script setup>
import CustomButton from './CustomButton.vue';

defineProps({
    message: {
        type: String,
        rquired: true
    },

    url: {
        type: String,
        required: true
    }
})
</script>

<template>
    <div id="contact-form" class="bg-white px-2" >
        <div class="flex justify-center py-10 md:py-16 text-black">
            <form class="w-full sm:2/3 lg:w-1/2" :action="url" method="POST">
                <p class="text-center font-serif text-xl font-bold mb-4">¿Tienes algo que decirnos?</p>
                <p class="text-center px-6 lg:px-24 mb-8">{{ message }}</p>
                <div class="lg:px-16 w-full flex flex-col mx-auto jusitify-center sm:w-2/3 lg:w-full">
                    <div class="mb-2 w-full">
                        <input class="border-2 border-black mb-2 md:mb-0 md:mr-1 placeholder:text-black w-full" type="text" name="name" placeholder="Nombre Completo" required/>
                    </div>
                    <div class="mb-2 w-full">
                        <input class="border-2 border-black mb-2 md:mb-0 md:mr-1 placeholder:text-black w-full"  placeholder="Correo electrónico" type="email" name="email" required/>
                    </div>

                    <div class="mb-2 w-full">
                        <textarea rows="6" class="border-2 border-black mb-2 md:mb-0 md:mr-1 placeholder:text-black w-full"  placeholder="Escribe aquí tu mensaje..." name="message" required />
                    </div>
                    <div class="flex justify-center">
                        <CustomButton class="text-lg border-black border-2 bg-black hover:bg-white text-white hover:text-black w-full" title="Enviar" type="submit"/>
                    </div>
                </div>

            </form>
        </div>
    </div>
</template>

