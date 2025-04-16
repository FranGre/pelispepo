<template>

    <Head title="Info" />

    <Link :href="route('welcome')">
    <H1 text="NocheDePelis"></H1>
    </Link>

    <div class="mx-12">
        <div class="grid gap-4">
            <div tabindex="0" class="collapse bg-base-100 border-base-300 border">
                <div class="collapse-title font-semibold">¿Cómo obtengo una cuenta?</div>
                <div class="collapse-content text-sm">
                    Mándame un mail a <strong>frangregori61@gmail.com</strong> con el plan que te interesa
                    <strong>(Mensual,
                        Trimestral o Anual)</strong> y te
                    creo tu cuenta enseguida.
                </div>
            </div>
            <div tabindex="0" class="collapse bg-base-100 border-base-300 border">
                <div class="collapse-title font-semibold">¿Cómo se realiza el pago?</div>
                <div class="collapse-content text-sm">
                    Aceptamos pagos a través de <strong>Bizum o PayPal.</strong>
                    Una vez que me envíes un correo a <strong>frangregori61@gmail.com</strong> con el plan de suscripción que has escogido, te daremos los datos para completar el pago.
                </div>
            </div>

            <div tabindex="0" class="collapse bg-base-100 border-base-300 border">
                <div class="collapse-title font-semibold">¿Puedo cancelar cuando quiera?</div>
                <div class="collapse-content text-sm">
                    <strong>Sí</strong>, puedes cancelar tu suscripción en cualquier momento.
                    <br>
                    Ten en cuenta que <strong>no se realizan devoluciones del importe ya pagado.</strong>
                </div>
            </div>
        </div>

        <H2 text="Suscripciones" class="mt-12 mb-6"></H2>
        <div class="grid gap-5 place-items-center grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
            <div class="card w-96 bg-base-100 shadow-sm">
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <h2 class="text-3xl font-bold">Mensual</h2>
                        <span class="text-xl">2,5€/mes</span>
                    </div>
                    <ul class="mt-6 flex flex-col gap-2 text-xs">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>12 pagos al año</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Libertad total</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Más de 300 películas</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Sin anuncios</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="mailto:frangregori61@gmail.com?Subject=nochedepelis%20Quiero%20el%20plan%20mensual"
                            class="btn btn-primary btn-block">Obtener</a>
                    </div>
                </div>
            </div>

            <div class="card w-96 bg-base-200 shadow-sm">
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <h2 class="text-3xl font-bold">Trimestral</h2>
                        <span class="text-xl">2€/mes</span>
                    </div>
                    <ul class="mt-6 flex flex-col gap-2 text-xs">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>4 pagos al año</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Ahorra un 20%</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Más de 300 películas</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Sin anuncios</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="mailto:frangregori61@gmail.com?Subject=nochedepelis%20Quiero%20el%20plan%20trimestral"
                            class="btn btn-primary btn-block">Obtener</a>
                    </div>
                </div>
            </div>

            <div class="card w-96 bg-base-100 shadow-sm">
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <h2 class="text-3xl font-bold">Anual</h2>
                        <span class="text-xl">18€/año</span>
                    </div>
                    <ul class="mt-6 flex flex-col gap-2 text-xs">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>1 pago al año</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>¡La mejor oferta! Ahorra un 40%</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Más de 300 películas</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 me-2 inline-block text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Sin anuncios</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="mailto:frangregori61@gmail.com?Subject=nochedepelis%20Quiero%20el%20plan%20anual"
                            class="btn btn-primary btn-block">Obtener</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup lang="ts">
import H1 from '@/Components/Titles/H1.vue';
import H2 from '@/Components/Titles/H2.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>
