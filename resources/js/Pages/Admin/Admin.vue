<template>
    <AuthenticatedLayout>
        <H1 text="Admin" />

        <div class="flex justify-around">
            <div @click="goToViewFilms()"
                class="card bg-base-200 w-96 shadow-sm hover:cursor-pointer hover:bg-base-300">
                <div class="card-body">
                    <div class="flex justify-between">
                        <div class="flex gap-1 text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-device-tv-old">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                <path d="M16 3l-4 4l-4 -4" />
                                <path d="M15 7v13" />
                                <path d="M18 15v.01" />
                                <path d="M18 12v.01" />
                            </svg>
                            Películas
                        </div>
                        <div class="card-title">{{ filmsCounter }}</div>
                    </div>
                </div>
            </div>
            <div @click="goToViewGenders()"
                class="card bg-base-200 w-96 shadow-sm hover:cursor-pointer hover:bg-base-300">
                <div class="card-body">
                    <div class="flex justify-between">
                        <div class="flex gap-1 text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-tag">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path
                                    d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z" />
                            </svg>
                            Géneros
                        </div>
                        <div class="card-title">{{ gendersCounter }}</div>
                    </div>
                </div>
            </div>
            <div @click="goToViewUsers()"
                class="card bg-base-200 w-96 shadow-sm hover:cursor-pointer hover:bg-base-300">
                <div class="card-body">
                    <div class="flex justify-between">
                        <div class="flex gap-1 text-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            Usuarios
                        </div>
                        <div class="card-title">{{ usersCounter }}</div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import H1 from '@/Components/Titles/H1.vue'
import { router } from '@inertiajs/vue3'

defineProps({
    filmsCounter: Number,
    gendersCounter: Number,
    usersCounter: Number
})

function goToViewFilms() {
    router.visit(route('admin.films.index'))
}

function goToViewGenders() {
    router.visit(route('admin.genders.index'))
}

function goToViewUsers() {
    router.visit(route('admin.users.index'))
}
</script>