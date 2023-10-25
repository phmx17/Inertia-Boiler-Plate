<script setup>
    import {Link} from "@inertiajs/vue3";
    import NavLink from "./NavLink.vue";
</script>

<template>
    <nav class="mt-6" >
        <ul class="list-disc" >
            <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
<!--            <MenuLink path="/users?dick=ass" title="Users" :class="{'font-bold': $page.url.startsWith('/users') }"></MenuLink>-->
            <NavLink href="/users?dick=ass" :active="$page.component === 'Users'">Users</NavLink>
            <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
            <NavLink href="/logout" method="post" :data="{name: 'AT-J'}" as="button">Logout</NavLink>
        </ul>
    </nav>
</template>

<style scoped>

</style>
b
