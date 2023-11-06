<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import Layout from '@/BaseComponents/Layout.vue';
import CustomButton from '@/CustomComponents/CustomButton.vue';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Layout>    
        <Head title="Log in" />
        <div class="h-[90vh] grid place-items-center py-24 px-2 bg-primary-50">
            <div class="p-6">
                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div >
                <form @submit.prevent="submit">
                    <div class="text-4xl text-center text-primary-800 font-bold  mb-4">
                        Iniciar Sesión
                    </div>
                    <div>
                        <InputLabel for="email" value="Correo Electrónico" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="Correo Electrónico"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password" value="Contraseña" />

                        <TextInput
                            id="password"
                            type="password"
                            class="mt-1 block w-full"
                            v-model="form.password"
                            required
                            autocomplete="current-password"
                            placeholder="Contraseña"
                        />

                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <Checkbox name="remember" v-model:checked="form.remember" />
                            <span class="ml-2 text-sm text-primary-600">Guardar sesión</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4 mb-2">
                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="underline text-sm text-primary-600 hover:text-primary-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"
                        >
                            Recuperar contraseña
                        </Link>
                    </div>
                    <CustomButton
                        title="Iniciar Sesión"
                        class="bg-primary-600 hover:bg-primary-800 text-primary-100 text-sm w-full hover:scale-[100%]"
                        :disabled="form.processing"
                        type="submit"
                    />
                </form>
            </div>
        </div>
    </Layout>
</template>
