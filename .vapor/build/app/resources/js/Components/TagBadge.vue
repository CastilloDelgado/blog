<script setup>
    defineProps({
        tag: Object
    })
</script>

<template>
    <div class="ml-3 flex-wrap md:flex shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-2 hover:bg-black hover:text-white hover:border-l-white hover:border-b-white ">
        <p class=" text-xs md:text-sm capitalize" >{{ tag.name }}</p> 
    </div>
</template>