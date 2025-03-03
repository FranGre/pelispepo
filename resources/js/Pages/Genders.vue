<template>
    <GenderTag v-for="gender in props.genders" :key="gender.id" :gender="gender" @click="handleGender"
        :is-selected="selectedGendersIds.includes(gender.id)"></GenderTag>
</template>

<script setup lang="ts">
import GenderTag from '@/Components/Tags/GenderTag.vue';
import { Gender } from '@/types/Gender'
import { ref } from 'vue';

const props = defineProps<{
    genders: Gender[]
}>()

let selectedGendersIds = ref([] as string[])

function handleGender(genderId: string) {
    if (selectedGendersIds.value.includes(genderId)) {
        selectedGendersIds.value = selectedGendersIds.value.filter((item) => item != genderId)
    } else {
        selectedGendersIds.value.push(genderId)
    }
    console.log(selectedGendersIds.value)
}

</script>