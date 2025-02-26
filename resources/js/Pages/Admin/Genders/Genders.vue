<script setup lang="ts">
import { Gender } from '@/types/Gender';
import { router } from '@inertiajs/vue3';
import BtnPrimary from '@/Components/Buttons/BtnPrimary.vue';

const props = defineProps<{
    genders: Gender[]
}>();

const goToEdit = (genderId: string) => {
    router.visit(route('admin.genders.edit', genderId));
}

function goToCreate(){
    router.visit(route('admin.genders.create'));
}
</script>

<template>

    <Head title="Géneros" />
    <AuthenticatedLayout>
        <BtnPrimary text="+ Género" @click="goToCreate"/>
        <div>
            <div v-for="gender in props.genders" :key="gender.id" @click="goToEdit(gender.id)">
                <span>{{ gender.name }}</span>
            </div>
        </div>
    </AuthenticatedLayout>
</template>