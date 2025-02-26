<script setup lang="ts">
import { Film } from '@/types/Film';
import { Gender } from '@/types/Gender';
import { useForm } from '@inertiajs/vue3';
import vueFilePond from 'vue-filepond';
import 'filepond/dist/filepond.min.css';
import InputError from '@/Components/InputError.vue';


const props = defineProps<{
    film: Film,
    selectedGenderIds: string[]
    genders: Gender[],
    hasVideo: boolean,
    csrfToken: string
}>();

const FilePond = vueFilePond();

const form = useForm({
    id: props.film.id,
    user_id: props.film.user_id,
    title: props.film.title,
    description: props.film.description,
    selectedGenderIds: props.selectedGenderIds,
    release_date: props.film.release_date,
    is_activated: props.film.is_activated
});

function submit() {
    form.patch(route('admin.films.update', props.film.id));
}

const handleGender = (genderId: string) => {
    if (form.selectedGenderIds.includes(genderId)) {
        form.selectedGenderIds = form.selectedGenderIds.filter(id => id != genderId)
        return;
    }

    form.selectedGenderIds.push(genderId)
}

function removeVideo(filmId: string) {
    const formremove = useForm({
        filmId: props.film.id
    });

    formremove.delete(route('admin.films.video.destroy'));
}
</script>

<template>

    <Head title="Films" />

    <form @submit.prevent="submit" enctype="multipart/form-data">
        <div>
            <label>Título</label>
            <input v-model="form.title">
            <InputError :message="form.errors.title"></InputError>
        </div>

        <div>
            <button v-if="hasVideo" type="button" @click="removeVideo(film.id)">Eliminar Video</button>

            <file-pond v-else name="film" ref="pond" required="true" chunkUploads="true" :server="{
                process: {
                    url: route('admin.films.post'),
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': props.csrfToken
                    }
                },
                patch: {
                    url: route('admin.films.patch', { id: 'a893bdcb-6214-4a01-a107-7a9931d2ce81' }),
                    method: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': props.csrfToken
                    }
                }
            }"></file-pond>
        </div>

        <div>
            <label>Descripción</label>
            <input v-model="form.description">
            <InputError :message="form.errors.description"></InputError>
        </div>

        <div>
            <label>Fecha lanzamiento</label>
            <input type="date" v-model="form.release_date">
            <InputError :message="form.errors.release_date"></InputError>
        </div>


        <div>
            <label>Generos</label>
            <div>
                <button v-for="gender in props.genders" :key="gender.id" @click="handleGender(gender.id)" type="button"
                    :class="{
                        'text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700': !form.selectedGenderIds.includes(gender.id),
                        'text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700': form.selectedGenderIds.includes(gender.id)
                    }">
                    {{ gender.name }}
                </button>
            </div>
            <InputError :message="form.errors.selectedGenderIds"></InputError>
        </div>

        <div>
            <label>Visible</label>
            <input type="checkbox" v-model="form.is_activated">
            <InputError :message="form.errors.is_activated"></InputError>
        </div>

        <button type="submit">Guardar</button>
    </form>
</template>