<template>

    <Head title="Films" />
    <AuthenticatedLayout>
        <form @submit.prevent="submit">
            <H1 :text="film.title" />

            <!--
            <div>
                <Label text="Pelicula" />
                <BtnRemove v-if="hasVideo" @click="removeVideo(film.id)"></BtnRemove>

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
            -->

            <div class="grid grid-cols-2 gap-10 mb-6">
                <div>
                    <div class="form-control">
                        <Label text="Título" />
                        <InputText v-model="form.title" />
                        <InputError :message="form.errors.title"></InputError>
                    </div>

                    <div class="form-control">
                        <Label text="URL" />
                        <InputText v-model="form.url" />
                        <InputError :message="form.errors.url"></InputError>
                    </div>

                    <div class="form-control">
                        <Label text="Portada URL" />
                        <InputText v-model="form.cover_url" />
                        <InputError :message="form.errors.cover_url"></InputError>
                    </div>

                    <div class="form-control mt-6">
                        <Label text="Fecha lanzamiento" />
                        <input type="date" class="input w-44" v-model="form.release_date">
                        <InputError :message="form.errors.release_date"></InputError>
                    </div>
                </div>

                <div>
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
                <InputError :message="form.errors.selectedGenderIds"></InputError>
            </div>

            <div class="mt-6 flex items-center gap-3">
                <Label text="Visible" />
                <Toggle v-model="form.is_activated" />
            </div>

            <div class="flex justify-end mt-12">
                <BtnSave text="Guardar" />
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import { Film } from '@/types/Film';
import { Gender } from '@/types/Gender';
import { useForm } from '@inertiajs/vue3';
import vueFilePond from 'vue-filepond';
import 'filepond/dist/filepond.min.css';
import InputError from '@/Components/InputError.vue';
import InputText from '@/Components/InputText.vue';
import Label from '@/Components/Label.vue';
import BtnSave from '@/Components/Buttons/BtnSave.vue';
import Textarea from '@/Components/Textarea.vue';
import Toggle from '@/Components/Toggle.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import H1 from '@/Components/Titles/H1.vue';
import GenderTag from '@/Components/Tags/GenderTag.vue';
import BtnRemove from '@/Components/Buttons/BtnRemove.vue';


const props = defineProps<{
    film: Film,
    selectedGenderIds: string[]
    genders: Gender[],
    csrfToken: string
}>();

const FilePond = vueFilePond();

const form = useForm({
    id: props.film.id,
    user_id: props.film.user_id,
    title: props.film.title,
    url: props.film.url,
    cover_url: props.film.cover_url,
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