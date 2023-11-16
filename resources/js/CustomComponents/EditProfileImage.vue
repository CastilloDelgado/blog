<script setup>
import { useForm } from '@inertiajs/vue3';
import { computed } from 'vue';
import UploadImage from './UploadImage.vue';
import CustomButton from './CustomButton.vue';

const props = defineProps({
    currentImage: {
        type: Object,
        required: true
    }
})

const form = useForm({
    image: null
});

const imageToShow = computed(() => form.image ? URL.createObjectURL(form.image) : props.currentImage)

const submitForm = () => form.put('/admin/profile/update-image')

</script>

<template>
    <div class="pb-2 px-2 mb-6">
        <p class="text-center font-bold text-xl mb-4">Imagen de perfil </p>
        <form @submit.prevent="submitForm">
            <div class="w-full flex justify-center">
                <UploadImage :image="imageToShow" /> 
            </div>
            <div class="mb-6">
                <div class="flex mb-2">
                    <label class="self-start" for="image">Imagen Principal</label>
                    <label for="image" class="ml-3 bg-primary-500 hover:bg-primary-600 text-primary-100 px-4 py-2 transition rounded font-bold text-center">
                        Click aquí para agregar imagen principal.
                    </label>
                    <input id="image" class="hidden" type="file" @input="form.image = $event.target.files[0]" />
                </div>
            </div>
            <CustomButton 
                type="submit" 
                class="bg-primary-600 hover:bg-primary-800 text-primary-100 w-full" 
                title="Actualizar Imagen"
            />
        </form>
    </div>
</template>