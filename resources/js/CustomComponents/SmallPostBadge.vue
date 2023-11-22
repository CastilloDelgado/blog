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
    <Link :href="`/posts/${post.id}`" class="max-w-80">
        <div class="transition h-full grid grid-cols-1 content-between bg-neutral-200 border-2 border-black h-full" >
            <div class="flex flex-col h-full">
                <img :src="post.image_url" alt="" class="h-64 w-full object-cover">
            </div>
            <div class="flex p-3 h-64 grid grid-cols-1 content-between">
                <div class="h-full">
                    <p class="font-serif text mb-2 text-center font-bold text-black capitalize">{{ post.title }}</p>
                    <p class="text-justify text-sm mb-4 text-black">{{ post.excerpt }}</p>
                </div>
                <div class="">
                    <div class="font-sans text-xs text-black mb-2">
                        <div class="mr-1 flex">
                            <b class="mr-1">Creado: </b> 
                            <BaseDate :timestamp="post.created_at" />
                        </div>
                        <p class="mr-1"><b>Autor:</b> {{ post?.author?.name || 'Unknown' }}</p>
                    </div>
                    <div class="flex gap-1 justify-center flex-wrap mt-2">
                        <TagBadge class="w-fit text-xs" v-for="tag in post.tags" :tag="tag" :key="tag.id"/>
                    </div>
                </div>
            </div>
        </div>
    </Link>
</template>