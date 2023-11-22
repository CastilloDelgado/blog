<script setup>
// COMPONENTS
import { Head } from "@inertiajs/vue3";
// import PostBadge from '@/CustomComponents/PostBadge.vue';
import Layout from "@/BaseComponents/Layout.vue";
import MainMessage from "@/CustomComponents/MainMessage.vue";
import CompanyInfo from "@/CustomComponents/CompanyInfo.vue";
import VideoPresentation from "@/CustomComponents/VideoPresentation.vue";
import CompanyProducts from "@/CustomComponents/CompanyProducts.vue";
import ContactForm from "@/CustomComponents/ContactForm.vue";
import PostsSection from "@/BaseComponents/PostsSection.vue"

import video from "../../videos/presentation.mp4";
import poster from "../../images/video-cover.jpeg"
import NewsletterBanner from "@/CustomComponents/NewsletterBanner.vue";

// import Header from '@/CustomComponents/Header.vue';
// import Banner1 from '@/CustomComponents/Banner1.vue';
// import Banner2 from '@/CustomComponents/Banner2.vue';
// import HighlightsSection from '@/CustomComponents/HighlightsSection.vue';

defineProps({
    // highlightPosts: Array,
    // bestPosts: Array,
    // randomPosts: Array,
    latestPosts: {
        type: Array,
        required: true
    },
    // tags: {
    //     type: Array,
    //     required: true
    // }
})
</script>

<template>
    <Layout>
        <Head title="Inicio" />
        <!-- Header -->
        <MainMessage />
        
        <PostsSection title="Reviews más recientes"  description="Date una vuelta por nuestros últimos posts de nuestro blog." :posts="latestPosts" />
        
        <NewsletterBanner />

        <ContactForm message="Completa el formulario para enviarnos tus dudas y poder contactarte en breve."/>
        <!-- <Header :tags="tags" /> -->
        <!-- Highlights Section -->
        <!-- <HighlightsSection :posts="highlightPosts" /> -->
        <!-- Section - The best -->
        <!-- <section class="px-12 pb-12">
            <div class="mb-4 pb-2 border-b-2 border-black" >
                <b class="text-xl">Los mejores reviews</b>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center lg:flex-row w-100 gab-4" >
                <PostBadge v-for="post in bestPosts" :post="post" />
            </div>
        </section> -->
        <!-- Banner 1 -->
        <!-- <Banner1 /> -->
        <!-- Section - Random reviews -->
        <!-- <section class="px-12 pb-12">
            <div class="mb-4 pb-2 border-b-2 border-black" >
                <b class="text-xl">Reviews random para ti</b>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center lg:flex-row w-100 gab-4" >
                <PostBadge v-for="post in randomPosts" :post="post" />
            </div>
        </section> -->
        <!-- Banner 2 -->
        <!-- <Banner2 /> -->
        <!-- Section - Reviews by date -->
        <!-- <section class="px-12 pb-12">
            <div class="mb-4 pb-2 border-b-2 border-black" >
                <b class="text-xl">Reviews por fecha</b>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-items-center lg:flex-row w-100 gab-4" >
                <PostBadge v-for="post in latestPosts" :post="post" />
            </div>
        </section> -->
    </Layout>
</template>
