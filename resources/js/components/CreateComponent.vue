<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" class="form-control" v-model="name" id="name" placeholder="Name:">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" v-model="age" id="age" placeholder="Age:">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" v-model="job" id="job" placeholder="Job:">
        </div>
        <input @click.prevent="addPerson" class="btn btn-primary" value="Add">
        <!--        bad practice to migrate vars without object-->
        <!--        <SomeComponent color="Red" number="10" is-published="true"></SomeComponent>-->
        <!--        it is better:-->
        <SomeComponent :obj=obj></SomeComponent>

    </div>
</template>

<script>
import SomeComponent from "./SomeComponent";

export default {
    name: "CreateComponent",
    components: {
        SomeComponent,
    },

    data() {
        return {
            name: null,
            age: null,
            job: null,
            obj: {
                color: 'red',
                number: 20,
                isPublished: true
            }
        }
    },
    methods: {
        addPerson() {
            axios.post('api/people', {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.name = null
                    this.age = null
                    this.job = null
                    this.$parent.$refs.index.getPeople() // createComponent->PostComponent->IndexComponent->listOfPeople
                })
        }
    }

}
</script>

<style scoped>

</style>
