<template>
    <AuthenticatedLayout>
        <div class="mx-20">

            <H1 text="Usuarios" />

            <div class="flex justify-end mb-8">
                <InputText v-model="inputText" />
                <BtnSearch @click="search()"> </BtnSearch>
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
                    <table class="table text-lg text-center">
                        <thead class="text-lg font-bold">
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Likes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-base-200" v-for="user in props.users" :key="user.id">
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    <select class="select" @change="changeUserRole(user.id, $event.target.value)">
                                        <option v-for="role in props.roles" :key="role.id"
                                            :selected="role.id == user.role_id" :value="role.id">{{ role.name }}
                                        </option>
                                    </select>
                                </td>
                                <td>{{ user.films_likes_count }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
import { useForm } from '@inertiajs/vue3';
import BtnSearch from '@/Components/Buttons/BtnSearch.vue'
import H2 from '@/Components/Titles/H2.vue'

const props = defineProps<{
    users: User[],
    roles: Role[]
}>()

let inputText = ''

function search() {
    const form = useForm({ search: inputText })

    form.get(route('admin.users.index'))
}

function changeUserRole(userId: number, roleId: string) {
    const form = useForm({ userId, roleId })
    form.patch(route('admin.users.change.role'))
}


</script>