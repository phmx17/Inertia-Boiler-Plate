<script setup>
import {Link} from "@inertiajs/vue3";
    const props = defineProps({
        href: String,
        method: String,
        data: Object,
        as: String,
        active: Boolean // passed as an expression
    })
</script>

<template>
    <li>
        <Link
            :href="href"
            :method="method"
            :data="data"
            :as="as"
            class="text-blue-500 hover:underline"
            :class="{'font-bold': active}"
        ><slot />
        </Link>
    </li>
</template>

<style scoped>

</style>
