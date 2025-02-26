<template>
    <button type="button" class="btn btn-active" v-bind="$attrs" @click="handleClick">{{props.text}}</button>
</template>

<script setup lang="ts">
const props = defineProps({
    id: String,
    text: String
});

const emit = defineEmits(['click']);

function handleClick() {
    emit('click', props.id);
}
</script>