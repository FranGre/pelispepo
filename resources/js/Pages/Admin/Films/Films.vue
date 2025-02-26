<script setup lang="ts">
import BtnEdit from '@/Components/Buttons/BtnEdit.vue';
import BtnRemove from '@/Components/Buttons/BtnRemove.vue';
import BtnPrimary from '@/Components/Buttons/BtnPrimary.vue';
import { Film } from '@/types/Film';
import { router, useForm } from '@inertiajs/vue3';

const props = defineProps<{
    films: Film[]
}>();

const form = useForm({});

function goToCreate(){
    router.visit(route('admin.films.create'));
}

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
        <BtnPrimary text="+ Película" @click="goToCreate" />
    </div>

    <div>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Visible</th>
                        <th>Creado Por</th>
                        <th>Fecha Lanzamiento</th>
                        <th>Likes</th>
                        <th>Favoritos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-base-200" v-for="film in props.films" :key="film.id">
                        <td>{{film.title}}</td>
                        <td>{{film.is_activated}}</td>
                        <td>{{film.user_id}}</td>
                        <td>{{film.release_date}}</td>
                        <td>100 likes</td>
                        <td>100 favoritos</td>
                        <td>
                            <BtnEdit @click="goToEdit(film.id)">Editar</BtnEdit>
                            <BtnRemove @click="remove(film.id)" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>