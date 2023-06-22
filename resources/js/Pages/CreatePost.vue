<script setup>
import Layout from '@/Components/Layout.vue';
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  image: null,
})


function submit(){
    form.post('/posts')
}

</script>

<template>
    <Layout>
        <div class="bg-white p-12">
            <form @submit.prevent="submit">
                <input type="file" @input="form.image = $event.target.files[0]" />
                <img src="https://lalm-bucket.s3.amazonaws.com/Svct7YO0VxxFliyGe2jx4kd22RFZiNS8Xm6tXyO1.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAWXXDFBHVT2BQDPYR%2F20230622%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230622T193134Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Signature=4277018e7e63307225b13ffd5ae9dac528f9eaf0d18d9d5d478b4a8e33ecc52a" />
                <button type="submit" class="ml-3 shadow-[-4px_4px_0px_0px_rgba(0,0,0,1)] border border-black px-2 hover:bg-black hover:text-white hover:border-l-white hover:border-b-white">Upload</button>
            </form>
        </div>
    </Layout>
</template>