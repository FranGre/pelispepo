<template>
    <li class="card rounded-2xl hover:bg-base-200 bg-base-100 w-full h-full max-w-52 max-h-68 shadow-md cursor-pointer text-center"
        @click="handleClick">

        <div class="max-h-54 relative">
            <small class="badge absolute top-2 left-2">{{ new Date(props.film.release_date).getFullYear() }}</small>
            <img alt="cover" :src="src" class="h-full w-full rounded-t-2xl">
        </div>

        <div class="py-3">
            <h2 class="card-title justify-center">{{ film.title }}</h2>
        </div>
    </li>
</template>

<script setup lang="ts">
import { Film } from "@/types/Film"

const props = defineProps<{
    film: Film
}>()

const src = `storage/covers/${props.film.cover?.id}.${props.film.cover?.extension}`

const emit = defineEmits(['click'])

function handleClick() {
    emit('click', props.film.id)
}
</script>