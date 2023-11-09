<script setup>
import AdminLayout from '@/BaseComponents/AdminLayout.vue';
import CustomButton from '@/CustomComponents/CustomButton.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue';

const props = defineProps({
    user: {
        type: Object,
        required: true
    }
})

onMounted(() => {
    console.log(props.user)
})
</script>

<template>
    <AdminLayout>  
        <Head title="Mi perfil" /> 
        <div class="container mx-auto">
            <div class="mb-4 pb-2 border-b-2 px-2 border-primary-400 mb-6" >
                <b class="text-xl text-primary-600">!Hola, {{ user.name }}!</b>
            </div>
            <div class="flex justify-center gap-2 flex-wrap mb-8" >
                <form @submit.prevent="submit">
                    <div class="mb-2 w-full">
                        <div class="flex">
                            <label class="self-start" for="name">Nombre</label>
                            <input class="ml-4 w-full" id="name"  type="text" maxlength="60" />
                        </div>
                        <p class="text-xs text-right mt-1">120 caracteres máximo</p>
                    </div>
                    <div class="mb-2 w-full">
                        <div class="flex">
                            <label class="self-start" for="email">Correo</label>
                            <input class="ml-4 w-full" id="email"  type="text" maxlength="60" />
                        </div>
                        <p class="text-xs text-right mt-1">120 caracteres máximo</p>
                    </div>
                    <div class="mb-2 w-full">
                        <div class="flex">
                            <label class="self-start" for="email">Correo</label>
                            <input class="ml-4 w-full" id="email"  type="text" maxlength="60" />
                        </div>
                        <p class="text-xs text-right mt-1">120 caracteres máximo</p>
                    </div>
                    <div class="mb-2 w-full">
                        <div class="flex">
                            <label class="self-start" for="email">Correo</label>
                            <input class="ml-4 w-full" id="email"  type="text" maxlength="60" />
                        </div>
                        <p class="text-xs text-right mt-1">120 caracteres máximo</p>
                    </div>
                    <CustomButton type="submit" class="bg-primary-600 hover:bg-primary-800 text-primary-100 w-full" title="Publicar Post!">Publicar Post!</CustomButton>
                </form>
            </div>
        </div>
    </AdminLayout>
</template>