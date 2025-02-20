<script setup lang="ts">
import InputError from '@/Components/InputError.vue';
import { Gender } from '@/types/Gender';
import { useForm } from '@inertiajs/vue3';
import vueFilePond from 'vue-filepond';
import 'filepond/dist/filepond.min.css';


const props = defineProps<{
    genders: Gender[]
    csrfToken: string
}>();

const form = useForm({
    title: '',
    description: '',
    releaseDate: '',
    selectedGenderIds: [] as string[],
    film: null
});

const FilePond = vueFilePond();

const handleGender = (genderId: string) => {
    if (form.selectedGenderIds.includes(genderId)) {
        form.selectedGenderIds = form.selectedGenderIds.filter(id => id != genderId)
        return;
    }

    form.selectedGenderIds.push(genderId)
}

const submit = () => {
    form.post(route('admin.films.store'));
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
            <label>Pelicula</label>
            <file-pond name="film" ref="pond" required="true" chunkUploads="true" :server="{
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
            <input type="date" v-model="form.releaseDate">
            <InputError :message="form.errors.releaseDate"></InputError>
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
        </div>

        <button type="submit">Crear</button>
    </form>
</template>