<script setup>
import {Link} from "@inertiajs/vue3";
    const props = defineProps({
        title: String,
        path: String,
        method: String,
        data: Object,
        as: String,
    })
</script>

<template>
    <li>
        <Link
            :href="props.path"
            :method="props.method"
            :data="props.data"
            :as="as"
            class="text-blue-500 hover:underline"
        >{{ props.title }}
        </Link>
    </li>
</template>

<style scoped>

</style>
