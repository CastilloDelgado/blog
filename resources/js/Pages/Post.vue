<script setup>
    import Layout from '@/Components/Layout.vue';
    import TagBadge from '@/Components/TagBadge.vue';
    import PostProfileBadge from '@/Components/PostProfileBadge.vue';
    import Banner1 from '@/Components/Banner1.vue';
    import { Head } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3'
    import PostMainImage from '@/Components/PostMainImage.vue';
import BaseDate from '@/Components/BaseDate.vue';

    defineProps({
        post: Object
    })

</script>

<template>
    <Layout>
        <Head :title="post.title" />
        <div class="bg-gray-200">
            <div class="bg-white px-2 md:px-0 container mx-auto">
                <!-- Post Layout -->
                <div class="px-6 md:px-12 lg:px-32 mb-12">
                    <div class="flex md:mb-6">
                        <div class="hidden lg:flex lg:w-1/5"></div>
                        <div class="w-full lg:w-4/5 lg:pl-12 mb-4  justify-between flex flex-col md:flex-row">
                            <div class="mb-2">
                                <Link :href="route('home')">
                                    <p class="font-bold text-sm hover:underline">{{ "< Regresar" }}</p>
                                </Link>
                            </div>
                            <div class="flex flex-wrap">
                                <!-- Tag -->
                                <TagBadge  v-for="tag in post.tags" :tag="tag" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row ">
                        <div class="lg:w-1/5 mb-8 flex flex-row lg:flex-col w-full">
                            <div class="w-1/2 lg:w-full">
                                <PostMainImage :image_url="post.image_url" />
                            </div>
                            <div class="w-1/2 lg:w-full pl-6  lg:pl-0 self-end lg:self-top">
                                <PostProfileBadge :published_at="post.published_at"  :author="post.author"/>
                            </div>
                        </div>
                        <div class="lg:w-4/5 lg:pl-12">
                            <div class="mb-4">
                                <p class="font-serif text-4xl font-bold">{{ post?.title || "No title" }}</p>
                            </div>
                            <div class="mb-8 flex">
                                <p class="font-sans font-bold mr-2">{{ post.address }}</p>
                                <BaseDate :timestamp="post.concert_date " />
                            </div>

                            <div v-for="paragraph in post.paragraphs[0].text.split('\n')" class="text-xl text-justify mb-4">
                                <p>{{ paragraph }}</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
                                <img v-for="image in post.images" v-bind:src="image.image_url" alt="" class="border-2 border-black">
                            </div>
                        </div>
                    </div>
                </div>
                
                <Banner1 />
            </div>
        </div>
    </Layout>
</template>