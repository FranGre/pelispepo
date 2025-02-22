<script setup lang="ts">
import { Film } from '@/types/Film';
import { useForm } from '@inertiajs/vue3';

const props = defineProps<{
    films: Film[]
}>();

const form = useForm({});

function remove(filmId: string) {
    form.delete(route('admin.films.destroy', filmId))
}
</script>

<template>

    <Head title="Films"></Head>

    <div>
        <div v-for="film in props.films" :key="film.id">
            <p>{{ film.title }}</p>
            <button type="button" @click="remove(film.id)">Eliminar</button>
        </div>
    </div>
</template>