<template>
    <nav class="relative flex justify-center mt-8">
        <template v-for="link in pagination.links" :key="link.label">
            <Link preserve-scroll :href="getLinkUrl(link.url)" v-html="link.label"
                class="flex items-center justify-center px-3 py-2 text-base rounded-lg text-gray-600"
                :class="{ 'bg-gray-200': link.active, '!text-gray-300': !link.url }" />
        </template>
    </nav>
</template>

<script lang="ts" setup>
import { Link, usePage } from '@inertiajs/vue3'

const page = usePage()

const query = new URLSearchParams(page.url.split('?')[1])

defineProps({
    pagination: Object
})

function getLinkUrl(rawUrl: string): string {
    if (!rawUrl) return '';

    const currentParams = new URLSearchParams(window.location.search);
    const newPage = new URL(rawUrl).searchParams.get('page')

    currentParams.set('page', newPage);

    return window.location.pathname + '?' + currentParams.toString();
}
</script>
