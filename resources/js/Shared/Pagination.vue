<script setup>
// import { defineProps } from 'vue';
    defineProps(['links'])
</script>

<template>
    <Component
        :is="link.url? 'Link' : 'span'"
        v-for="link in links"
        :href="link.url"
        v-html="link.label"
        class="px-1"
        :class="link.url? '' : 'text-gray-400'"
    />
</template>

<style scoped>

</style>
