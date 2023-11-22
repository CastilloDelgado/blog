<script setup>
import LargePostBadge from '@/CustomComponents/LargePostBadge.vue';
import CustomButton from '@/CustomComponents/CustomButton.vue';
import SmallPostBadge from '@/CustomComponents/SmallPostBadge.vue';
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
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 pt-4 mb-4">   
                <LargePostBadge class="hidden lg:block" v-if="posts[0]" :post="posts[0]" />
                <MediumPostBadge class="hidden lg:block" v-if="posts[1]" :post="posts[1]" />
                <MediumPostBadge class="hidden md:block lg:hidden" v-if="posts[0]" :post="posts[0]" />
                <SmallPostBadge
                    v-for="(post, index) in posts" 
                    :key="post.id" 
                    :post="post" 
                    :class="{
                        'block md:hidden': index === 0,
                        'hidden md:block lg:hidden': index === 1
                    }"
                />
            </div>
            <div class="flex justify-center mb-6">
                <Link href="/posts" class="">    
                    <CustomButton title="Más reviews" class="bg-black hover:bg-white hover:text-black border-2 border-black text-primary-100" />
                </Link>
            </div>
        </div>
    </div>
</template>