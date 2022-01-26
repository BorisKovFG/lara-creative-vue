<template>
        <tr :class="(this.$parent.isEditId(person.id)) ? '' : 'd-none'">
            <th scope="row">{{ person.id }}</th>
            <td><input type="text" v-model="name" class="form-control"></td>
            <td><input type="number" v-model="age" class="form-control"></td>
            <td><input type="text" v-model="job" class="form-control"></td>
            <td><a href="#" @click.prevent="updatePerson(person.id)" class="btn btn-success">Update</a></td>
        </tr>
</template>

<script>
export default {
    name: "EditComponent",
    components: {},

    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },
    props: ['person'],
    mounted() {
    },

    methods: {
        updatePerson(id) {
            this.$parent.editedPerson = null;
            axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.$parent.getPeople() // update list with people
                })// ` it is not '
        }
    }

}
</script>

<style scoped>

</style>
