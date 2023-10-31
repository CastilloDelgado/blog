<script setup> 
defineProps({
    option: {
        type: Object,
        required: true,
    }
})
</script>

<template>
    <a :href="option.link" 
        class="grid place-content-center text-light-200 mr-3 content-center hover:text-light-50"
        :class="{
            'font-bold border-b border-white text-light-50': option.selected
        }"
    >
        {{ option.title }}
    </a>
</template>