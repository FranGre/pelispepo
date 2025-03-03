<template>

    <Head title="Géneros" />
    <AuthenticatedLayout>
        <form @submit.prevent="submit" class="mx-auto max-w-64">
            <H1 text="Géneros" />

            <div class="form-control">
                <Label text="Nombre" />
                <InputText v-model="form.name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="flex justify-end mt-6">
                <BtnSave text="Crear" />
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import BtnSave from '@/Components/Buttons/BtnSave.vue'
import InputError from '@/Components/InputError.vue'
import InputText from '@/Components/InputText.vue'
import Label from '@/Components/Label.vue'
import { useForm } from '@inertiajs/vue3'
import H1 from '@/Components/Titles/H1.vue'

const form = useForm({
    name: ''
});

const submit = () => {
    form.post(route('admin.genders.store'));
}
</script>