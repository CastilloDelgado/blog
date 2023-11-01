<script setup>
    defineProps({
        image_url: String
    })
</script>

<template>
    <img :src="image_url" alt="" class="mb-2 rounded">
</template> 