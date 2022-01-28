<template>
    <div class="w-75">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name:</th>
                <th scope="col">Age:</th>
                <th scope="col">Job:</th>
                <th scope="col" colspan="2">Actions:</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">

                <EditComponent :ref="`edit_${person.id}`" :person="person"></EditComponent>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import EditComponent from "./EditComponent";
export default {
    name: "IndexComponent",
    components: {
        EditComponent
    },

    data() {
        return {
            people: null,
            numberOfPeople: null,
            editedPerson: null,
            name: null,
            age: null,
            job: null
        }
    },

    mounted() {
        this.getPeople();
        this.$parent.parentHelloWorld();
    },

    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data
                    this.numberOfPeople = res.data.length
                })
        },
        updatePerson(id) {
            this.editedPerson = null;
            axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.getPeople() // update list with people
                })// ` it is not '
        },
        changeEditPersonById(person) {
            this.editedPerson = person.id
            let edit = `edit_${person.id}` // when dynamic name we use [] without .
            this.$refs[edit][0].name = person.name
            this.$refs[edit][0].age = person.age
            this.$refs[edit][0].job = person.job
        },

        deletePersonById(id) {
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.getPeople(); // update list with people
                })
        },

        isEditId(id) {
            return this.editedPerson === id
        },

        someMethod() {
            console.log("!!!");
        },
        updateNumberOfPeople(numberOfPeople) {
            this.numberOfPeople = numberOfPeople;
        },
        getCountOfPeople() {
            return this.numberOfPeople;
        }
    }

}
</script>

<style scoped>

</style>
