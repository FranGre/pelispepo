<template>
    <AuthenticatedLayout>
        <H1 text="Mis películas favoritas" />

        <div class="flex justify-end mb-6">
            <InputText v-model="form.search" />
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

        <ul v-else class="flex gap-7">
            <CardFilm v-for="film in props.films" :key="film.id" @click="goToWatch(film.id)" :film="film" />
        </ul>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import BtnSearch from '@/Components/Buttons/BtnSearch.vue'
import CardFilm from '@/Components/Cards/CardFilm.vue'
import InputText from '@/Components/InputText.vue'
import H1 from '@/Components/Titles/H1.vue'
import H2 from '@/Components/Titles/H2.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Film } from '@/types/Film'
import { Link, router, useForm } from '@inertiajs/vue3'

const props = defineProps<{
    films: Film[]
}>();

const urlParams = new URLSearchParams(window.location.search)

const form = useForm({
    search: urlParams.get('search') || ''
});

function searchFilms() {
    form.get(route('films.favorites'))
}

function goToWatch(filmId: string) {
    router.visit(route('films.watch', filmId));
}

</script>