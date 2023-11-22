<script setup>
import BaseDate from './BaseDate.vue';

    defineProps({
        date: String,
        author: Object
    })
</script>

<template>
    <div class="flex flex-row" >
        <img :src="author.image_url" alt="" class="w-24 h-24 object-cover mr-4" />
        <div class="my-0 text-sm">
            <p class="font-bold text-xs">Autor:</p>
            <p class="font-bold">{{ author.name }}</p>
            <BaseDate :timestamp="date" />
        </div>
    </div>
</template>