<script setup lang="ts">
import { Gender } from '@/types/Gender';
import { router } from '@inertiajs/vue3';

const props = defineProps<{
    genders: Gender[]
}>();

const goToEdit = (genderId: string) => {
    router.visit(route('admin.genders.edit', genderId));
}
</script>

<template>

    <Head title="Géneros" />
    <AuthenticatedLayout>
        <div>
            <div v-for="gender in props.genders" :key="gender.id" @click="goToEdit(gender.id)">
                <span>{{ gender.name }}</span>
            </div>
        </div>
    </AuthenticatedLayout>
</template>