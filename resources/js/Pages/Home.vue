<script setup>
    import { Head } from '@inertiajs/vue3';
    import PostBadge from '@/Components/PostBadge.vue';
    import Layout from '@/Components/Layout.vue';

    defineProps({
        bestPosts: Array,
        randomPosts: Array,
        latestPosts: Array,
    })
</script>

<template>
    <Layout>
        <Head title="Home" />
        <div class="bg-gray-200">
            <div class="bg-white container mx-auto py-4">
                <!-- Title -->
                <section class="flex justify-center flex-col py-12">
                    <div class="flex justify-center mb-8">
                        <p class="font-serif font-bold text-5xl">Life & Live Music</p>
                        <p class="font-sans ml-2 text-2xl">[blog]</p>
                    </div>
                    <div class="flex justify-center mb-12">
                        <div class="w-1/2">
                            <p class="text-3xl text-center">
                                Fotos <b>horribles</b> y buenas <b>historias</b> de momentos <b>innolvidables</b>.
                            </p>
                        </div>
                    </div>
                    <div>
                        <p class="text-center">
                            Utiliza los filtros para buscar un review de tu interés.
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <form action="#" class="mt-4" >
                            <select name="" id="" class="border-0 bg-gray-200 border-l-4 border-black focus:outline-none mr-2">
                                <option value="">Selecciona un genero</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                            <input type="text" class="border-0 bg-gray-200 border-l-4 border-black placeholder-black"  placeholder="Buscar por banda">
                        </form>
                    </div>
                </section>
                <!-- Section - The best -->
                <section class="px-12 pb-12">
                    <div class="mb-4 pb-2 border-b-2 border-black" >
                        <b class="text-xl">Los mejores reviews</b>
                    </div>
                    <div class="flex justify-around">
                        <PostBadge v-for="post in bestPosts" :post="post" />
                    </div>
                </section>
                <!-- Banner 1 -->
                <section class="flex mb-8">
                    <div class="w-3/5 object-fill">
                        <img src="../../images/banner-1.jpg" alt="" class="grayscale">
                    </div>
                    <div class="w-2/5 bg-black border-l-4 border-white flex justify-center flex-col px-16">
                        <p class="font-serif text-4xl text-white text-center mb-4">¿Tienes algo que contar?</p>
                        <p class="font-sans text-xl text-white text-center mb-12">Crea tu cuenta y comienza a escribir reviews de los conciertos a los que has asistido.</p>
                        <div class="flex justify-center">
                            <button type="button" class="border-0 bg-gray-300 border-l-4 border-white focus:outline-none mr-2 font-bold px-6 py-2 w-64">Crea tu cuenta</button>
                        </div>
                    </div>
                </section>
                <!-- Section - Random reviews -->
                <section class="px-12 pb-12">
                    <div class="mb-4 pb-2 border-b-2 border-black" >
                        <b class="text-xl">Reviews random para ti</b>
                    </div>
                    <div class="flex justify-around">
                        <PostBadge v-for="post in randomPosts" :post="post" />
                    </div>
                </section>
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
                <!-- Section - Reviews by date -->
                <section class="px-12 pb-12">
                    <div class="mb-4 pb-2 border-b-2 border-black" >
                        <b class="text-xl">Reviews por fecha</b>
                    </div>
                    <div class="flex justify-around">
                        <PostBadge v-for="post in latestPosts" :post="post" />
                    </div>
                </section>
            </div>
        </div>
    </Layout>
</template>