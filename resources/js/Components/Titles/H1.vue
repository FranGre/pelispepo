<template>
    <h1 class="mt-6 mb-16 flex justify-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white"
        v-bind="$attrs">{{ text }}</h1>
</template>

<script setup lang="ts">
defineProps({
    text: String
})
</script>