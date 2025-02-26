<script setup lang="ts">
import BtnSave from '@/Components/Buttons/BtnSave.vue';
import InputError from '@/Components/InputError.vue';
import InputText from '@/Components/InputText.vue';
import Label from '@/Components/Label.vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: ''
});

const submit = () => {
    form.post(route('admin.genders.store'));
}
</script>

<template>

    <Head title="Géneros" />
    <AuthenticatedLayout>
        <form @submit.prevent="submit">
            <h1>Crear</h1>

            <div class="form-control">
                <Label text="Nombre" />
                <InputText v-model="form.name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <BtnSave text="Crear" />
        </form>
    </AuthenticatedLayout>
</template>