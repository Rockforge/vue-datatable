<template>

    <div>
        <p>Trigger notification</p>
        <form @submit.prevent="trigger()">
            <label for="message">Notification Message</label>
            <input type="text" v-model="message" id="message">
            <button type="submit">Send Notif</button>
        </form>
    </div>

</template>

<script>
export default {
    props: ['messages'],
    data() {
        return {
            message: '',
        }
    },
    mounted() {
        console.log('Component mounted');
    },
    methods: {
        trigger() {
            axios.post('/sendNotif', {
                message: this.message
            }).then(function (response) {
                console.log(response);
            });

            Echo.channel('notification')
                .listen('SendNotification', (e) => {
                    this.messages.push(e.message);
                });

            this.message = '';
        }
    }

}
</script>

