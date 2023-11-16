<script setup>
    const { validationErrors } = defineProps(['validationErrors'])
</script>

<template>
    <div v-if="validationErrors.length > 0"  >
        <ul v-for="(error, idx) in validationErrors">
            <li :key="idx"><span class="text-xs text-red-600" >{{ error }}</span></li>
        </ul>
    </div>
</template>

<style scoped>

</style>
