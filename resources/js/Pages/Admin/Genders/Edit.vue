<template>

    <Head title="Genders"></Head>
    <AuthenticatedLayout>
        <form @submit.prevent="submit" class="mx-auto max-w-64">
            <div>
                <H1 :text="gender.name" />

                <div class="form-control">
                    <Label text="Nombre" />
                    <InputText v-model="form.name" class="w-64" />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div class="mt-6 flex justify-end">
                    <BtnSave text="Guardar" />
                </div>
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import { Gender } from '@/types/Gender';
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputText from '@/Components/InputText.vue';
import Label from '@/Components/Label.vue';
import BtnSave from '@/Components/Buttons/BtnSave.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import H1 from '@/Components/Titles/H1.vue';

const props = defineProps<{
    gender: Gender
}>();

const form = useForm({
    id: props.gender.id,
    name: props.gender.name
});

const submit = () => {
    form.patch(route('admin.genders.update', props.gender.id));
}
</script>