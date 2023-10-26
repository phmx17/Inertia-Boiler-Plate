<script setup>
    import {ref} from "vue";
    import {Link} from "@inertiajs/vue3";
    import Layout from "../Shared/Layout.vue";

    const props = defineProps({
        title: String,
        frameworks: Array,
        time: String
    })

    const title = ref(props.title)
    const frameworks = ref(props.frameworks)
</script>

<template>
    <Layout>
        <h1 class="text-3xl">Settings</h1>
        <p class="mt-4" >We will be using the following frameworks:</p>
        <ul >
            <li v-for="fw of frameworks" v-text="fw"></li>
        </ul>

        <div style="margin-top: 600px; padding: 20px 0; text-align: center" >
            <p>Current Time</p>
            <p>{{ props.time }}</p>
            <Link href="/settings" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" preserve-scroll>Update Time</Link>
        </div>
    </Layout>

</template>

<style scoped>

</style>
