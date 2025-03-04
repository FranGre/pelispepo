<template>
    <li class="card bg-base-100 max-w-48 w-auto shadow-md cursor-pointer hover:bg-base-200 text-center"
        @click="handleClick">
        <div class="card-body">
            <h2 class="card-title justify-center">{{ film.title }}</h2>
        </div>
    </li>
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