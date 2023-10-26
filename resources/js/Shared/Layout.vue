<script setup>
    import {computed , ref , defineProps } from "vue";
    import Navigation from "./Navigation.vue";

    // const username = ref(props.auth.user.username)
    // const currentPage = $page.value
    // console.log('user name: ', currentPage)
    // const props = (defineProps({ page: page}))

    // I don't know how to access $props in here
    // const username = computed(() => $page.props.auth.user.username)


</script>

<template>
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
