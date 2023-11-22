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
    <Link :href="`/posts/${post.id}`">
        <div class=" mb-6 transition h-full grid grid-cols-1 content-between bg-neutral-200 border-2 border-black" >
            <div class="flex flex-col lg:flex-row">
                <img :src="post.image_url" alt="" class="h-64 w-full object-cover">
                <div class="flex justify-center flex-col p-4">
                    <b class="font-serif text-lg text-center mb-3 text-black capitalize">{{ post.title }}</b>
                    <p class="text-sm text-justify mb-4 text-black">{{ post.excerpt }}</p>
                    <div class="font-sans text-xs text-black mb-2">
                        <div class="mr-1 flex">
                            <b class="mr-1">Creado: </b> 
                            <BaseDate :timestamp="post.created_at" />
                        </div>
                        <p class="mr-1"><b>Autor:</b> {{ post?.author?.name || 'Unknown' }}</p>
                    </div>
                  
                </div>
            </div>
            <div class="w-auto flex justify-center m-2">
                  <!-- Tags -->
                <div class="flex flex-wrap justify-left mt-2">
                    <TagBadge class="w-fit text-xs" v-for="tag in post.tags" :tag="tag" :key="tag.id"/>
                </div>
            </div>
        </div>
    </Link>
</template>