<template>
    <textarea class="textarea textarea-bordered w-full" v-bind="$attrs" :value="modelValue" @input="onInputChange"></textarea>
</template>

<script setup lang="ts">
const props = defineProps({
    modelValue: String
});

const emit = defineEmits<{
    (event: 'update:modelValue', value: string): void;
}>();

const onInputChange = (event: Event) => {
    const input = (event.target as HTMLInputElement).value;
    emit('update:modelValue', input);
};
</script>