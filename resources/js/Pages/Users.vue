<script setup>
    import Layout from "../Shared/Layout.vue"; // this will prevent page loads since layout.vue is a child component
    defineOptions({ layout: Layout}) // defineOptions() is installed separately and registered in vite plugins[]

</script>

<template>
    <Head title="Users" />
    <h1 class="text-3xl">Users</h1>
</template>

<style scoped>

</style>
