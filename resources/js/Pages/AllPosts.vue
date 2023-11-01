<script setup>
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
        <section class="px-12 pb-12">
            <div class="mb-4 pb-2 border-b-2 border-black" >
                <b class="text-xl">Todos los Post</b>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center lg:flex-row w-100 gab-4" >
                <PostBadge v-for="post in posts" :post="post" />
            </div>
        </section>
    </Layout>
</template>