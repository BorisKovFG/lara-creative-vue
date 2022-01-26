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
            <tr v-for="person in personsAgeLessThirty">
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
            persons: [
                {
                    id: 1,
                    name: 'Vasya',
                    age: 30,
                    job: 'coach'
                },
                {
                    id: 2,
                    name: 'Kolya',
                    age: 27,
                    job: 'driver'
                },
                {
                    id: 3,
                    name: 'Monya',
                    age: 33,
                    job: 'accountant'
                },
                {
                    id: 4,
                    name: 'Vika',
                    age: 21,
                    job: 'rest'
                },
                {
                    id: 5,
                    name: 'Nikita',
                    age: 22,
                    job: 'seller'
                },
            ]

        }
    },
    methods: {},
    computed: {
        personsAgeLessThirty() {
            return this.persons.filter(function (person) {
                return person.age < 30
            })
        }
    }
}
</script>

<style scoped>

</style>
