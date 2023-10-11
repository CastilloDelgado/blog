<script setup>
import dayjs from 'dayjs';
import relativeTime from "dayjs/plugin/relativeTime"
import localizeDate from "dayjs/plugin/localizedFormat"
import { ref } from 'vue';

dayjs.extend(relativeTime)
dayjs.extend(localizeDate)

const props = defineProps({
    timestamp: {
        type: String,
        required: true
    }
})

const dateToShow = ref(dayjs(props.timestamp).fromNow())
const longDate = ref(dayjs(props.timestamp).format('llll'))

</script>

<template>
    <p :title="longDate">
        {{ dateToShow }}
    </p>
</template>