<template>
    <div>
        <h1 class="header" v-if="messages.length <= 0">No notifications yet :(</h1>
        <div v-else>
            <table>
                <thead>
                    <tr>
                        <th>Message</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="message in messages" :key="message">
                        <td>{{message}}</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['messages'],
        mounted() {
            console.log('Mounted notifications');
        }
    }
</script>

<style>
    .header {
        margin: 10px 10px;
    }
</style>

