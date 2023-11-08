<script setup>
import AdminLayout from '@/BaseComponents/AdminLayout.vue';
import Layout from '@/BaseComponents/Layout.vue';
import CustomButton from '@/CustomComponents/CustomButton.vue';
import { Head } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    title: null,
    slug: null,
    video: null,
    excerpt: null,
    body: null,
    image: null,
    tags: null,
    postImages: null,
})


function submit(){
    form.post('/posts')
}

defineProps({
    tags: Array
})

</script>

<template>
    <AdminLayout>
        <Head title="Create Post" />
        <div class="container mx-auto">
            <div class="mb-4 pb-2 border-b-2 px-2 border-primary-400 mb-6" >
                <b class="text-xl text-primary-600">Editar post</b>
            </div>
            <div class="flex justify-center gap-2 flex-wrap mb-8" >
                <form @submit.prevent="submit">
                    <div class="mb-2 flex w-full">
                        <label class="self-start" for="title">Título</label>
                        <input class="ml-4 w-full" id="title"  type="text" v-model="form.title" />
                    </div>
                    <div class="mb-2 flex w-full">
                        <label class="self-start" for="slug">Slug</label>
                        <input class="ml-4 w-full" id="slug"  type="text" v-model="form.slug" />
                    </div>
                    <div class="mb-2 flex w-full">
                        <label class="self-start" for="video">Video URL</label>
                        <input class="ml-4 w-full" id="video"  type="text" v-model="form.video" />
                    </div>
                    <div class="mb-2 flex w-full">
                        <label class="self-start" for="excerpt">Extracto</label>
                        <input class="ml-4 w-full" id="excerpt"  type="text" v-model="form.excerpt" />
                    </div>
                    <div class="mb-4 w-full flex">
                        <label class="self-start" for="body">Contenido</label>
                        <textarea class="ml-4 w-full" id="body"  v-model="form.body" rows="10" />
                    </div>
                    <div class="mb-4 flex">
                        <label for="tags" class="self-start">Tags</label>
                        <select class="ml-4 w-full" id="tags" v-model="form.tags" multiple>
                            <option v-for="tag in tags" :value="tag.id" class="flex w-auto flex-row">
                                {{ tag.name }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-6 flex">
                        <label class="self-start" for="image">Imagen Principal</label>
                        <label for="image" class="ml-3 bg-primary-500 hover:bg-primary-600 text-primary-100 px-4 py-2 transition rounded font-bold text-center">
                            Click aquí para agregar imagen principal.
                        </label>
                        <input id="image" class="hidden" type="file" @input="form.image = $event.target.files[0]" />
                    </div>
                    <div class="mb-5 flex">
                        <label class="self-start" for="postImages">Galería de Imagenes</label>
                        <label for="postImages" class="ml-3 bg-primary-500 hover:bg-primary-600 text-primary-100 px-4 py-2 transition rounded font-bold text-center">
                            Click aquí para agregar multiples imagenes a la galería
                        </label>
                        <input id="postImages" class="hidden" type="file" multiple @input="form.postImages = $event.target.files"  />
                    </div>
                    <CustomButton type="submit" class="bg-primary-600 hover:bg-primary-800 text-primary-100 w-full" title="Publicar Post!">Publicar Post!</CustomButton>
                </form>
            </div>
        </div>
    </AdminLayout>
    
</template>