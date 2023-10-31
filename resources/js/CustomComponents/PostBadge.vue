<script setup>
import { Link } from '@inertiajs/vue3'
import TagBadge from './TagBadge.vue';
import BaseDate from './BaseDate.vue';
    defineProps({
        post: Object,
    })
</script>

<template>
    <div class="w-64 mb-6 bg-gray-300 shadow-[-10px_10px_0px_0px_rgba(0,0,0,1)] border-2 border-black" >
        <Link :href="route('posts.show', post)">
            <img :src="post.image_url" alt="" class="w-64 h-64 object-cover border-b-2 border-black">
            <div class="p-4 flex justify-center flex-col">
                <b class="font-serif text-center mb-3">{{ post.title }}</b>
                <div class="font-sans">
                    <p class="text-sm mr-1"><b>Banda</b> {{ post.band }}</p>
                    <p class="text-sm mr-1"><b>Lugar</b> {{ post.address }}</p>
                    <div class="text-sm mr-1 flex">
                        <b class="mr-1">Fecha: </b> 
                        <BaseDate :timestamp="post.concert_date" />
                    </div>
                    <p class="text-sm mr-1"><b>Autor</b> {{ post?.author?.name || 'Unknown' }}</p>
                </div>
                <!-- Tags -->
                <div class="flex flex-wrap justify-left mt-4">
                    <TagBadge class="w-fit text-xs" v-for="tag in post.tags" :tag="tag" :key="tag.id"/>
                </div>
            </div>
        </Link>
    </div>
</template>