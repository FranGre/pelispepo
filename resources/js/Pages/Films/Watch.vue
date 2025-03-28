<template>

    <Head title="PelisPepo"></Head>

    <AuthenticatedLayout>
        <div class="text-center items-center">
            <H1 :text="film.title" />

            <div class="flex justify-center gap-10 mb-6">
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                    </svg>
                    <small class="text-base">{{ views_count }}</small>
                </div>
                <div class="cursor-pointer" @click="handleFavorite(props.film.id)">
                    <svg v-if="!hasFavorite" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart h-8 w-8">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                    </svg>

                    <svg v-else xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-heart h-8 w-8">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z" />
                    </svg>
                </div>
            </div>

            <p class="text-xl mb-4">{{ film.description }}</p>

            <div class="flex justify-center">
                <iframe :src="film.url" width="1024" height="768" allowfullscreen="true" allow="autoplay"
                    class="aspect-video rounded-xl"></iframe>
            </div>

        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import H1 from '@/Components/Titles/H1.vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Film } from '@/types/Film'
import { Head, useForm } from '@inertiajs/vue3'
import { onMounted } from 'vue'

const props = defineProps<{
    film: Film,
    views_count: number,
    hasLike: boolean,
    hasFavorite: boolean
}>()

onMounted(() => {
    const viewForm = useForm({
        filmId: props.film.id
    })

    viewForm.post(route('views.store'));
})

const form = useForm({
    filmId: props.film.id
})

function handleFavorite(filmId: string) {
    form.post(route('films.favorite'))
}
</script>