<template>
    <div class="p-3">
        <h5>List Of People:</h5>
        <div>
            Testing transferring data with array
            <div>Color: {{ obj.color }}</div>
            <div>Number: {{ obj.number ? 'more 10' : 'les 10' }}</div>
            <div>Published: {{ obj.isPublished ? 'Yes, it\'s a published' : 'No, it\'s not published' }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SomeComponent",
    components: {},

    mounted() {
    },

    props: ['obj'],

    methods: {}
}
</script>

<style scoped>

</style>
