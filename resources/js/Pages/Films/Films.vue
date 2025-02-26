<script setup lang="ts">
import CardFilm from '@/Components/Cards/CardFilm.vue';
import { Film } from '@/types/Film';
import { Link, router, useForm } from '@inertiajs/vue3';
import axios from 'axios';
import { ref } from 'vue';

const props = defineProps<{
    films: Film[]
}>();

const form = useForm({
    title: null
});

function searchFilms() {
    form.get(route('films.index')).then((response) => {
        console.log(response);
    }).catch();
}

function goToWatch(filmId: string) {
    router.visit(route('films.watch', filmId));
}

</script>

<template>

    <Head title="Peliculas"></Head>

    <div>
        <input v-model="form.title">
        <button @click="searchFilms" type="button">Buscar</button>
    </div>

    <div>
        <CardFilm v-for="film in props.films" :key="film.id" @click="goToWatch(film.id)" :film="film" />
    </div>

</template>