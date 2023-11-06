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
        class="grid place-content-center text-light-200 mr-3 content-center hover:text-light-50"
        :class="{
            'font-bold border-b border-white text-light-50': selected
        }"

    >
        {{ option.title }}
    </Link>
</template>