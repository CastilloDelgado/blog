<script setup>
import Layout from '@/Components/Layout.vue';
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    title: null,
    location: null,
    address: null,
    country: null,
    state: null,
    city: null,
    image: null,
    concertDate: null,
    band: null,
    postImages: null,
    text: null
})


function submit(){
    form.post('/posts')
}

</script>

<template>
    <Layout>
        <div class="bg-white p-8">
            <p class="font-serif font-bold text-4xl mb-8">Share your experience with a new post!</p>
            <form @submit.prevent="submit">
                <div class="mb-2 flex">
                    <label class="self-start" for="title">Title</label>
                    <input class="ml-4" id="title"  type="text" v-model="form.title" />
                </div>
                <div class="mb-2 flex">
                    <label class="self-start" for="location">Location</label>
                    <input class="ml-4" id="location"  type="text" v-model="form.location" />
                </div>
                <div class="mb-2 flex">
                    <label class="self-start" for="address">Address</label>
                    <input class="ml-4" id="address" type="text"  v-model="form.address" />
                </div>
                <div class="mb-2 flex">
                    <label class="self-start" for="country">Country</label>
                    <input class="ml-4" id="country" type="text"  v-model="form.country" />
                </div>
                <div class="mb-2 flex">
                    <label class="self-start" for="state">State</label>
                    <input class="ml-4" id="state" type="text"  v-model="form.state" />
                </div>
                <div class="mb-4 flex">
                    <label class="self-start" for="city">City</label>
                    <input class="ml-4" id="city" type="text"  v-model="form.city" />
                </div>
                <div class="mb-6 flex">
                    <label class="self-start" for="image">Main Image</label>
                    <label for="image" class="ml-3 shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-4 py-2 hover:bg-black hover:text-white hover:border-l-white hover:border-b-white">
                        Click here to add image!
                    </label>
                    <input id="image" class="hidden" type="file" @input="form.image = $event.target.files[0]" />
                </div>
                <div class="mb-4 flex">
                    <label class="self-start" for="concertDate">Concert Date</label>
                    <input class="ml-4" id="concertDate" type="date"  v-model="form.concertDate" />
                </div>
                <div class="mb-4 flex">
                    <label class="self-start" for="band">Band Name</label>
                    <input class="ml-4" id="band" type="text"  v-model="form.band" />
                </div>
                <div class="mb-5 flex">
                    <label class="self-start" for="postImages">Gallery Images</label>
                    <label for="postImages" class="ml-3 shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-4 py-2 hover:bg-black hover:text-white hover:border-l-white hover:border-b-white">
                        Click here to add more images!
                    </label>
                    <input id="postImages" class="hidden" type="file" @input="form.image = $event.target.files[0]" />
                </div>
                <div class="mb-4 w-full">
                    <label class="self-start" for="text">Share yourself!</label>
                    <textarea class="ml-4 w-1/2" id="text"  v-model="form.text" rows="20" />
                </div>
                <button type="submit" class="w-1/3 ml-3 shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-4 py-2 hover:bg-black hover:text-white hover:border-l-white hover:border-b-white">Create Post!</button>
            </form>
        </div>
    </Layout>
</template>