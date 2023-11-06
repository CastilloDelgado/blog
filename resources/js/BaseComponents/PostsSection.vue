<script setup>
import CustomButton from '@/CustomComponents/CustomButton.vue';
import PostBadge from '@/CustomComponents/PostBadge.vue';
import { BACKGROUND_COLORS } from '@/constants';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const backgroundColors = ref([...BACKGROUND_COLORS])

defineProps({
    posts: {
        type: Array,
        required: true
    }
})

</script>

<template>
    <div class="bg-primary-50">
        <div class="container mx-auto py-6 lg:py-12">
            <div class="text-center mb-12">
                <p class="text-primary-600 text-4xl font-bold mb-6 capitalize">Nuestros post más nuevos</p>
                <p class="text-lg text-primary-800 mx-4 lg:mx-36 text-justify lg:text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sed voluptatibus laboriosam fuga illo pariatur suscipit rem iusto dicta voluptates provident sunt ducimus, hic reiciendis, totam nesciunt, velit libero et.</p>
            </div>
            <div class="flex justify-center gap-2 lg:gap-8 flex-wrap mb-8">
                <PostBadge v-for="(post, index) in posts" class="bg-primary-200" :key="post.id" :post="post" />
            </div>
            <div class="flex justify-center lg:mb-2">
                <Link href="/posts">    
                    <CustomButton title="Click aquí para ver más posts" class="font-bold bg-primary-600 hover:bg-primary-800 text-primary-100" />
                </Link>
            </div>
        </div>
    </div>
</template>