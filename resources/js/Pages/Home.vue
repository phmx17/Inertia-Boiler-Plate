<!--<script>-->
<!--    import Layout from "../Shared/Layout.vue";-->

<!--    export default {-->
<!--        layout: Layout-->
<!--    }-->
<!--</script>-->

<script setup>
// can use both script tags; use 'layout: Layout' in order to remove tags in template - kewl!

    import {Head} from "@inertiajs/vue3"; // set head tags dynamically
    import Layout from "../Shared/Layout.vue"; // this will prevent page loads since layout.vue is a child component
    defineOptions({ layout: Layout}) // defineOptions() is installed separately and registered in vite plugins[]
</script>

<template>
    <Head>
        <title>Home</title>
        <meta type="description" content="Home Information" head-key="description" />
    </Head>
    <h1 class="text-3xl">Home</h1>

</template>

<style scoped>

</style>
