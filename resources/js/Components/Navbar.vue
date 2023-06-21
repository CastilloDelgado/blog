<script setup>
    import { Link }  from '@inertiajs/vue3';
</script>

<template>
    <nav class="bg-white fixed top-0 left-0 right-0 z-50">
            <div class="flex justify-between px-6 py-4 border-b-4 border-black">
                <div>
                    <a class="flex" href="#">
                        <p class="font-serif font-bold text-3xl">Life & Live Music</p>
                        <p class="font-sans ml-2">[blog]</p>
                    </a>
                </div>
                <div class="flex items-center ">
                    <a href="#" class="hover:underline mr-3 font-bold" >Home</a>
                    <a href="#" class="hover:underline mr-3" >Login</a>
                    <a href="#" class="hover:underline mr-3" >Newsletter</a>
                    <Link :href="route('posts.create')">Create Post</Link>
                </div>
            </div>
        </nav>
</template>