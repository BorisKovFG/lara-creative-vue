<template>
<div>
    <CreateComponent></CreateComponent>
    <IndexComponent ref="index"></IndexComponent>
</div>
</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";
export default {
    name: "PostComponent",
    components: {
        CreateComponent,
        IndexComponent
    },
    mounted() {
        console.log(this.$refs.index.someMethod());
    },

    methods: {
      parentHelloWorld() {
          console.log('Hello, World, from parent component!')
      }
    }
}
</script>

<style scoped>

</style>
