<script setup>
    import { Link }  from '@inertiajs/vue3';
</script>

<template>
    <nav class="bg-white fixed top-0 left-0 right-0 z-50">
            <div class="flex justify-between px-6 py-4 border-b-4 border-black">
                <div>
                    <Link :href="route('home')">
                        <p class="flex">
                            <p class="font-serif font-bold text-3xl">Life & Live Music</p>
                            <p class="font-sans ml-2">[blog]</p>
                        </p>
                    </Link>
                </div>
                <div class="flex items-center ">
                    <Link :href="route('home')">
                        <p :class="{ 'font-bold': $page.url === '/users' }" >
                            Home
                        </p>
                    </Link>
                    <Link :href="route('login')">
                        <p class="ml-4 hover:underline">
                            Login
                        </p>
                    </Link>
                    <Link :href="route('posts.create')">
                        <p class="ml-4 hover:underline">
                            Create Post
                        </p>
                    </Link>
                </div>
            </div>
        </nav>
</template>