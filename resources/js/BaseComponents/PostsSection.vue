<script setup>
import LargePostBadge from '@/CustomComponents/LargePostBadge.vue';
import CustomButton from '@/CustomComponents/CustomButton.vue';
import SmallPostBadge from '@/CustomComponents/PostBadge.vue';
import { BACKGROUND_COLORS } from '@/constants';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import MediumPostBadge from '@/CustomComponents/MediumPostBadge.vue';

const backgroundColors = ref([...BACKGROUND_COLORS])

defineProps({
    posts: {
        type: Array,
        required: true
    },
    title: {
        type: String,
        required: true
    },
    description: {
        type: String,
        required: true
    },
})

</script>

<template>
    <div class="bg-white w-full">
        <div class="px-12">
            <div class="pb-3 border-black border-b-2">
                <p class="text-black text-xl font-bold capitalize" v-if="title">{{ title }}</p>
            </div>
            <div class="grid grid-cols-4 gap-4 pt-4">   
                <LargePostBadge v-if="posts[0]" :post="posts[0]" />
                <MediumPostBadge v-if="posts[1]" :post="posts[1]" />
                <SmallPostBadge
                    v-for="post in posts" 
                    :key="post.id" 
                    :post="post" 
                />
            </div>
            <div class="flex justify-center lg:mb-2">
                <Link href="/posts">    
                    <CustomButton title="Click aquí para ver más posts" class="font-bold bg-primary-600 hover:bg-primary-800 text-primary-100 text-sm" />
                </Link>
            </div>
        </div>
    </div>
</template>