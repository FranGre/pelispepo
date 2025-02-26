<template>
    <div class="card bg-base-100 w-96 shadow-xl cursor-pointer hover:bg-base-200" @click="handleClick">
        <figure>
            <img src="https://img.freepik.com/free-vector/professional-suspense-movie-poster_742173-3470.jpg?t=st=1740609583~exp=1740613183~hmac=43820fa2809557dada099220270107adbf9621bf34183f8d3a79e320d27502e2&w=220"
                alt="Cover" />
        </figure>
        <div class="card-body">
            <h2 class="card-title justify-center">{{ film.title }}</h2>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Film } from "@/types/Film";

const props = defineProps<{
    film: Film
}>()

const emit = defineEmits(['click']);

function handleClick() {
    emit('click', props.film.id);
}
</script>