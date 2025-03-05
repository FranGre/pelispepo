<template>

    <Head title="Films"></Head>

    <AuthenticatedLayout>
        <H1 text="Películas" />

        <div class="flex justify-between mb-8">
            <BtnPrimary @click="goToCreate" class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                </svg> Película
            </BtnPrimary>

            <div class="flex">
                <InputText v-model="searchForm.search"></InputText>
                <BtnSearch @click="searchFilms()"></BtnSearch>
            </div>
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

        <div v-else>
            <div class="overflow-x-auto">
                <table class="table text-lg text-center">
                    <thead class="text-lg font-bold">
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
                        <tr class="bg-base-200 hover:bg-base-300" v-for="film in props.films" :key="film.id">
                            <td>{{ film.title }}</td>
                            <td>
                                <Toggle v-model="film.is_activated" @update:model-value="handleActivated(film.id)">
                                </Toggle>
                            </td>
                            <td>{{ film.creator.email }}</td>
                            <td>{{ film.release_date }}</td>
                            <td>
                                <button class="link link-hover" @click="goToViewLikes(film.id)">
                                    {{ film.likes_count }}
                                </button>
                            </td>
                            <td>100 favoritos</td>
                            <td class="flex gap-3">
                                <BtnEdit @click="goToEdit(film.id)">Editar</BtnEdit>
                                <BtnRemove @click="remove(film.id)" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import H1 from '@/Components/Titles/H1.vue';
import BtnEdit from '@/Components/Buttons/BtnEdit.vue';
import BtnRemove from '@/Components/Buttons/BtnRemove.vue';
import BtnPrimary from '@/Components/Buttons/BtnPrimary.vue';
import { Film } from '@/types/Film';
import { router, useForm } from '@inertiajs/vue3';
import Toggle from '@/Components/Toggle.vue';
import InputText from '@/Components/InputText.vue';
import BtnSearch from '@/Components/Buttons/BtnSearch.vue';
import H2 from '@/Components/Titles/H2.vue';

const props = defineProps<{
    films: Film[]
}>();

const page = usePage();

console.log(page.props)

const form = useForm({});

function goToCreate() {
    router.visit(route('admin.films.create'));
}

function goToEdit(filmId: string) {
    router.visit(route('admin.films.edit', filmId))
}

function remove(filmId: string) {
    form.delete(route('admin.films.destroy', filmId))
}

function goToViewLikes(filmId: string) {
    router.visit(route('admin.films.likes', filmId))
}

function handleActivated(filmId: string) {
    router.patch(route('admin.films.toggle.activation', filmId));
}

const searchForm = useForm({
    search: ''
});

function searchFilms() {
    searchForm.get(route('admin.films.index'));
}
</script>