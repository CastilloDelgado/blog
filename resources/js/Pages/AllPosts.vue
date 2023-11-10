<script setup>
import { Head } from '@inertiajs/vue3';
import Layout from '@/BaseComponents/Layout.vue';
import PostBadge from '@/CustomComponents/PostBadge.vue';

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
        <div class="container mx-auto pt-36 pb-12">
            <div class="mb-4 pb-2 border-b-2 px-2 border-primary-800 mb-6" >
                <b class="text-xl text-primary-800">Todos nuestros posts</b>
            </div>
            <div class="flex justify-center gap-2 lg:gap-8 flex-wrap mb-8" >
                <PostBadge v-if="posts.length > 0" v-for="post in posts" :key="post.id" :post="post" class="bg-primary-200"/>
                <div v-else>
                    <p>Aún no hay posts publicados :(</p>
                </div>
            </div>
        </div>
    </Layout>
</template>