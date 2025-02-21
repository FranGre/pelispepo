<script setup lang="ts">
import { Film } from '@/types/Film';
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
    films: Film[]
}>();

</script>

<template>

    <Head title="Peliculas"></Head>

    <div>
        <Link v-for="film in props.films" :key="film.id" :href="route('films.show', film.id)">
        {{ film.title }}
        </Link>
    </div>

</template>