<template>
    <li class="card p-2 rounded-2xl hover:bg-base-200 bg-base-100 w-52 h-64 max-w-52 max-h-64 shadow-md cursor-pointer text-center"
        @click="handleClick">
        <img alt="cover" :src="src" class="object-fill">
        <div class="p-1">
            <h2 class="card-title justify-center">{{ film.title }}</h2>
        </div>
    </li>
</template>

<script setup lang="ts">
import { Film } from "@/types/Film"

const props = defineProps<{
    film: Film
}>()

const src = `storage/covers/${props.film.cover.id}.${props.film.cover.extension}`

const emit = defineEmits(['click'])

function handleClick() {
    emit('click', props.film.id)
}
</script>