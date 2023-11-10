<script setup>
import { Head } from '@inertiajs/vue3';
import AdminLayout from '@/BaseComponents/AdminLayout.vue';
import PostTableRow from '@/CustomComponents/PostTableRow.vue';

defineProps({
    posts: {
        type: Array,
        required: true
    }
})

</script>

<template>
    <AdminLayout>
        <Head title="Posts" />
        <div class="container mx-auto">
            <div class="mb-4 pb-2 border-b-2 px-2 border-primary-400 mb-6" >
                <b class="text-xl text-primary-600">Todos nuestros posts</b>
            </div>
            <div class="flex justify-center gap-2 flex-wrap mb-8" >
                <PostTableRow v-if="posts.length > 0" v-for="post in posts" :key="post.id" :post="post" class="bg-primary-200"/>
                <div v-else>
                    <p>Aún no hay posts publicados :(</p>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>