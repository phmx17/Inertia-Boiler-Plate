<script setup>
    import { Head } from "@inertiajs/vue3"; // set head tags dynamically; - redundant right here, since it is imported in app.js already
    import {computed , ref , defineProps } from "vue";
    import Navigation from "./Navigation.vue";

    // I don't know how to access global $props in here
    // const username = computed(() => $page.props.auth.user.username)

</script>

<template>
    <Head>
        <title>My App</title>   <!-- setting a default for title -->
        <meta type="description" content="Site Information" head-key="description" />   <!-- setting a default for meta -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </Head>

    <section class="px-6 bg-gray-200">
        <header class="flex justify-between items-center flex-wrap h-12 " >
            <div class="flex items-center ">
                <h1 class="font-bold text-lg">My App</h1>
                <p class="ml-4" >Welcome back {{ $page.props.auth.user.username }}</p>
            </div>
            <Navigation/>
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto " >
            <slot />

        </div>
    </section>
</template>

<style scoped>

</style>
