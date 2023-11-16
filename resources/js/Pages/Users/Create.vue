<script setup>
    // set up the layout incl main nav
    import Layout from "../../Shared/Layout.vue"; // this will prevent page loads since layout.vue is a child component
    defineOptions({ layout: Layout}) // defineOptions() is installed separately and registered in vite plugins[]
    import { reactive, ref } from "vue";
    import {router} from "@inertiajs/vue3";
    import ValidationErrors from "../Components/ValidationErrors.vue";

    const form = reactive({
        name: null,
        email: null,
        password: null
    })
    const { errors } = defineProps({
        errors: Object
    })

    // form submission
    const submit = () => router.post('/users/create', form)

</script>

<template>
    <Head title="Users" />
    <h1 class="text-3xl">Create User</h1>
    <!--    errors-->
    <div v-if="Object.keys(errors).length > 0">
        <p>Please correct the following:</p>
        <ul v-for="(value, key) in errors" >
            <li :key="key">
                <ul v-for="(error, idx) in value">
                    <li :key="idx">{{ error }}</li>
                </ul>
            </li>
        </ul>
    </div>

    <!--    Create User form -->
    <div class="flex max-w-md mx-auto " >
        <form @submit.prevent="submit" class="w-full py-2 ">
            <div class="mt-4" >
                <label for="name" class="block text-xs font-bold mb-2 " >Name:</label>
                <input type="text" id="name" v-model="form.name" class="p-2 border rounded-md w-full " />
                <ValidationErrors :validationErrors="errors.name ? errors.name : [] " />
            </div>
            <div class="mt-4" >
                <label for="name" class="block text-xs font-bold mb-2 " >Email:</label>
                <input required type="email" id="email" v-model="form.email" class="p-2 border rounded-md w-full " />
                <ValidationErrors :validationErrors="errors.email ? errors.email: []" />
            </div>
            <div class="mt-4" >
                <label for="name" class="block text-xs font-bold mb-2 " >Password:</label>
                <input  required type="password" id="password" v-model="form.password" class="p-2 border rounded-md w-full " />
                <ValidationErrors :validationErrors="errors.password ? errors.password: []" />
            </div>

            <div class="mt-4">
                <button type="submit" class="font-bold text-white bg-blue-600 hover:bg-blue-500 p-3 rounded-md w-full mt-2">Submit</button>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
