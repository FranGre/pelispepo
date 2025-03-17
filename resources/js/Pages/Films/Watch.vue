<template>
    <AuthenticatedLayout>
        <div class="text-center items-center">
            <H1 :text="film.title" />

            <p class="text-xl">{{ film.description }}</p>

            <div class="stats shadow mb-6 max-w-64 mt-6">
                <div class="stat cursor-pointer dark:bg-zinc-800 dark:hover:bg-zinc-700 hover:bg-slate-100" @click="handleLike(props.film.id)">
                    <div class="stat-title">Likes</div>
                    <div class="flex justify-around">
                        <div class="stat-value text-primary">{{ likesCounter }}</div>
                        <div class="stat-figure text-primary">
                            <svg v-if="!hasLike" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-thumb-up h-8 w-8">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                            </svg>
                            <svg v-else xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor"
                                class="icon icon-tabler icons-tabler-filled icon-tabler-thumb-up h-8 w-8">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M13 3a3 3 0 0 1 2.995 2.824l.005 .176v4h2a3 3 0 0 1 2.98 2.65l.015 .174l.005 .176l-.02 .196l-1.006 5.032c-.381 1.626 -1.502 2.796 -2.81 2.78l-.164 -.008h-8a1 1 0 0 1 -.993 -.883l-.007 -.117l.001 -9.536a1 1 0 0 1 .5 -.865a2.998 2.998 0 0 0 1.492 -2.397l.007 -.202v-1a3 3 0 0 1 3 -3z" />
                                <path
                                    d="M5 10a1 1 0 0 1 .993 .883l.007 .117v9a1 1 0 0 1 -.883 .993l-.117 .007h-1a2 2 0 0 1 -1.995 -1.85l-.005 -.15v-7a2 2 0 0 1 1.85 -1.995l.15 -.005h1z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="stat cursor-pointer dark:bg-zinc-800 dark:hover:bg-zinc-700 hover:bg-slate-100" @click="handleFavorite(props.film.id)">
                    <div class="stat-title text-center">Favoritos</div>
                    <div class="flex justify-center">
                        <div class="stat-figure text-primary">
                            <svg v-if="!hasFavorite" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-heart h-8 w-8">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>

                            <svg v-else xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor"
                                class="icon icon-tabler icons-tabler-filled icon-tabler-heart h-8 w-8">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <iframe :src="film.url" width="1024" height="768" allowfullscreen="true" allow="autoplay" class="aspect-video"></iframe>
            </div>

        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import H1 from '@/Components/Titles/H1.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Film } from '@/types/Film';
import { useForm } from '@inertiajs/vue3';

const props = defineProps<{
    film: Film,
    likesCounter: number,
    hasLike: boolean,
    hasFavorite: boolean
}>();

console.log(props.film.url)

const form = useForm({
    filmId: props.film.id
});

function handleLike(filmId: string) {
    form.post(route('films.like'));
}

function handleFavorite(filmId: string) {
    form.post(route('films.favorite'));
}
</script>