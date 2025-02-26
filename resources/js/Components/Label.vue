<template>
    <label class="label" v-bind="$attrs">{{ text }}</label>
</template>

<script setup lang="ts">
defineProps({
    text: String
})
</script>