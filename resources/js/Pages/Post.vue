<script setup>

    defineProps({
        post: Object
    })
</script>

<template>
    <div class="bg-gray-200">
        <section class="bg-white">
            <nav class="flex justify-between px-6 py-4 border-b-4 border-black">
                <div>
                    <a class="flex" href="#">
                        <p class="font-serif font-bold text-3xl">Life & Live Music</p>
                        <p class="font-sans ml-2">[blog]</p>
                    </a>
                </div>
                <div class="flex items-center ">
                    <a href="#" class="mr-3 font-bold" >Home</a>
                    <a href="#" class="mr-3" >Login</a>
                    <a href="#" class="" >Newsletter</a>
                </div>
            </nav>
        </section>
        <div class="bg-white container mx-auto py-4">

            <!-- Post Layout -->
            <div class="pt-12 px-32 mb-12">
                <div class="flex mb-6">
                    <div class="w-1/5"></div>
                    <div class="w-4/5 pl-12 mb-4 flex justify-between">
                        <div>
                            <p class="font-bold text-sm hover:underline">{{ "< Regresar" }}</p>
                        </div>
                        <div class="flex">
                           <!-- Tag -->
                           <div v-for="tag in post.tags" class="mr-3 shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-2 hover:bg-black hover:text-white hover:border-l-white hover:border-b-white">
                                <p class="text-sm">{{ tag.name }}</p> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="w-1/5">
                        <img src="../../images/concert-4.jpeg" alt="" class="mb-6">
                        <div class="flex flex-row" >
                            <div class="object-cover mr-4">
                                <img src="../../images/concert-4.jpeg" alt="" class="w-24" >
                            </div>
                            <div class="my-0 text-sm">
                                <p class="font-bold">{{ post.author.name }}</p>
                                <p>{{ post.published_at }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-4/5 pl-12">
                        <div class="mb-4">
                            <p class="font-serif text-4xl font-bold">{{ post?.title || "No title" }}</p>
                        </div>
                        <div class="mb-8">
                            <p class="font-sans">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
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
        <footer class="bg-black flex flex-col justify-center py-4 text-white text-center">
            <div class="flex justify-center">
                <p class="font-serif font-bold text-3xl">Life & Live Music</p>
                <p class="font-sans ml-2">[blog]</p>
            </div>
            <p class="text-sm">Creado por <b>Marco Castillo</b></p>
                    

        </footer>
    </div>
</template>