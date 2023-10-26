<script setup>
    import Navigation from "./Navigation.vue";
</script>

<template>
    <section class="px-6 bg-gray-200">
        <header class="flex justify-between content-center flex-wrap h-12 " >
            <h1 class="font-bold text-lg">My App</h1>
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
