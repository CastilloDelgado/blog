<script setup>
import { Link } from '@inertiajs/vue3'
import BaseDate from './BaseDate.vue';
import TagBadge from './TagBadge.vue';

defineProps({
    post: Object,
})
</script>

<template>
    <Link :href="`/posts/${post.id}`" class="col-span-3 w-full">
        <div class="w-full transition h-full grid grid-cols-1 content-between bg-neutral-200 border-2 border-black h-full" >
            <div class="w-full flex flex-row h-full">
                <img :src="post.image_url" alt="" class="h-full w-3/6 object-cover">
                <div class="flex justify-center flex-col px-6 py-3 w-3/6">
                    <div class="h-full">
                        <p class="font-serif text-2xl text-center font-bold text-black capitalize mb-6">{{ post.title }}</p>
                        <p class="text-lg text-justify mb-4 text-black">{{ post.excerpt }}</p>
                    </div>
                    <div class="">
                        <div class="font-sans text-black mb-2">
                            <div class="mr-1 flex">
                                <b class="mr-1">Creado: </b> 
                                <BaseDate :timestamp="post.created_at" />
                            </div>
                            <p class="mr-1"><b>Autor:</b> {{ post?.author?.name || 'Unknown' }}</p>
                        </div>
                        <div class="flex gap-1 justify-center flex-wrap mt-2">
                            <TagBadge class="w-fit" v-for="tag in post.tags" :tag="tag" :key="tag.id"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Link>
</template>