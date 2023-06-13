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
                            <div class="mr-3 shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-2 hover:bg-black hover:text-white hover:border-l-white hover:border-b-white">
                                <p class="text-sm">Punk</p> 
                            </div>
                            <div class="mr-3 shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-2 hover:bg-black hover:text-white hover:border-l-white hover:border-b-white">
                                <p class="text-sm">Rock</p> 
                            </div>
                            <div class="shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-2 hover:bg-black hover:text-white hover:border-l-white hover:border-b-white">
                                <p class="text-sm">Underground</p> 
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
                                <p class="font-bold">Marco Antonio Castillo Delgado</p>
                                <p>Marzo 29, 2023</p>
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
                        <div class="text-xl text-justify mb-4">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias alias sint esse adipisci, porro tenetur debitis, maxime deserunt dolore odio veritatis quidem nulla, molestiae itaque! Sint deserunt ducimus exercitationem laboriosam.</p>
                        </div>
                        <div class="text-xl text-justify mb-4">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto ab beatae, nam quo quae adipisci, magni, rem optio pariatur magnam totam. Sit commodi odit blanditiis. Numquam consectetur suscipit est quisquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quisquam maiores ipsa? Tempora possimus iure itaque voluptatem dignissimos quisquam voluptates nesciunt quibusdam repudiandae, nisi rem tenetur corporis ullam maxime nulla? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis quaerat quia neque, illo a quo porro ipsa obcaecati numquam inventore laudantium blanditiis ipsam, molestiae ducimus. Deserunt illum voluptatem ea eligendi.</p>
                        </div>  
                        <div class="text-xl text-justify mb-4">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi fugit eum placeat odio nemo quae doloremque cupiditate quibusdam et quam minus porro illum officia dolorum praesentium ipsum, eaque quidem exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores, voluptate rem suscipit at pariatur similique voluptatum omnis, ducimus totam porro saepe illum soluta voluptates veniam excepturi facilis odit labore!</p>
                        </div>
                        <div class="grid grid-cols-3 gap-4 mb-4">
                            <img src="../../images/concert-1.jpeg" alt="" class="border-4 border-black">
                            <img src="../../images/concert-2.jpeg" alt="" class="border-4 border-black">
                            <img src="../../images/concert-3.jpeg" alt="" class="border-4 border-black">
                        </div>
                        <div class="text-xl text-justify mb-4">
                           <p class="font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aut magnam harum? Officiis harum quae quidem placeat, asperiores, maiores tenetur ipsa.</p>
                        </div>
                        <div class="text-xl text-justify mb-4">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aut magnam harum? Officiis harum quae quidem placeat, asperiores, maiores tenetur ipsa, id repellat cupiditate dolore totam vero nam obcaecati odit? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim doloremque fugiat magni earum aliquid possimus esse, quos tempore! Provident, porro ab? In voluptatem atque ea eligendi mollitia totam veniam sit?</p>
                        </div>
                        <div class="grid grid-cols-4 gap-4 mb-4">
                            <img src="../../images/concert-1.jpeg" alt="" class="border-4 border-black">
                            <img src="../../images/concert-2.jpeg" alt="" class="border-4 border-black">
                            <img src="../../images/concert-3.jpeg" alt="" class="border-4 border-black">
                            <img src="../../images/concert-4.jpeg" alt="" class="border-4 border-black">
                            <img src="../../images/concert-1.jpeg" alt="" class="border-4 border-black">
                            <img src="../../images/concert-2.jpeg" alt="" class="border-4 border-black">
                            <img src="../../images/concert-3.jpeg" alt="" class="border-4 border-black">
                            <img src="../../images/concert-4.jpeg" alt="" class="border-4 border-black">
                        </div>
                        <div class="text-xl text-justify mb-4">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio fugiat alias cum. Quos nostrum fuga a facilis optio eum, vel eligendi, sed nemo cum atque est dolor omnis amet ducimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, aliquam quos. Ipsam totam, consectetur optio explicabo molestiae, dolor voluptatibus, laudantium voluptas eum minus molestias magni est esse. Ad, vitae quas.</p>
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