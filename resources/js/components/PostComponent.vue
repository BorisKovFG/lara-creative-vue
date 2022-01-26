<template>
<div>
    <CreateComponent :numbers="numbers"></CreateComponent>
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
        this.$refs.index.someMethod();
    },
    data() {
        return {
            numbers: 12
            // numberOfPeople: this.$refs.index.getCountOfPeople()
        }
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
