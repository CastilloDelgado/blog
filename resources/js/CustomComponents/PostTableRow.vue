<script setup>
import { Link, router } from '@inertiajs/vue3'
import BaseDate from './BaseDate.vue';
import CustomButton from './CustomButton.vue';
import TagBadge from './TagBadge.vue';

const props = defineProps({
    post: Object,
})


function deletePost(){
    router.delete('/admin/posts/'  + props.post.id);
}

</script>

<template>
    <div class="w-full h-full grid grid-cols-1 content-between" >
        <div class="rounded flex">
            <img :src="post.image_url" alt="" class="h-36 w-36 object-cover">
            <div class="flex justify-left flex-col px-4 py-2">
                <b class="font-serif text-lg text-primary-700 capitalize">{{ post.title }}</b>
                <p class="text-sm text-justify mb-4 text-primary-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, animi? Voluptate laboriosam, ullam temporibus maiores...</p>
                <div class="font-sans text-xs text-primary-950">
                    <div class="mr-1 flex">
                        <b class="mr-1">Fecha: </b> 
                        <BaseDate :timestamp="post.concert_date" />
                    </div>
                    <p class="mr-1"><b>Autor:</b> {{ post?.author?.name || 'Unknown' }}</p>
                </div>
                <!-- Tags -->
                <div class="flex flex-wrap justify-left mt-4">
                    <TagBadge class="w-fit text-xs" v-for="tag in post.tags" :tag="tag" :key="tag.id"/>
                </div>
            </div>
            <div class="px-4 py-2 flex flex-col justify-center gap-2">
                <CustomButton class="w-full text-xs bg-blue-600 hover:blue-red-700 text-blue-100" title="Editar" />
                <form @submit.prevent="deletePost"> 
                    <CustomButton type="submit" class="w-full text-xs bg-red-600 hover:bg-red-700 text-red-100" title="Eliminar" />
                </form>
            </div>
        </div>
    </div>
</template>