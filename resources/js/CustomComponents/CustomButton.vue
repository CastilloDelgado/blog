<script setup>
const props = defineProps({
    title: {
        type: String,
        default: "Title Undefined"
    },
    color: {
        type: String,
        default: 'primary'
    },
    action: {
        type: Function,
        default: () => console.log("Undefined function")
    },
    type:{
        type: String,
    }
})
</script>

<template>
    <button 
        class="px-3 py-1 transition"
        @click="action"
        :type="type"
    >
        {{  title  }}
    </button>
</template>