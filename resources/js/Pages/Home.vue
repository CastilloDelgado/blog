<script setup>
    import { Head } from '@inertiajs/vue3';
    import PostBadge from '@/Components/PostBadge.vue';
    import Layout from '@/Components/Layout.vue';
    import Header from '@/Components/Header.vue';
    import Banner1 from '@/Components/Banner1.vue';
    import Banner2 from '@/Components/Banner2.vue';
import HighlightsSection from '@/Components/HighlightsSection.vue';

    defineProps({
        highlightPosts: Array,
        bestPosts: Array,
        randomPosts: Array,
        latestPosts: Array,
        tags: {
            type: Array,
            required: true
        }
    })
</script>

<template>
    <Layout>
        <Head title="Home" />
        <div class="bg-gray-200">
            <div class="bg-white py-4 px-2 md:px-0 container mx-auto">
                <!-- Header -->
                <Header :tags="tags" />
                <!-- Highlights Section -->
                <HighlightsSection :posts="highlightPosts" />
                <!-- Section - The best -->
                <section class="px-12 pb-12">
                    <div class="mb-4 pb-2 border-b-2 border-black" >
                        <b class="text-xl">Los mejores reviews</b>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center lg:flex-row w-100 gab-4" >
                        <PostBadge v-for="post in bestPosts" :post="post" />
                    </div>
                </section>
                <!-- Banner 1 -->
               <Banner1 />
                <!-- Section - Random reviews -->
                <section class="px-12 pb-12">
                    <div class="mb-4 pb-2 border-b-2 border-black" >
                        <b class="text-xl">Reviews random para ti</b>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center lg:flex-row w-100 gab-4" >
                        <PostBadge v-for="post in randomPosts" :post="post" />
                    </div>
                </section>
                <!-- Banner 2 -->
                <Banner2 />
                <!-- Section - Reviews by date -->
                <section class="px-12 pb-12">
                    <div class="mb-4 pb-2 border-b-2 border-black" >
                        <b class="text-xl">Reviews por fecha</b>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center lg:flex-row w-100 gab-4" >
                        <PostBadge v-for="post in latestPosts" :post="post" />
                    </div>
                </section>
            </div>
        </div>
    </Layout>
</template>