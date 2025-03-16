<template>

    <Head title="Films" />

    <AuthenticatedLayout>
        <H1 text="Películas" />

        <form @submit.prevent="submit" enctype="multipart/form-data">
            <div class="grid grid-cols-2 gap-10 mb-6">
                <!--
                <div>
                    <Label text="Pelicula" />
                    <file-pond name="film" ref="pond" chunkUploads="true"
                        labelIdle='Arrastra la pelicula o <span class="filepond--label-action"> Buscala </span>'
                        :server="{
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

                <!-- 
                <div>
                    <Label text="Portada" />
                    <file-pond name="cover" allowFileTypeValidation="false" :acceptedFileTypes="['image/webp']"
                        labelFileTypeNotAllowed="Extensión inválida"
                        :fileValidateTypeLabelExpectedTypesMap="{ 'image/webp': '.webp' }"
                        fileValidateTypeLabelExpectedTypes='Se esperaba .webp'
                        labelIdle='Arrastra la portada o <span class="filepond--label-action"> Buscala </span>' :server="{
                            process: {
                                url: route('admin.covers.post'),
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': props.csrfToken
                                }
                            }
                        }">
                    </file-pond>
                </div>
                -->


            </div>

            <div>
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
//import vueFilePond from 'vue-filepond';
//import 'filepond/dist/filepond.min.css';
//import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
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
    url: '',
    film: '',
    user_id: props.user_id
});

//const FilePond = vueFilePond(FilePondPluginFileValidateType);

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