<template>
    <Head><title>Users</title></Head>

    <div class="flex justify-between mb-6 ">
        <h1 class="text-3xl">
            Users
        </h1>

        <input v-model="search" type="text" placeholder="search..." class="border px-2 rounded-lg" />
    </div>

    <table class="min-w-full border rounded-[20px] divide-y divide-gray-200 overflow-x-auto">
        <tbody class="bg-white divide-y divide-gray-200">
        <tr v-for="user in users.data" :key="user.id">
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">

                        <div class="text-sm font-medium text-gray-900">
                            {{ user.name}}
                        </div>
                </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                <a href="#" class="ml-2 text-red-600 hover:text-red-900">Delete</a>
            </td>
        </tr>

        </tbody>
    </table>


<!--    paginator-->
<Pagination :links="users.links" class="mt-6"/>

</template>

<script>
import Layout from "../Shared/Layout.vue";
import Pagination from "../Shared/Pagination.vue";
import { ref , watch} from 'vue';
import {Inertia} from "@inertiajs/inertia";


export default {
    components: {Pagination },
    layout: Layout,

    props:{
      users: Object,
        filters: Object
    },
    setup() {
        const search = ref('');


        watch(search, value => {
            Inertia.get('/users', {search:value}, {
                preserveState:true
            });
        });

        return {
            search,
        };
    },
};
</script>
