<script setup lang="ts">
import { Film } from '@/types/Film';
import { Link, useForm } from '@inertiajs/vue3';
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

</script>

<template>

    <Head title="Peliculas"></Head>

    <div>
        <input v-model="form.title">
        <button @click="searchFilms" type="button">Buscar</button>
    </div>

    <div>
        <Link v-for="film in props.films" :key="film.id" :href="route('films.show', film.id)">
        {{ film.title }}
        </Link>
    </div>

</template>