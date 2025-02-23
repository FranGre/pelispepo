<script setup lang="ts">
import { Film } from '@/types/Film';
import { Link, router, useForm } from '@inertiajs/vue3';

const props = defineProps<{
    films: Film[]
}>();

const form = useForm({});

function goToEdit(filmId: string) {
    route('adim.films.edit', filmId)
}

function remove(filmId: string) {
    form.delete(route('admin.films.destroy', filmId))
}

</script>

<template>

    <Head title="Films"></Head>

    <div>
        <Link :href="route('admin.films.create')">Crear</Link>
    </div>

    <div>
        <div v-for="film in props.films" :key="film.id">
            <p>{{ film.title }}</p>
            <Link :href="route('admin.films.edit', film.id)">Editar</Link>
            <button type="button" @click="remove(film.id)">Eliminar</button>
        </div>
    </div>
</template>