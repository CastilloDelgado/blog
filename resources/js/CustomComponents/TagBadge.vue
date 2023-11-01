<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    tag: Object
})
</script>

<template>
    <Link :href="`/tags/${tag.slug}`">
        <div class="pb-[2px] mr-1 bg-primary-600  px-2 hover:bg-primary-700 text-primary-100">
            <p class=" text-xs md:text-sm capitalize " >{{ tag.name }}</p> 
        </div>
    </Link>
</template>