<script setup>
import facebook from "../../images/icons/facebook.png"
import instagram from "../../images/icons/instagram.png"
import youtube from "../../images/icons/youtube.png"

</script>

<template>
    <div class="w-full flex justify-center gap-4 mb-8">
        <a href="https://www.facebook.com/profile.php?id=61553355485348" target="_blank"><img :src="facebook" class="w-8 h-8 hover:scale-[105%] transition" /></a>
        <a href="https://www.instagram.com/yukal55/" target="_blank"><img :src="instagram" class="w-8 h-8 hover:scale-[105%] transition" /></a>
        <a href="https://www.youtube.com/channel/UCES11jeVrqq2QrK8tgrBLtQ" target="_blank"><img :src="youtube" class="w-8 h-8 hover:scale-[105%] transition" /></a>
    </div>
</template>