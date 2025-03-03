<template>
    <button v-bind="$attrs" type="button" :class="{
        'btn btn-outline m-2': !isSelected,
        'btn btn-active m-2': isSelected
    }" @click="click(gender.id)">
        {{ gender.name }}
    </button>
</template>

<script setup lang="ts">
import { Gender } from '@/types/Gender'

const props = defineProps<{
    gender: Gender,
    isSelected: boolean
}>()

function click(genderId: string) {
    emit('click', genderId)
}

const emit = defineEmits(['click'])
</script>