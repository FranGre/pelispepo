<template>
    <h2 class="text-center text-4xl font-extrabold dark:text-white">{{ text }}</h2>
</template>

<script setup lang="ts">
    defineProps({
        text: String
    })
</script>