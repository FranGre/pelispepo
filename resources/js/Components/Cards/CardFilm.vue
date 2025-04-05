<template>
    <li class="card rounded-2xl border-2 border-zinc-800 w-full h-full max-w-52 max-h-68 shadow-md cursor-pointer text-center 
    hover:bg-base-200 bg-base-100 text-black 
    dark:bg-zinc-800 dark:hover:bg-zinc-700 dark:text-white" @click="handleClick">

        <div class="max-h-54 relative border-zinc-800 border-b-2">
            <small class="badge absolute top-2 left-2 bg-zinc-900 text-white font-light">{{ new
                Date(props.film.release_date).getFullYear() }}</small>
            <img alt="cover" :src="film.cover_url" class="h-full w-full rounded-t-2xl">
        </div>

        <div class="py-3">
            <h2 class="font-semibold justify-center">{{ film.title.length >= 24 ?
                film.title.substring(0, 18) + '...' :
                film.title }}
            </h2>
        </div>
    </li>
</template>

<script setup lang="ts">
import { Film } from "@/types/Film"

const props = defineProps<{
    film: Film
}>()

//const src = `storage/covers/${props.film.cover?.id}.${props.film.cover?.extension}`

const emit = defineEmits(['click'])

function handleClick() {
    emit('click', props.film.id)
}
</script>