<template>
    <button type="button" class="btn btn-neutral" v-bind="$attrs" @click="handleClick">Editar</button>
</template>

<script setup lang="ts">
const props = defineProps({
    id: String
});

const emit = defineEmits(['click']);

function handleClick() {
    emit('click', props.id);
}
</script>