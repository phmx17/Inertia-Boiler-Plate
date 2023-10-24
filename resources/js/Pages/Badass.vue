<script setup>
    import {ref} from "vue";

    const props = defineProps({
        name: {
            type: String
        }
    })
    const name = ref(props.name)

</script>

<template>
    <h1>The one that says {{ name }} on it</h1>
    <a :href="route('welcome')">return to welcome</a>

</template>

<style scoped>

</style>
