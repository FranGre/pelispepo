<script setup lang="ts">
import { Gender } from '@/types/Gender';
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputText from '@/Components/InputText.vue';

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

<template>

    <Head title="Genders"></Head>
    <AuthenticatedLayout>
        <form @submit.prevent="submit">
            <h1>Editar</h1>

            <div>
                <label>Nombre</label>
                <InputText v-model="form.name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <button type="submit">Guardar</button>
        </form>
    </AuthenticatedLayout>
</template>