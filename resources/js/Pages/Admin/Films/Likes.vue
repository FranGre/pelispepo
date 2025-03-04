<template>
    <AuthenticatedLayout>
        <H1 :text="props.film.title" class="mb-3" />
        <H2 text="usuarios que han dado like" class="font-thin" />

        <ul class="list mt-6 flex gap-5">
            <li class="list-row" v-for="user in props.users" :key="user.id">{{ user.name }}</li>
        </ul>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import H1 from '@/Components/Titles/H1.vue'
import H2 from '@/Components/Titles/H2.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { User } from '@/types'
import { Film } from '@/types/Film'

const props = defineProps<{
    film: Film,
    users: User[]
}>()
</script>