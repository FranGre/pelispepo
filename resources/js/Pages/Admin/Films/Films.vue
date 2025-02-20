<script setup lang="ts">
import { Film } from '@/types/Film';

const props = defineProps<{
    films: Film[]
}>();
</script>

<template>

    <Head title="Films"></Head>

    <div>
        <div v-for="film in props.films" :key="film.id">
            {{ film.title }}
        </div>
    </div>
</template>