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
                <tr :class="(!isEditId(person.id)) ? '' : 'd-none'">
                    <th scope="row">{{ person.id }}</th>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                    <td><a href="#" @click.prevent="changeEditPersonById(person)" class="btn btn-success">Edit</a></td>
                    <td><a href="#" @click.prevent="deletePersonById(person.id)" class="btn btn-danger">Delete</a></td>

                </tr>
                <tr :class="(isEditId(person.id)) ? '' : 'd-none'">
                    <th scope="row">{{ person.id }}</th>
                    <td><input type="text" v-model="name" class="form-control"></td>
                    <td><input type="number" v-model="age" class="form-control"></td>
                    <td><input type="text" v-model="job" class="form-control"></td>
                    <td><a href="#" @click.prevent="updatePerson(person.id)" class="btn btn-success">Update</a></td>
                </tr>
            </template>

            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "IndexComponent",
    components: {},

    data() {
        return {
            people: null,
            editedPerson: null,
            name: null,
            age: null,
            job: null
        }
    },

    mounted() {
        this.getPeople()
    },

    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data
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
            this.name = person.name
            this.age = person.age
            this.job = person.job
        },

        deletePersonById(id) {
            axios.delete(`/api/people/${id}`)
            .then(res =>{
                this.getPeople(); // update list with people
            })
        },

        isEditId(id) {
            return this.editedPerson === id
        }
    }

}
</script>

<style scoped>

</style>
