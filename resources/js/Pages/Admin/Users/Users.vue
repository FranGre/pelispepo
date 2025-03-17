<template>
    <AuthenticatedLayout>
        <H1 text="Usuarios" />

        <div class="flex justify-between mb-8">
            <BtnPrimary @click="goToCreate()" class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                </svg> Usuario
            </BtnPrimary>

            <div class="flex">
                <Label text="Roles" />
                <select class="select bg-info text-black" v-model="searchForm.role" @change="search()">
                    <option value="">Todos</option>
                    <option v-for="role in props.roles" :key="role.id" :value="role.id">{{ role.name }}</option>
                </select>
            </div>

            <div class="flex">
                <InputText v-model="searchForm.search" />
                <BtnSearch @click="search()"> </BtnSearch>
            </div>
        </div>

        <div v-if="props.users.length == 0" class="flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-mood-empty">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path d="M9 10l.01 0" />
                <path d="M15 10l.01 0" />
                <path d="M9 15l6 0" />
            </svg>
            <H2 text="No hay usuarios" />
        </div>

        <div v-else>
            <div class="overflow-x-auto">
                <table class="table text-lg text-center bg-zinc-300 text-black  dark:bg-zinc-700 dark:text-white">
                    <thead class="text-lg font-bold">
                        <tr>
                            <th>Nombre</th>
                            <th>Activo</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Likes</th>
                        </tr>
                    </thead>
                    <tbody class="bg-zinc-200 text-black dark:bg-zinc-800 dark:text-white">
                        <tr class="hover:bg-zinc-400 text-black dark:hover:bg-zinc-600 dark:text-white" v-for="user in props.users" :key="user.id">
                            <td>{{ user.name }}</td>
                            <td>
                                <Toggle v-model="user.is_activated" @update:model-value="handleActivated(user.id)">
                                </Toggle>
                            </td>
                            <td>{{ user.email }}</td>
                            <td>
                                <select class="select bg-info text-black"
                                    @change="changeUserRole(user.id, ($event.target as HTMLSelectElement).value)">
                                    <option v-for="role in props.roles" :key="role.id"
                                        :selected="role.id == user.role_id" :value="role.id">{{ role.name }}
                                    </option>
                                </select>
                            </td>
                            <td>
                                <button type="button" class="link link-hover" @click="goToViewUserLikes(user.id)"
                                    v-if="user.films_likes_count >= 1">
                                    {{ user.films_likes_count }}
                                </button>

                                <p v-else>0</p>
                            </td>
                            <td>
                                <BtnRemove @click="remove(user.id)" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import H1 from '@/Components/Titles/H1.vue'
import InputText from '@/Components/InputText.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { User } from '@/types'
import { Role } from '@/types/Role'
import { router, useForm } from '@inertiajs/vue3';
import BtnSearch from '@/Components/Buttons/BtnSearch.vue'
import H2 from '@/Components/Titles/H2.vue'
import BtnPrimary from '@/Components/Buttons/BtnPrimary.vue'
import Toggle from '@/Components/Toggle.vue'
import Label from '@/Components/Label.vue'
import BtnRemove from '@/Components/Buttons/BtnRemove.vue'

const props = defineProps<{
    users: User[],
    roles: Role[]
}>()

const urlParams = new URLSearchParams(window.location.search)
const searchForm = useForm({
    search: urlParams.get('search') || '',
    role: urlParams.get('role') || ''
});

function search() {
    searchForm.get(route('admin.users.index'))
}

function changeUserRole(userId: string, roleId: string) {
    const form = useForm({ userId, roleId })
    form.patch(route('admin.users.change.role'))
}

function goToViewUserLikes(userId: string) {
    router.visit(route('admin.users.likes', userId))
}

function goToCreate() {
    router.visit(route('admin.users.create'));
}

function handleActivated(userId: string) {
    router.patch(route('admin.users.toggle.activation', userId));
}

function remove(userId: string) {
    const removeForm = useForm({
        userId
    })

    removeForm.delete(route('admin.users.destroy', removeForm.userId));
}
</script>