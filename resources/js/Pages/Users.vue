<template>
    <h1 className="font-bold text-2xl">
        Users
    </h1>

    <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
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

export default {
    components: {Pagination },
    layout: Layout,

    props:{
      users: Object,
    },
};
</script>
