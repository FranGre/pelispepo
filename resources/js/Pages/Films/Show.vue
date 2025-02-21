<script setup lang="ts">
import { Film } from '@/types/Film';

const props = defineProps<{
    film: Film,
    path: string
}>();
</script>

<template>
    <h1>{{ film.title }}</h1>

    <p>{{ film.description }}</p>

    <video :src="path" controls="true"></video>

</template>