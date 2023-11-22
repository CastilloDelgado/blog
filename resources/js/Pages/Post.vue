<script setup>
import Layout from '@/BaseComponents/Layout.vue';
import TagBadge from '@/CustomComponents/TagBadge.vue';
import PostProfileBadge from '@/CustomComponents/PostProfileBadge.vue';
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import '@splidejs/vue-splide/css';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3'
import PostMainImage from '@/CustomComponents/PostMainImage.vue';
import BaseDate from '@/CustomComponents/BaseDate.vue';

defineProps({
    post: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <Layout>
        <Head :title="post.title" />
        <div class="bg-white pt-12 pb-8">
            <div class="bg-white px-2 md:px-0 container mx-auto">
                <!-- Post Layout -->
                <div class="px-6 md:px-12 lg:px-32 ">
                    <div class="flex md:mb-6">
                        <div class="hidden lg:flex lg:w-1/5"></div>
                        <div class="w-full lg:w-4/5 lg:pl-12 mb-4  justify-between flex flex-col md:flex-row">
                            <div class="mb-2">
                                <Link :href="route('home')">
                                    <p class="font-bold text-sm border-b border-b-transparent hover:border-black">{{ "< Regresar" }}</p>
                                </Link>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <!-- Tag -->
                                <TagBadge  v-for="tag in post.tags" :tag="tag" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row ">
                        <div class="lg:w-1/5 mb-8 flex flex-row lg:flex-col w-full">
                            <div class="w-1/2 lg:w-full">
                                <PostMainImage :image_url="post.image_url"  />
                            </div>
                            <div class="w-1/2 lg:w-full pl-6  lg:pl-0 self-end lg:self-top">
                                <PostProfileBadge :date="post.author.created_at"  :author="post.author"/>
                            </div>
                        </div>
                        <div class="lg:w-4/5 lg:pl-12">
                            <div class="mb-4">
                                <p class="font-serif text-4xl font-bold">{{ post?.title || "No title" }}</p>
                            </div>
                            <div class="mb-8 flex">
                                <p class="font-sans mr-2">{{ post.author.name }}, </p>
                                <BaseDate :timestamp="post.created_at " />
                            </div>

                            <div class="text-2xl text-justify mb-8">
                                {{ post.excerpt }}
                            </div>

                            <iframe v-if="post.video" class="w-full h-[60vh] mb-6" :src="post.video" /> 

                            <div v-for="paragraph in post.body.split('\n')" class="text-xl text-justify mb-8">
                                <p>{{ paragraph }}</p>
                            </div>

                            <div class="w-full flex justify-center bg-black mt-4 h-max-screen md:max-h-[70vh]"> 
                                <!-- Image Carousel (Create component when working) -->
                                <Splide :options="{ rewind: true }" aria-label="Concert images" class=" h-max-screen md:max-h-[60vh]">
                                    <SplideSlide v-for="image in post.images" class="h-max-screen md:max-h-[60vh] w-full flex justify-center">
                                        <img :src="image.image_url" alt="Sample 1" class="h-full object-contain">
                                    </SplideSlide>
                                </Splide>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>