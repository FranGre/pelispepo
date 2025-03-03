<template>
    <input type="checkbox" class="toggle toggle-success" :checked="modelValue" @change="handleChange" />
</template>

<script setup lang="ts">
import { defineProps, defineEmits } from 'vue';

const props = defineProps({
    modelValue: Boolean,
});

const emit = defineEmits(['update:modelValue']);

function handleChange(event: Event) {
    emit('update:modelValue', (event.target as HTMLInputElement).checked);
}
</script>