<script setup lang="ts">
import BtnEdit from '@/Components/Buttons/BtnEdit.vue';
import BtnRemove from '@/Components/Buttons/BtnRemove.vue';
import { Film } from '@/types/Film';
import { router, useForm } from '@inertiajs/vue3';

const props = defineProps<{
    films: Film[]
}>();

const form = useForm({});

function goToEdit(filmId: string) {
    router.visit(route('admin.films.edit', filmId))
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

            <BtnEdit @click="goToEdit(film.id)">Editar</BtnEdit>

            <BtnRemove @click="remove(film.id)" />
        </div>
    </div>
</template>