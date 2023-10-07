<script setup>
    import { Link }  from '@inertiajs/vue3';
    import { ref } from 'vue'

    const menuOpen = ref(false)

    function changeMenuOpen() {
        menuOpen.value = !menuOpen.value
    }
</script>

<template>
    <nav class="bg-white fixed top-0 left-0 right-0 z-50">
        <div class="flex justify-between p-4 border-b-4 border-black">
            <div>
                <Link :href="route('home')">
                    <p class="flex">
                        <p class="font-serif font-bold text-2xl md:text-3xl w-60 sm:w-fit">Life & Live Music</p>
                        <p class="font-sans ml-0 sm:ml-2 text-xs md:text-lg">[blog]</p>
                    </p>
                </Link>
            </div>
            <!-- Navbar Links -->
            <div class="items-center hidden md:flex ">
                <Link :href="route('home')">
                    <p class="ml-4 hover:underline" >
                        Home
                    </p>
                </Link>
                <Link :href="route('login')" v-show="!$page.props.auth.user">
                    <p class="ml-4 hover:underline">
                        Login
                    </p>
                </Link>
                <Link :href="route('posts.create')" v-show="$page.props.auth.user">
                    <p class="ml-4 hover:underline">
                        Create Post
                    </p>
                </Link>
            </div>
            <div class="items-center md:hidden flex items-center ">
                <button v-on:click="changeMenuOpen" type="submit" class="cleaml-3 shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-2 py-1 text-sm hover:bg-black hover:text-white hover:border-l-white hover:border-b-white">Menu</button>
            </div>
        </div>
         <!-- Dropdown Menu -->
         <div v-show="menuOpen" class="text-center bg-black text-white md:hidden">
            <Link :href="route('home')" >
                <p class="hover:underline py-2 border-b-2 border-gray">
                    Home
                </p>
            </Link>
            <Link :href="route('login')" v-show="!$page.props.auth.user">
                <p class="hover:underline py-2 border-b-2 border-gray">
                    Login
                </p>
            </Link>
            <Link :href="route('posts.create')" v-show="$page.props.auth.user">
                <p class="hover:underline py-2 border-b-2 border-gray">
                    Create Post
                </p>
            </Link>
        </div>
    </nav>
</template>