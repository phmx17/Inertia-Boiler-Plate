<script setup>
    import {Link} from "@inertiajs/vue3";
    import MenuLink from "./MenuLink.vue";
</script>

<template>
    <nav class="mt-6" >
        <ul class="list-disc" >
            <MenuLink path="/" title="Home" :class="{'font-bold': $page.url === '/'}"></MenuLink>
            <MenuLink path="/users?dick=ass" title="Users" :class="{'font-bold': $page.url.startsWith('/users') }"></MenuLink>
            <MenuLink path="/settings" title="Settings" :class="{'font-bold': $page.url.startsWith('/settings')}"></MenuLink>
            <MenuLink path="/logout" title="Logout" method="post" :data="{name: 'AT-J'}" as="button"></MenuLink>
        </ul>
    </nav>
</template>

<style scoped>

</style>
b
