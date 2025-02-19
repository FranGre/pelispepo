<script setup lang="ts">
import { Gender } from '@/types/Gender';

const props = defineProps<{
    genders: Gender[]
}>();
</script>

<template>

    <Head title="Géneros" />
    <AuthenticatedLayout>
        <div>
            <div v-for="gender in props.genders" v-key="gender.id">
                <span>{{ gender.name }}</span>
            </div>
        </div>
    </AuthenticatedLayout>
</template>