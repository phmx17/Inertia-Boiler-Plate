<script setup>
    import {ref} from "vue";
    import {Link} from "@inertiajs/vue3";
    import Navigation from "../Shared/Navigation.vue";

    const props = defineProps({
        title: String,
        frameworks: Array,
        time: String
    })

    const title = ref(props.title)
    const frameworks = ref(props.frameworks)
</script>

<template>
    <h1 class="text-4xl font-bold">{{ title }}</h1>
    <Navigation></Navigation>
    <p class="mt-4" >We will be using the following frameworks:</p>
    <ul >
        <li v-for="fw of frameworks" v-text="fw"></li>
    </ul>

    <div style="margin-top: 700px; padding: 20px 0; text-align: center" >
        <p>Current Time</p>
        <p>{{ props.time }}</p>
        <Link href="/settings" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" preserve-scroll>Update Time</Link>

    </div>
</template>

<style scoped>

</style>
