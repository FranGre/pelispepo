<template>
    <AuthenticatedLayout>
        <H1 text="Usuarios" />

        <form @submit.prevent="submit" class="mx-32">
            <div class="grid grid-cols-2 gap-6">
                <div class="form-control">
                    <Label text="Nombre" />
                    <InputText v-model="form.name" />
                    <InputError :message="form.errors.name" />
                </div>

                <div class="form-control">
                    <Label text="Email" />
                    <InputText v-model="form.email" />
                    <InputError :message="form.errors.email" />
                </div>

                <div class="form-control">
                    <Label text="Contraseña" />
                    <InputText type="password" v-model="form.password" />
                    <InputError :message="form.errors.password" />
                </div>

                <div class="form-control">
                    <Label text="Rol" />
                    <select class="select" @change="handleRole($event.target.value)">
                        <option value="">Escoga un rol</option>
                        <option v-for="role in props.roles" :key="role.id" :value="role.id">{{ role.name }}</option>
                    </select>
                    <InputError :message="form.errors.role_id" />
                </div>
            </div>

            <div class="mt-12 flex justify-end">
                <BtnSave text="Crear" />
            </div>
        </form>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import BtnSave from '@/Components/Buttons/BtnSave.vue'
import InputError from '@/Components/InputError.vue'
import InputText from '@/Components/InputText.vue'
import Label from '@/Components/Label.vue'
import H1 from '@/Components/Titles/H1.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Role } from '@/types/Role'
import { useForm } from '@inertiajs/vue3'

const props = defineProps<{
    roles: Role[]
}>()

const form = useForm({
    name: '',
    email: '',
    password: '',
    role_id: ''
})

function submit() {
    console.log(form.role_id)
    form.post(route('admin.users.store'))
}

function handleRole(roleId: string) {
    form.role_id = roleId
}

</script>