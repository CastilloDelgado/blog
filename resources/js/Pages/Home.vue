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
                    <a href="#" class="mr-3 " >Login</a>
                    <a href="#" class="" >Newsletter</a>
                </div>
            </nav>
        </section>
        <div class="bg-white container mx-auto px-6 py-4">
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
                        <input type="text" class="border-0 bg-gray-200 border-l-4 border-black" placeholder="Buscar por barda">
                       
                    </form>
                </div>
            </section>
        </div>
    </div>
</template>