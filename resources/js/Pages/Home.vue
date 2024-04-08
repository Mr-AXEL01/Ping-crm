<template>
    <h1>Hello, M.{{name}}</h1>

    <p>list of tecknologies that should master this year :</p>

    <ul>
        <li v-for="tecknology of tecknologies" v-text="tecknology"></li>
    </ul>
</template>

<script>
export default {
    props: {
        name: String,
        tecknologies: Array,
    },
};
</script>
