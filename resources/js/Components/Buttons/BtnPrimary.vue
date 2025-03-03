<template>
    <button type="button" class="btn btn-active" v-bind="$attrs" @click="handleClick">
        <slot></slot>
    </button>
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