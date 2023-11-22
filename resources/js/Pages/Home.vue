<script setup>
// COMPONENTS
import { Head } from "@inertiajs/vue3";
import Layout from "@/BaseComponents/Layout.vue";
import MainMessage from "@/CustomComponents/MainMessage.vue";
import ContactForm from "@/CustomComponents/ContactForm.vue";
import PostsSection from "@/BaseComponents/PostsSection.vue"

import NewsletterBanner from "@/CustomComponents/NewsletterBanner.vue";

defineProps({
    latestPosts: {
        type: Array,
        required: true
    },
    formUrl: {
        type: String,
    }
})
</script>

<template>
    <Layout>
        <Head title="Inicio" />

        <MainMessage />
        
        <PostsSection title="Reviews más recientes"  description="Date una vuelta por nuestros últimos posts de nuestro blog." :posts="latestPosts" />
        
        <NewsletterBanner />

        <ContactForm message="Completa el formulario para enviarnos tus dudas y poder contactarte en breve." :url="formUrl"/>
    </Layout>
</template>
