<script setup lang="ts">
import { Gender } from '@/types/Gender';
import { router } from '@inertiajs/vue3';
import BtnPrimary from '@/Components/Buttons/BtnPrimary.vue';
import BtnEdit from '@/Components/Buttons/BtnEdit.vue';

const props = defineProps<{
    genders: Gender[]
}>();

const goToEdit = (genderId: string) => {
    router.visit(route('admin.genders.edit', genderId));
}

function goToCreate() {
    router.visit(route('admin.genders.create'));
}
</script>

<template>

    <Head title="Géneros" />
    <AuthenticatedLayout>
        <BtnPrimary text="+ Género" @click="goToCreate" />
        <div>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Peliculas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-base-200" v-for="gender in props.genders" :key="gender.id">
                            <td>{{ gender.name }}</td>
                            <td>{{gender.films_count}}</td>
                            <td>
                                <BtnEdit @click="goToEdit(gender.id)">Editar</BtnEdit>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>