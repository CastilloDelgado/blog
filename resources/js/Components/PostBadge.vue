<script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps({
        post: Object,
    })
</script>

<template>
    <div class="w-64 mb-6 bg-gray-300 shadow-[-10px_10px_0px_0px_rgba(0,0,0,1)] border-2 border-black " >
        <Link :href="route('posts.show', post)">
            <img :src="post.image_url" alt="" class="w-64 h-64 object-cover border-b-2 border-black">
            <div class="p-4 flex justify-center flex-col">
                <b class="font-serif text-center mb-3">{{ post.title }}</b>
                <div class="font-sans">
                    <p class="text-sm mr-1"><b>Lugar</b> {{ post.address }}</p>
                    <p class="text-sm mr-1"><b>Fecha</b> {{ post.concert_date }} </p>
                    <p class="text-sm mr-1"><b>Autor</b> {{ post.author.name }}</p>
                </div>
            </div>
        </Link>
    </div>
</template>