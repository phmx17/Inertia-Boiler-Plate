<script setup>
    import NavLink from "../../Shared/NavLink.vue";
</script>

<template>
    <Head title="Logged  out" />

    <main class="grid place-items-center min-h-screen" >
        <div class="flex flex-col justify-center border rounded-xl p-6">
            <h1 class="text-3xl" >Logged Out</h1>
            <NavLink :href="Login">Login</NavLink>
        </div>
    </main>
</template>


