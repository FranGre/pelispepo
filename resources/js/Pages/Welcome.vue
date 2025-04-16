<template>

    <Head title="PelisPepo" />
    <div class="mx-12 my-10">
        <Link class="flex place-content-end" :href="route('login')">Acceder</Link>

        <H1 text="NocheDePelis" />
        <H2 text="Hazte algo para comer y disfruta :)" />

        <div class="mockup-browser border-base-300 border w-full mt-12">
            <div class="mockup-browser-toolbar">
                <div class="input">nochedepelis.xyz</div>
            </div>
            <div class="grid place-content-center border-t border-base-300 h-96 md:h-80">
                <Link class="btn btn-link flex place-content-center mb-4" :href="route('info')">Crear mi cuenta</Link>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 md:gap-6 place-items-center">
                    <div
                        class="card bg-base-200 dark:bg-zinc-800 dark:hover:bg-zinc-700 md:max-w-72 lg:max-w-96 w-full shadow-sm">
                        <div class="card-body">
                            <div class="flex justify-between">
                                <div class="flex gap-1 text-lg">
                                    <div class="card-title">+300</div>Películas
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="card bg-base-200 dark:bg-zinc-800 dark:hover:bg-zinc-700 md:max-w-72 lg:max-w-96 w-full shadow-sm">
                        <div class="card-body">
                            <div class="flex justify-between">
                                <div class="flex gap-1 text-lg">
                                    <div class="card-title">+20</div>Usuarios
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="card bg-base-200 dark:bg-zinc-800 dark:hover:bg-zinc-700 md:max-w-72 lg:max-w-96 w-full shadow-sm">
                        <div class="card-body">
                            <div class="flex justify-between">
                                <div class="flex gap-1 text-lg">
                                    <div class="card-title">+2000</div>Visitas
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import H1 from '@/Components/Titles/H1.vue';
import H2 from '@/Components/Titles/H2.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>
