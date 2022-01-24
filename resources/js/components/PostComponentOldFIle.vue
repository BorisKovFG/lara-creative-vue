<template>
    <div>
        Hello, World!
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{ name }}</div>
        <div>Job: {{ borisJob }}</div>
        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";

export default {
    name: "PostComponent",
    components: {
        SinglePostComponent,
    },
    // data: function (){
    //     return 'ok';
    // }
    data() {
        return {
            name: 'Boris',
            age: 35,
            arr: [1, 2, 'x'],
            obj: {
                xOfObj: 'x',
                zOfObj: 'z'
            }
        }
    },
    methods: {
        sayHello() {
            console.log('Hello')
        },
        sayHi() {
            alert('Hi')
        },
    },
    computed: {
        borisJob() {
            return this.name + ' is working in the biggest it company!'
        }
    },
}
</script>

<style scoped>

</style>
