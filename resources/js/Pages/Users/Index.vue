<script setup>
// set up the layout incl main nav
    import Layout from "../../Shared/Layout.vue"; // this will prevent page loads since layout.vue is a child component
    defineOptions({ layout: Layout}) // defineOptions() is installed separately and registered in vite plugins[]
    import Pagination from "../../Shared/Pagination.vue";
    import { ref, watch } from "vue"
    import { router } from '@inertiajs/vue3'
    import { throttle, debounce } from "lodash"
    import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";


    const { filters, flash } = defineProps({
        users: Object, // used in template therefore does not require destructure
        filters: Object, // comes back from api when there is an active search; keeps search box populated
        flash: Object
    })

    let search = ref(filters.search) // no .value !!
    watch(search, debounce(value => {
        console.log("triggered")
        router.get('/users', {search: value}, {
            preserveState: true,    // keep page from refreshing
            replace: true   // prevent browser history from filling up for each char search
        })
    }, 500))
</script>

<template>
    <Head title="Users" />
    <div class="flex justify-between mb-6">
        <div class="flex items-end ">
            <h1 class="text-3xl">Users</h1>
            <Link href="/users/create" class="text-blue-500 ml-6 " >create new</Link>
<!--            <Link href="/users/create" class="ml-6 " ><font-awesome-icon :icon="['fas', 'magnifying-glass']" /></Link>-->

        </div>
        <input type="text" placeholder="Search..." v-model="search" class="p-2 border rounded-md " />
    </div>
    <!--    success message after create new user form-->
    <div v-if="$page.props.flash.success" class="bg-green-200 w-full  text-center py-2 rounded-md " >
        {{ $page.props.flash.success }}
    </div>

    <!-- component -->
    <div class="flex flex-col overflow-x-auto">
        <div class="sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">Id</th>
                            <th scope="col" class="px-6 py-4">Username</th>
                            <th scope="col" class="px-6 py-4">Email</th>
                            <th scope="col" class="px-6 py-4">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b dark:border-neutral-500" v-for="(user, idx) in users.data" >
                            <td class="whitespace-nowrap px-6 py-4 font-medium" :key="idx">{{ user.id }}</td>
                            <td class="whitespace-nowrap px-6 py-4" :key="idx">{{ user.name }}</td>
                            <td class="whitespace-nowrap px-6 py-4" :key="idx">{{ user.email}}</td>
                            <td class="whitespace-nowrap px-6 py-4" :key="idx">
                                <Link :href="`/users/${user.id}/edit`" class="font-medium text-indigo-600 hover:text-yellow-300">Edit</Link>
                            </td>

                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--    paginator  -->
    <div class="mt-6 flex justify-center w-1/2 mx-auto">
        <Pagination :links="users.links" />
    </div>

</template>

<style scoped>

</style>
