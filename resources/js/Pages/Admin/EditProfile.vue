<script setup>
import AdminLayout from '@/BaseComponents/AdminLayout.vue';
import CustomButton from '@/CustomComponents/CustomButton.vue';
import UploadImage from '@/CustomComponents/UploadImage.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';

const props = defineProps({
    user: {
        type: Object,
        required: true
    }
})

const profileInfoForm = useForm({
    name: '',
    email: ''
})

const profileImageForm = useForm({
    image: ''
})

const updatePasswordForm = useForm({
    currentPassword: '',
    newPassword: '',
    confirmPassword: ''
})


profileInfoForm.defaults({
    name: props.user.name,
    email: props.user.email
})

const submitProfileInfo = () => {
    profileInfoForm.put('/admin/profile/update-info')
}


onMounted(() => {
    profileInfoForm.reset()
    console.log(props.user)
})
</script>

<template>
    <AdminLayout>  
        <Head title="Mi perfil" /> 
        <div class="mb-4 pb-2 px-2 mb-6 border-b-2 border-primary-400" >
            <b class="text-xl text-primary-600">¡Hola, {{ user.name }}!</b>
        </div>
        <div class="flex justify-center">
            <div class="container max-w-lg">
                <div class="pb-2 px-2 mb-6">
                    <p class="text-center font-bold text-xl mb-4">Información de tu perfil </p>
                    <form @submit.prevent="submitProfileInfo">
                        <div class="mb-2 w-full">
                            <div class="flex">
                                <label class="self-start" for="name">Nombre</label>
                                <input class="ml-4 w-full" id="name" type="text" v-model="profileInfoForm.name" maxlength="60" />
                            </div>
                            <p class="text-xs text-right mt-1">120 caracteres máximo</p>
                        </div>
                        <div class="mb-2 w-full">
                            <div class="flex">
                                <label class="self-start" for="email">Correo</label>
                                <input class="ml-4 w-full" id="email"  type="text"  v-model="profileInfoForm.email" maxlength="60" disabled />
                            </div>
                            <p class="text-xs text-right mt-1">120 caracteres máximo</p>
                        </div>
                        <CustomButton 
                            type="submit" 
                            class="bg-primary-600 hover:bg-primary-800 text-primary-100 w-full" 
                            title="Actualizar información"
                        />
                    </form>
                </div>
                <div class="pb-2 px-2 mb-6">
                    <p class="text-center font-bold text-xl mb-4">Imagen de perfil </p>
                    <form @submit.prevent="submit">
                        <div class="w-full flex jusity-center">
                            <UploadImage :image="user.image_url" /> 
                        </div>
                        <div class="mb-6">
                            <div class="flex mb-2">
                                <label class="self-start" for="image">Imagen Principal</label>
                                <label for="image" class="ml-3 bg-primary-500 hover:bg-primary-600 text-primary-100 px-4 py-2 transition rounded font-bold text-center">
                                    Click aquí para agregar imagen principal.
                                </label>
                                <!-- <input id="image" class="hidden" type="file" @input="form.image = $event.target.files[0]" /> -->
                                <input id="image" class="hidden" type="file" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pb-2 px-2 mb-6">
                    <p class="text-center font-bold text-xl mb-4">Actualizar contraseña</p>
                    <form @submit.prevent="submit">
                        <div class="mb-2 w-full">
                            <div class="flex">
                                <label class="self-start" for="name">Contraseña actual</label>
                                <input class="ml-4 w-full" id="name"  type="text" maxlength="60" />
                            </div>
                            <p class="text-xs text-right mt-1">Ingresa tu contraseña actual</p>
                        </div>
                        <div class="mb-2 w-full">
                            <div class="flex">
                                <label class="self-start" for="email">Nueva Contraseña</label>
                                <input class="ml-4 w-full" id="email"  type="text" maxlength="60" />
                            </div>
                            <p class="text-xs text-right mt-1">Ingresa unan ueva contraseña</p>
                        </div>
                        <div class="mb-2 w-full">
                            <div class="flex">
                                <label class="self-start" for="email">Confirmar Contraseña</label>
                                <input class="ml-4 w-full" id="email"  type="text" maxlength="60" />
                            </div>
                            <p class="text-xs text-right mt-1">Confirma tu nueva contraseña para continuar</p>
                        </div>
                        <CustomButton 
                            type="submit" 
                            class="bg-primary-600 hover:bg-primary-800 text-primary-100 w-full" 
                            title="Actualizar contraseña"
                        />
                    </form>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>