<script setup>
defineProps({
    image: {
        type: Object,
        required: false
    }
})
</script>

<template>    
    <div class="bg-neutral-100 w-36 h-36">
        <img v-if="image" :src="image" alt="" class=" w-36 h-36 object-contain">
    </div>
</template>