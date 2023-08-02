<template>
    <p :title="dateForHumans(timestamp)">
        {{ diffForHumans(timestamp) }}
    </p>
</template>

<script setup>
import dayjs from 'dayjs';
import relativeTime from "dayjs/plugin/relativeTime"
import localizeDate from "dayjs/plugin/localizedFormat"

dayjs.extend(relativeTime)
dayjs.extend(localizeDate)

defineProps({
    timestamp: {
        type: Number,
        required: true
    }
})

const dateInMiliseconds = (date) =>  new Date(date).getMilliseconds()

const diffForHumans = (timestamp) => dayjs.unix(dateInMiliseconds(timestamp)).fromNow()
const dateForHumans = (timestamp) => dayjs.unix(dateInMiliseconds(timestamp)).format('llll')

</script>