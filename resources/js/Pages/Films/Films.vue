<template>
    <AuthenticatedLayout>

        <Head title="PelisPepo"></Head>

        <H1 text="Películas" />

        <div class="flex justify-end mb-6">
            <InputText v-model="form.title" />
            <BtnSearch @click="searchFilms"></BtnSearch>
        </div>

        <div v-if="props.films.length == 0" class="flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-mood-empty">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path d="M9 10l.01 0" />
                <path d="M15 10l.01 0" />
                <path d="M9 15l6 0" />
            </svg>
            <H2 text="No hay peliculas" />
        </div>

        <ul v-else class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 md:gap-7 lg:grid-cols-6">
            <CardFilm v-for="film in props.films.data" :key="film.id" @click="goToWatch(film.id)" :film="film" />
        </ul>

        <Pagination :pagination="props.films" />
    </AuthenticatedLayout>

</template>

<script setup lang="ts">
import CardFilm from '@/Components/Cards/CardFilm.vue';
import { Film } from '@/types/Film';
import { Head, Link, router, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputText from '@/Components/InputText.vue';
import H1 from '@/Components/Titles/H1.vue';
import BtnSearch from '@/Components/Buttons/BtnSearch.vue';
import H2 from '@/Components/Titles/H2.vue';
import Pagination from '@/Components/Pagination.vue';

const urlParams = new URLSearchParams(window.location.search)

const props = defineProps<{
    films: Film[]
    data: {}
}>();

const form = useForm({
    title: urlParams.get('title') || ''
});

function searchFilms() {
    form.get(route('films.index'))
}

function goToWatch(filmId: string) {
    router.visit(route('films.watch', filmId));
}
</script>