<script setup>
    import {Link} from "@inertiajs/vue3";
    import NavLink from "./NavLink.vue";
</script>

<template>
    <ul class="flex space-x-2 list-inside" >
        <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
<!--            <MenuLink path="/users?dick=ass" title="Users" :class="{'font-bold': $page.url.startsWith('/users') }"></MenuLink>-->
        <NavLink href="/users?dick=ass" :active="$page.component === 'Users'">Users</NavLink>
        <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
        <NavLink href="/logout" method="post" :data="{name: 'Beth Harmon'}" as="button">Logout</NavLink>
    </ul>
</template>

<style scoped>

</style>
b
