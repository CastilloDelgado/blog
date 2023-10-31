<script setup>
import PostBadge from '@/CustomComponents/PostBadge.vue';


defineProps({
    posts: {
        type: Array,
        required: true
    }
})

</script>

<template>
    <div class="bg-primary-100">
        <div class="container mx-auto py-12">
            <div class="text-center mb-6">
                <p class="text-primary-600 text-4xl font-bold mb-6">Nuestro Blog</p>
                <p class="text-lg text-primary-800 mx-36">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed voluptatibus laboriosam fuga illo pariatur suscipit rem iusto dicta voluptates provident sunt ducimus, hic reiciendis, totam nesciunt, velit libero et.</p>
            </div>
            <div class="flex justify-center gap-8">
                <PostBadge v-for="post in posts" :key="post.id" :post="post" />
            </div>
        </div>
    </div>
</template>