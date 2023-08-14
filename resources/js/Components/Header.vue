<script setup>
    import HeaderFilters from './HeaderFilters.vue';

    defineProps({
        tags: {
            type: Array,
            required: true,
            default: []
        }
    })
</script>

<template>
    <section class="flex justify-center flex-col px-2 py-8">
        <div class="flex justify-center mb-8">
            <p class="font-serif font-bold text-4xl md:text-5xl">Life & Live Music</p>
            <p class="font-sans ml-2 text-xl md:text-2xl">[blog]</p>
        </div>
        <div class="flex justify-center mb-12">
            <div class="w-full lg:w-1/2">
                <p class="text-2xl md:text-3xl text-center">
                    Fotos <b>horribles</b> y buenas <b>historias</b> de momentos <b>inolvidables</b>.
                </p>
            </div>
        </div>
        <HeaderFilters :tags="tags"  />
    </section>
</template>