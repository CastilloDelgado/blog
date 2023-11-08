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

// ASSETS
import carouselImage1 from "../../images/carousel/1.jpg";
import carouselImage2 from "../../images/carousel/2.jpg";
import carouselImage3 from "../../images/carousel/3.jpg";
import carouselImage4 from "../../images/carousel/4.jpg";
import carouselImage5 from "../../images/carousel/5.jpg";
import carouselImage6 from "../../images/carousel/6.jpg";
import carouselImage7 from "../../images/carousel/7.jpg";
import carouselImage8 from "../../images/carousel/8.jpg";
import productsImage1 from "../../images/products/1.jpg";
import productsImage2 from "../../images/products/2.jpg";
import productsImage3 from "../../images/products/3.jpg";
import video from "../../videos/presentation.mp4";

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
        
        <CompanyInfo
            description="Es la fusión de nuestros nombres, nuestra amistad, el compartir cosas en común y sobre todo el llamado al servicio hacia los demás. Este proyecto nace desde el amor de transmitir nuestras experiencias del camino espiritual que ambas hemos transitado y el aprendizaje que hemos adquirido a través del tiempo nos es grato compartirlo."
            :images="[
                carouselImage1,
                carouselImage2,
                carouselImage3,
                carouselImage4,
                carouselImage5,
                carouselImage6,
                carouselImage7,
                carouselImage8,
            ]"
        />
        
        <PostsSection :posts="latestPosts"/>

        <VideoPresentation :video="video" />

        <CompanyProducts
            title="Nuestros Servicios"
            description="La siembra de proyecto es una ceremonia holística donde se le da nacimiento al emprendimiento de la persona, otorgándole al proyecto la importancia espiritual a través de los elementos de nuestra madre tierra y dándole un corazón con su energía particular y necesaria."
            :products="[
                {
                    id: 1,
                    title: 'Despertar de conciencia',
                    description:
                        'El viaje del ser humano es el despertar de conciencia, el cual nos puede llegar a temprana edad o incluso antes de trasmutar.',
                    image: productsImage1,
                },
                {
                    id: 2,
                    title: 'Despertar espiritual',
                    description:
                        'Tú puedes estar muerte o con experiencia de medicina sagrada, en despierto en consciencia y no en espíritu o al un parto, cuando te rompen el corazón.',
                    image: productsImage2,
                },
                {
                    id: 3,
                    title: 'Servicios',
                    description:
                        'Mujeres medicina, talleres, Ceremonias particulares, Escuela mística, Meditaciones guiadas, etc...',
                    image: productsImage3,
                },
            ]"
        />

        <ContactForm />
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
