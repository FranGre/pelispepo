<template>

    <Head title="Films" />

    <AuthenticatedLayout>
        <H1 text="Películas" />

        <form @submit.prevent="submit" enctype="multipart/form-data" class="mx-32">
            <div role="alert" class="alert mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="stroke-info h-6 w-6 shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>No clickes en Crear hasta que la película se haya subido</span>
            </div>

            <div>
                <div>
                    <Label text="Pelicula" />
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
            </div>

            <div class="grid grid-flow-col grid-rows-2 mt-6">
                <div class="row-span-2">
                    <div class="form-control">
                        <Label text="Título" />
                        <InputText v-model="form.title" class="w-96" />
                        <InputError :message="form.errors.title"></InputError>
                    </div>

                    <div class="form-control mt-6">
                        <Label text="Fecha lanzamiento" />
                        <input type="date" class="input w-44" v-model="form.release_date">
                        <InputError :message="form.errors.release_date"></InputError>
                    </div>
                </div>

                <div class="row-span-2">
                    <div>
                        <Label text="Descripción" />
                        <Textarea v-model="form.description" class="h-40" />
                        <InputError :message="form.errors.description"></InputError>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <Label text="Generos" />
                <GenderTag v-for="gender in props.genders" :key="gender.id" :gender="gender" @click="handleGender"
                    :is-selected="form.selectedGenderIds.includes(gender.id)"></GenderTag>
            </div>

            <div class="mt-6 flex items-center gap-3">
                <Label text="Visible" />
                <Toggle v-model="form.is_activated" />
            </div>

            <div class="mt-12 flex justify-end">
                <BtnSave text="Crear" />
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import InputError from '@/Components/InputError.vue';
import { Gender } from '@/types/Gender';
import { useForm } from '@inertiajs/vue3';
import vueFilePond from 'vue-filepond';
import 'filepond/dist/filepond.min.css';
import InputText from '@/Components/InputText.vue';
import BtnSave from '@/Components/Buttons/BtnSave.vue';
import Textarea from '@/Components/Textarea.vue';
import Toggle from '@/Components/Toggle.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import H1 from '@/Components/Titles/H1.vue';
import GenderTag from '@/Components/Tags/GenderTag.vue';
import Label from '@/Components/Label.vue';


const props = defineProps<{
    genders: Gender[]
    csrfToken: string
    user_id: number
}>();

const form = useForm({
    is_activated: true,
    title: '',
    description: '',
    release_date: '',
    selectedGenderIds: [] as string[],
    film: null,
    user_id: props.user_id
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