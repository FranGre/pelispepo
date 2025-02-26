<template>
    <input class="input input-bordered" v-bind="$attrs" :value="modelValue" @input="onInputChange" />
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
