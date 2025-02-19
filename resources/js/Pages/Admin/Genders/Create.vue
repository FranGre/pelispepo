<script setup lang="ts">
import InputError from '@/Components/InputError.vue';
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

            <div>
                <label>Nombre</label>
                <input v-model="form.name">
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <button type="submit">Guardar</button>
        </form>
    </AuthenticatedLayout>
</template>