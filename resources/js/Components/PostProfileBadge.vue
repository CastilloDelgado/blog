<script setup>
    defineProps({
        published_at: String,
        author: Object
    })
</script>

<template>
    <div class="flex flex-row" >
        <img :src="author.image_url" alt="" class="w-24 h-24 object-cover mr-4 shadow-[-8px_8px_0px_0px_rgba(0,0,0,1)] border-2 border-black grayscale" />
        <div class="my-0 text-sm">
            <p class="font-bold">{{ author.name }}</p>
            <p>{{ published_at }}</p>
        </div>
    </div>
</template>