<script setup>
    import {Link} from "@inertiajs/vue3";
    import NavLink from "./NavLink.vue";
</script>

<template>
    <ul class="flex space-x-6" >
        <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
<!--            <MenuLink path="/users?dick=ass" title="Users" :class="{'font-bold': $page.url.startsWith('/users') }"></MenuLink>-->
        <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>
        <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
        <NavLink
            v-if="$page.props.auth.user.username !== 'guest'"
            href="/logout">
            Logout
        </NavLink>
    </ul>
</template>

<style scoped>

</style>

