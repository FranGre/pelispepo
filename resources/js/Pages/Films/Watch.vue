<script setup lang="ts">
import { Film } from '@/types/Film';
import { useForm } from '@inertiajs/vue3';

const props = defineProps<{
    film: Film,
    path: string,
    likesCounter: number,
    likeMsg: string,
    favoriteMsg: string
}>();

const form = useForm({
    filmId: props.film.id
});

function handleLike(filmId: string) {
    form.post(route('films.like'));
}

function handleFavorite(filmId: string) {
    form.post(route('films.favorite'));
}

</script>

<template>
    <h1>{{ film.title }}</h1>

    <p>{{ film.description }}</p>

    <p>{{ props.likesCounter }} like/s</p>


    <button type="button" @click="handleLike(props.film.id)">{{ likeMsg }}</button>
    <br>
    <button type="button" @click="handleFavorite(props.film.id)">{{ favoriteMsg }}</button>

    <video :src="path" controls="true"></video>

</template>