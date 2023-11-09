<script setup>
import { Link } from '@inertiajs/vue3'
import BaseDate from './BaseDate.vue';
import CustomButton from './CustomButton.vue';
import TagBadge from './TagBadge.vue';

defineProps({
    post: Object,
})
</script>

<template>
    <Link :href="`/posts/${post.id}`" class="hover:scale-[102%] transition rounded-lg">
        <div class="w-80 mb-6 transition rounded-lg h-full grid grid-cols-1 content-between" >
            <div class="rounded-lg">
                <img :src="post.image_url" alt="" class=" h-64 w-full object-cover rounded-t-lg">
                <div class="flex justify-center flex-col p-4">
                    <b class="font-serif text-lg text-center mb-3 text-primary-700 capitalize">{{ post.title }}</b>
                    <p class="text-sm text-justify mb-4 text-primary-900">{{  post.excerpt }}</p>
                    <div class="font-sans text-xs text-primary-950 mb-6">
                        <div class="mr-1 flex">
                            <b class="mr-1">Fecha: </b> 
                            <BaseDate :timestamp="post.created_at" />
                        </div>
                        <p class="mr-1"><b>Autor:</b> {{ post?.author?.name || 'Unknown' }}</p>
                    </div>
                    <!-- Tags -->
                    <div class="flex flex-wrap justify-left mt-4">
                        <TagBadge class="w-fit text-xs" v-for="tag in post.tags" :tag="tag" :key="tag.id"/>
                    </div>
                </div>
            </div>
            <div class="w-auto flex justify-center m-4">
                <CustomButton title="Continuar leyendo..." class="w-full bg-primary-600 hover:bg-primary-800 text-primary-100 hover:scale-[100%]" />
            </div>
        </div>
    </Link>
</template>