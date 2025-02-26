<template>
    <button type="submit" v-bind="$attrs" class="btn btn-success">{{ text }}</button>
</template>

<script setup lang="ts">
defineProps({
    text: String
});
</script>