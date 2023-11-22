<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Layout from '@/BaseComponents/Layout.vue';
import PostBadge from '@/CustomComponents/PostBadge.vue';
import SmallPostBadge from '@/CustomComponents/SmallPostBadge.vue';
import CustomButton from '@/CustomComponents/CustomButton.vue';

defineProps({
    posts: {
        type: Array,
        required: true
    }
})

</script>

<template>
    <Layout>
        <Head title="Posts" />
        <div class="bg-white w-full py-12">
            <div class="px-12">
                <div class="pb-3 border-black border-b-2">
                    <p class="text-black text-xl font-bold capitalize">Todos los reviews</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 pt-4 mb-4">   
                    <SmallPostBadge
                        v-for="(post, index) in posts" 
                        :key="post.id" 
                        :post="post" 
                    />
                </div>
            </div>
        </div>
    </Layout>
</template>