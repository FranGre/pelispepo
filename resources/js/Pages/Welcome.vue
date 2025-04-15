<template>

    <Head title="PelisPepo" />
    <div class="mx-12 my-10">
        <Link class="flex place-content-end" :href="route('login')">Acceder</Link>

        <H1 text="NocheDePelis" />
        <H2 text="Hazte algo para comer y disfruta :)" />

        <div class="mockup-browser border-base-300 border w-full mt-12">
            <div class="mockup-browser-toolbar">
                <div class="input">https://nochedepelis.xyz</div>
            </div>
            <div class="grid place-content-center border-t border-base-300 h-80">Hola!!!</div>
        </div>
    </div>
</template>

<script setup lang="ts">
import H1 from '@/Components/Titles/H1.vue';
import H2 from '@/Components/Titles/H2.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>
