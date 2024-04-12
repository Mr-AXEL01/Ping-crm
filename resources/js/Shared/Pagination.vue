<template>
    <div>
        <component
            :is="link.url ? 'Link' : 'span'"
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
            class="inline-block px-3 py-1 rounded-md bg-blue-100  mr-2"
            :class="{'bg-gray-500': ! link.url, 'font-bold bg-blue-400' :link.active}"
        />
    </div>
</template>
<script>
import {Link} from "@inertiajs/vue3";

export default {
    components: { Link },
    props: {
        links: Array
    }
};
</script>
