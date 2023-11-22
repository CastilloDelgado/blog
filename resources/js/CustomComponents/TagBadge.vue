<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    tag: Object
})
</script>

<template>
    <Link :href="`/tags/${tag.slug}`">
        <div class="mr-1 bg-black  px-2 hover:bg-white text-white hover:bg-black border-2 border-black hover:text-black">
            <p class="text-xs capitalize " >{{ tag.name }}</p> 
        </div>
    </Link>
</template>