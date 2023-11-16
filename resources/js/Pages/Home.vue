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
        
        <NewsletterBanner />

        <CompanyProducts
            title="Nuestros Servicios"
            description="YuKal es una comunidad donde tendrás el espacio para aprender con nuestros talleres, cursos, ceremonias, donde podrás exponer tus intereses, tus dudas y experiencias. YuKal es un espacio para retroalimentar el espíritu para así poder llegar a tus objetivos a través de ti mismo."
            :products="[
                {
                    id: 1,
                    title: 'Talleres',
                    bullets: [
                        'Mujer Medicina ',
                        'Circulo de mujeres (1 vez al mes con temas seleccionados) DISPONIBLE',
                        'Útero divino / ceremonia',
                        'Introducción a la meditación',
                        'Crea tu primer habito en consciencia en 21 días',
                    ],
                    image: productsImage1,
                    detail: {
                        description: '',
                        bullets: [
                            {
                                title: 'Mujer Medicina ',
                                description: ''
                            },
                            {
                                title: 'Circulo de mujeres (1 vez al mes con temas seleccionados) DISPONIBLE',
                                description: ''
                            },
                            {
                                title: 'Útero divino / ceremonia',
                                description: ''
                            },
                            {
                                title: 'Introducción a la meditación',
                                description: ''
                            },
                            {
                                title: 'Crea tu primer habito en consciencia en 21 días',
                                description: ''
                            },
                        ]
                    }
                },
                {
                    id: 2,
                    title: 'Ceremonias',
                    bullets: [
                        'Ceremonia de cacao',
                        'Aniversario de vida',
                        'Sembrando mi proyecto',
                        'Transición a la juventud',
                        'Cereminia del útero'
                    ],
                    image: productsImage2,
                    detail: {
                        description: '',
                        bullets: [
                            {
                                title:'Ceremonia de Cacao',
                                description: 'Viaja a través de la meditación en esta hermosa ceremonia que Yukal ofrece para ti, concentrándote en el presente y comienza a trabajar en tu mente, cuerpo, alma y emociones. El cacao es uno de los facilitadores, maestros y guías más poderosos. Apertura nuestro chacra corazón hacía la transformación a través del amor propio, nos ayuda a experimentar de manera segura el despertar de consciencia y la introspección intensionándolo en cada toma, conectando contigo mismo, nos ayuda a liberar patrones, bloqueos y creencias. Nos conecta con el Yo Superior, con la intuición. '
                            },
                            {
                                title:'Aniversario de vida',
                                description: 'La Ceremonia de Aniversario de vida, es un espacio intimo donde se reúnen la persona que cumple años con sus allegados y a través de rituales y dinámicas cuidadosamente diseñadas y personalizada se conmemora al festejado valorando lo importante que es celebrar conscientemente la vida.'
                            },
                            {
                                title:'Sembrando mi proyecto',
                                description: 'La siembra de marca es una ceremonia holística donde se le da nacimiento al emprendimiento de la persona, otorgándole al proyecto la importancia espiritual a través de los elementos de nuestra madre tierra y dándole un corazón con su energía particular y necesaria. En el sentido más básico, se trata de conectar con lo que es importante para la persona que emprende de manera que eleve y enriquezca su espíritu y el del proyecto con una entidad propia.'
                            },
                        ]
                    }
                },
                
                {
                    id: 3,
                    title: 'Escuela',
                    description:
                        'Disponible 2024',
                    image: productsImage3,
                    detail: {
                        description: '¡Muy pronto más información de nuestra escuela!',
                        bullets: []
                    }
                },
            ]"
        />

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
