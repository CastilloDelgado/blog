<script setup>
import CustomButton from '@/CustomComponents/CustomButton.vue';
import SmallPostBadge from '@/CustomComponents/PostBadge.vue';
import { BACKGROUND_COLORS } from '@/constants';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

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
            <div class="grid grid-cols-4 gap-4">
                <div class="..."></div>
                <SmallPostBadge 
                    v-for="(post, index) in posts" 
                    :key="post.id" 
                    :post="post" 
                    :class="{
                        'col-span-4': index === 0,
                        'col-span-2': index === 1 ,
                        'col-span-2': index === 2 ,
                        'col-span-1': index >= 3 ,
                    }"
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