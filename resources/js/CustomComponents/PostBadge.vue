<script setup>
import { Link } from '@inertiajs/vue3'
import BaseDate from './BaseDate.vue';
import CustomButton from './CustomButton.vue';
import { ref } from 'vue';
import { BACKGROUND_COLORS} from "@/constants"

const backgroundColors = ref(BACKGROUND_COLORS)

defineProps({
    post: Object,
})
</script>

<template>
    <div class="w-80 mb-6 hover:scale-[102%] transition rounded" >
        <Link :href="route('posts.show', post)">
            <img :src="post.image_url" alt="" class=" h-64 w-full object-cover rounded">
            <div class="p-4 flex justify-center flex-col">
                <b class="font-serif text-lg text-center mb-3 text-primary-700 capitalize">{{ post.title }}</b>
                <p class="text-sm text-justify mb-4 text-primary-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, animi? Voluptate laboriosam, ullam temporibus maiores...</p>
                <div class="font-sans text-xs text-primary-950 mb-6">
                    <div class="mr-1 flex">
                        <b class="mr-1">Fecha: </b> 
                        <BaseDate :timestamp="post.concert_date" />
                    </div>
                    <p class="mr-1"><b>Autor:</b> {{ post?.author?.name || 'Unknown' }}</p>
                </div>
                <!-- Tags -->
                <!-- <div class="flex flex-wrap justify-left mt-4">
                    <TagBadge class="w-fit text-xs" v-for="tag in post.tags" :tag="tag" :key="tag.id"/>
                </div> -->
                <div class="w-full flex justify-center">
                    <CustomButton title="Continuar leyendo..." class="w-full text-xs bg-primary-600 hover:bg-primary-800 text-primary-100 hover:scale-[100%]" />
                </div>
            </div>
        </Link>
    </div>
</template>