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
import carouselImage3 from "../../images/carousel/3.jpg";
import carouselImage4 from "../../images/carousel/4.jpg";
import carouselImage5 from "../../images/carousel/5.jpg";
import carouselImage6 from "../../images/carousel/6.jpg";
import carouselImage8 from "../../images/carousel/8.jpg";
import productsImage1 from "../../images/products/1.jpg";
import productsImage2 from "../../images/products/2.jpg";
import productsImage3 from "../../images/products/3.jpg";

import video from "../../videos/presentation.mp4";
import poster from "../../images/video-cover.jpeg"

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
            description="YuKal nace como ese llamado a compartir la experiencia que han tenido dos mujeres a través de los años, en su búsqueda del despertar de la conciencia, de la sanación, el entendimiento del existir, los propósitos, aprendizajes de la vida y el recorrer muchos caminos que las llevaron a converger en este hermoso proyecto al que le han puesto todo el corazón, han fusionado sus nombres para darle vida a YuKal y poner toda su esencia en ello."
            :images="[
                carouselImage1,
                carouselImage3,
                carouselImage4,
                carouselImage5,
                carouselImage6,
                carouselImage8,
            ]"
        />
        
        <PostsSection title="Nuestros últimos posts!"  description="Date una vuelta por nuestros últimos posts de nuestro blog." :posts="latestPosts" />

        <VideoPresentation 
            :video="video" 
            :poster="poster" 
            title="Despertar de la conciencia" 
            description="YuKal tiene una visión clara que queremos compartir contigo, donde te acompañaremos de la mano en el rediseño del camino de vida que has venido a transitar."
        />

        <CompanyProducts
            title="Nuestros Servicios"
            description="YuKal es una comunidad donde tendrás el espacio para aprender con nuestros talleres, cursos, ceremonias, donde podrás exponer tus intereses, tus dudas y experiencias. YuKal es un espacio para retroalimentar el espíritu para así poder llegar a tus objetivos a través de ti mismo."
            :products="[
                {
                    id: 1,
                    title: 'Talleres',
                    bullets: [
                        'Ceremonia de cacao',
                        'Aniversario de vida',
                        'Sembrando mi proyecto',
                        'Transición a la juventud',
                        'Cereminia del útero'
                    ],
                    image: productsImage1,
                },
                {
                    id: 2,
                    title: 'Ceremonias',
                    bullets: [
                        'Mujer Medicina ',
                        'Circulo de mujeres (1 vez al mes con temas seleccionados) DISPONIBLE',
                        'Útero divino / ceremonia',
                        'Introducción a la meditación',
                        'Crea tu primer habito en consciencia en 21 días',
                    ],
                    image: productsImage2,
                },
                {
                    id: 3,
                    title: 'Escuela',
                    description:
                        'Disponible 2024',
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
