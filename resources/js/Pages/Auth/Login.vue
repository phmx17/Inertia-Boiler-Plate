<script setup>
// set up the layout incl main nav
// import Layout from "../../Shared/Layout.vue" // this will prevent page loads since layout.vue is a child component
// defineOptions({ layout: Layout}) // defineOptions() is installed separately and registered in vite plugins[]
import { useForm } from "@inertiajs/vue3" // form on steroids
import ValidationErrors from "../Components/ValidationErrors.vue"

const form = useForm({
    email: null,
    password: null
})

// form submission
const submit = () => {
    form.post('/login')
}

</script>

<template>
    <Head title="Users" />

    <main class="grid place-items-center min-h-screen" >
        <div class="flex flex-col justify-center border rounded-xl p-6">
            <h1 class="text-3xl" >Login</h1>
                <form @submit.prevent="submit" class="py-2 ">
                    <div class="mt-4" >
                        <label for="name" class="block text-xs font-bold mb-2">Email:</label>
                        <input required type="email" id="email" v-model="form.email" class="p-2 border rounded-md w-full " />
                        <ValidationErrors :validationError="form.errors.email" />
                    </div>
                    <div class="mt-4" >
                        <label for="name" class="block text-xs font-bold mb-2">Password:</label>
                        <input  required type="password" id="password" v-model="form.password" class="p-2 border rounded-md w-full " />
                        <ValidationErrors :validationError="form.errors.password" />
                    </div>

                    <div class="mt-4">
                        <button
                            type="submit"
                            class="font-bold text-white bg-blue-600 hover:bg-blue-500 p-3 rounded-md w-full mt-2"
                            :disabled="form.processing"
                        >Submit
                        </button>
                    </div>
                </form>
        </div>

    </main>


</template>

<style scoped>

</style>
