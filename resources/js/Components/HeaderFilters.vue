<script setup>
    defineProps({
        tags: {
            type: Array,
            required: true,
            default: []
        }
    })
</script>

<template>
    <div>
        <p class="text-center">
            Utiliza los filtros para buscar un review de tu interés.
        </p>
    </div>
    <div class="flex justify-center ">
        <form action="#" class="mt-4 flex flex-col lg:flex-row" >
            <select name="" id="" class="border-0 bg-gray-200 self-center border-l-4 border-black focus:outline-none mr-2 mb-2 lg:mb-0 text-center">
                <option value="">Selecciona un género</option>
                <option v-for="tag in tags" :value="tag.id" :key="tag.id">{{ tag.name }}</option>
            </select>
            <input type="text" class="border-0 bg-gray-200 self-center border-l-4 border-black placeholder-black text-center"  placeholder="Buscar por banda">
        </form>
    </div>
</template>