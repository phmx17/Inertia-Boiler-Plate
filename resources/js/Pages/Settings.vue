<script setup>
    import Layout from "../Shared/Layout.vue"; // this will prevent page loads since layout.vue is a child component
    defineOptions({ layout: Layout}) // defineOptions() is installed separately and registered in vite plugins[]

    defineProps({
        title: String,
        frameworks: Array,
        time: String
    })
</script>

<template>
    <Head title="Setings" ></Head>
    <h1 class="text-3xl">{{ title }}</h1>
    <p class="mt-4">We will be using the following frameworks:</p>
    <ul >
        <li v-for="fw of frameworks" v-text="fw"></li>
    </ul>

    <div style="margin-top: 600px; padding: 20px 0; text-align: center" >
        <p>Current Time</p>
        <p>{{ time }}</p>
        <Link href="/settings" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" preserve-scroll>Update Time</Link>
    </div>

</template>

<style scoped>

</style>
