<script setup>
import { Link, router } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    option: {
        type: Object,
        required: true,
    }
})

const selected = computed(() => router.page.url === props.option.link)

</script>

<template>
    <Link :href="option.link" 
        class="grid place-content-center text-black mr-3 content-center hover:-bottom-2"
        :class="{
            'font-bold border-b border-black': selected
        }"

    >   
        {{ option.title }}
    </Link>
</template>