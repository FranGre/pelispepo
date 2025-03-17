<template>

    <Head title="Géneros" />
    <AuthenticatedLayout>
        <H1 text="Géneros" />

        <div class="flex justify-between mb-8">
            <BtnPrimary text="Género" @click="goToCreate()" class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                </svg> Género
            </BtnPrimary>

            <div class="flex">
                <InputText v-model="inputText" />
                <BtnSearch @click="search()"></BtnSearch>
            </div>
        </div>

        <div v-if="props.genders.length == 0" class="flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-mood-empty">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path d="M9 10l.01 0" />
                <path d="M15 10l.01 0" />
                <path d="M9 15l6 0" />
            </svg>
            <H2 text="No hay generos" />
        </div>

        <div v-else>
            <div class="overflow-x-auto">
                <table class="table text-lg text-center bg-zinc-300 text-black  dark:bg-zinc-700 dark:text-white">
                    <thead class="text-lg font-bold">
                        <tr>
                            <th>Nombre</th>
                            <th>Peliculas</th>
                        </tr>
                    </thead>
                    <tbody class="bg-zinc-200 text-black dark:bg-zinc-800 dark:text-white">
                        <tr class="hover:bg-zinc-400 text-black dark:hover:bg-zinc-600 dark:text-white" v-for="gender in props.genders" :key="gender.id">
                            <td>{{ gender.name }}</td>
                            <td>{{ gender.films_count }}</td>
                            <td>
                                <BtnEdit @click="goToEdit(gender.id)">Editar</BtnEdit>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import H1 from '@/Components/Titles/H1.vue'
import InputText from '@/Components/InputText.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Gender } from '@/types/Gender';
import { router, useForm } from '@inertiajs/vue3';
import BtnPrimary from '@/Components/Buttons/BtnPrimary.vue';
import BtnEdit from '@/Components/Buttons/BtnEdit.vue';
import BtnSearch from '@/Components/Buttons/BtnSearch.vue';
import H2 from '@/Components/Titles/H2.vue';

const props = defineProps<{
    genders: Gender[]
}>();

const goToEdit = (genderId: string) => {
    router.visit(route('admin.genders.edit', genderId));
}

function goToCreate() {
    router.visit(route('admin.genders.create'));
}

let inputText = ''

function search() {
    const form = useForm({ search: inputText })

    form.get(route('admin.genders.index'))
}
</script>