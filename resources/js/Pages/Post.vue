<script setup>
    import Layout from '@/Components/Layout.vue';
    import TagBadge from '@/Components/TagBadge.vue';
    import PostProfileBadge from '@/Components/PostProfileBadge.vue';
    import { Head } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3'
import PostMainImage from '@/Components/PostMainImage.vue';

    defineProps({
        post: Object
    })
</script>

<template>
    <Layout>
        <Head :title="post.title" />
        <div class="bg-gray-200">
            <div class="bg-white container mx-auto py-4">
                <!-- Post Layout -->
                <div class="pt-12 px-32 mb-12">
                    <div class="flex mb-6">
                        <div class="w-1/5"></div>
                        <div class="w-4/5 pl-12 mb-4 flex justify-between">
                            <div>
                                <Link :href="route('home')">
                                    <p class="font-bold text-sm hover:underline">{{ "< Regresar" }}</p>
                                </Link>
                            </div>
                            <div class="flex">
                                <!-- Tag -->
                                <TagBadge  v-for="tag in post.tags" :tag="tag" />
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-1/5">
                            <PostMainImage :image_url="post.image_url" />
                            <PostProfileBadge :published_at="post.published_at"  :author="post.author"/>
                        </div>
                        <div class="w-4/5 pl-12">
                            <div class="mb-4">
                                <p class="font-serif text-4xl font-bold">{{ post?.title || "No title" }}</p>
                            </div>
                            <div class="mb-8">
                                <p class="font-sans">{{ post.address }}</p>
                            </div>

                            <div v-for="paragraph in post.paragraphs" class="text-xl text-justify mb-4">
                                <p>{{ paragraph.text }}</p>
                            </div>

                            <div class="grid grid-cols-3 gap-4 mb-4">
                                <img v-for="image in post.images" v-bind:src="image.image_url" alt="" class="border-2 border-black">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Banner 2 -->
                <section class="flex mb-8">
                    <div class="w-2/5 bg-black border-r-4 border-white flex justify-center flex-col px-16">
                        <p class="font-serif text-4xl text-white text-center mb-4">¿Tienes algo que contar?</p>
                        <p class="font-sans text-xl text-white text-center mb-12">Crea tu cuenta y comienza a escribir reviews de los conciertos a los que has asistido.</p>
                        <div class="flex justify-center">
                            <button type="button" class="border-0 bg-gray-300 border-l-4 border-white focus:outline-none mr-2 font-bold px-6 py-2 w-64">Crea tu cuenta</button>
                        </div>
                    </div>
                    <div class="w-3/5 object-fill">
                        <img src="../../images/banner-3.jpg" alt="" class="grayscale">
                    </div>
                </section>
            </div>
        </div>
    </Layout>
</template>