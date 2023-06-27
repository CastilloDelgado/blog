<script setup>
    defineProps({
        image_url: String
    })
</script>

<template>
    <img :src="image_url" alt="" class="mb-6 border-2 border-black shadow-[-8px_8px_0px_0px_rgba(0,0,0,1)] ">
</template> 