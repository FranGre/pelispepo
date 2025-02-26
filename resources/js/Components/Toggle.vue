<template>
    <div class="form-control">
        <label class="label cursor-pointer">
            <span class="label-text">{{ label }}</span>
            <input type="checkbox" class="toggle toggle-success" :checked="modelValue" @change="handleChange" />
        </label>
    </div>
</template>

<script setup lang="ts">
import { defineProps, defineEmits } from 'vue';

const props = defineProps({
    modelValue: Boolean,
    label: String
});

const emit = defineEmits(['update:modelValue']);

function handleChange(event: Event) {
    emit('update:modelValue', (event.target as HTMLInputElement).checked);
}
</script>