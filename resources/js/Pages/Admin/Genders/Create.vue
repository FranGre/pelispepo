<script setup lang="ts">
import InputError from '@/Components/InputError.vue';
import InputText from '@/Components/InputText.vue';
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
                <label class="label">Nombre</label>
                <InputText v-model="form.name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <button type="submit" class="btn btn-success">Crear</button>
        </form>
    </AuthenticatedLayout>
</template>