<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>
            Test
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
<!--            <tr>-->
            <tr v-for="person in persons">
            <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
export default {
    name: "PostComponent",
    components: {
        SinglePostComponent,
    },

    data() {
        return {
            persons: null
        }
    },
    mounted() {
        this.getPersons()
    },
    methods: {
        getPersons() {
            axios.get('/persons')
            .then(res => {
                this.persons = res.data
            })
            .catch( error => {

            })
            .finally( {

            })
        }
    }
}
</script>

<style scoped>

</style>
