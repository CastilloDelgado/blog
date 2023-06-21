<script setup>
    import HeaderFilters from './HeaderFilters.vue';
</script>

<template>
    <section class="flex justify-center flex-col py-12">
        <div class="flex justify-center mb-8">
            <p class="font-serif font-bold text-5xl">Life & Live Music</p>
            <p class="font-sans ml-2 text-2xl">[blog]</p>
        </div>
        <div class="flex justify-center mb-12">
            <div class="w-full lg:w-1/2">
                <p class="text-3xl text-center">
                    Fotos <b>horribles</b> y buenas <b>historias</b> de momentos <b>innolvidables</b>.
                </p>
            </div>
        </div>
        <HeaderFilters />
    </section>
</template>