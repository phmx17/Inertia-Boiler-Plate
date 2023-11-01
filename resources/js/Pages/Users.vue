<script setup>
    import Layout from "../Shared/Layout.vue"; // this will prevent page loads since layout.vue is a child component
    defineOptions({ layout: Layout}) // defineOptions() is installed separately and registered in vite plugins[]
    defineProps({ users: Array})

</script>

<template>
    <Head title="Users" />
    <h1 class="text-3xl">Users</h1>
    <!-- component -->
    <div class="flex flex-col overflow-x-auto">
        <div class="sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b dark:border-neutral-500" v-for="(user, idx) in users" >
                            <td class="whitespace-nowrap px-6 py-4 font-medium" :key="idx">{{ idx }}</td>
                            <td class="whitespace-nowrap px-6 py-4" :key="idx">{{ user.name }}</td>
                            <td class="whitespace-nowrap px-6 py-4" :key="idx">{{ user.email}}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
