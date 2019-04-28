<template>

    <div class="container py-4 mx-auto">

        <h1 class="text-purple text-center"> Notifications Test </h1>


        <div class="block mt-5">
            <div class="flex flex-row justify-center">
                <div class="bg-blue text-center shadow-md h-25 w-25 p-4">
                    <span class="text-center text-white animated fadeIn">{{count}}</span>
                </div>
            </div>
        </div>


        <div class="block">

            <table class="table-auto mt-5 w-full">
                <thead>
                    <tr>
                        <th class="p-5 bg-grey-lighter text-purple">User</th>
                        <th class="p-5 bg-grey-lighter text-purple">Remarks</th>
                        <th class="p-5 bg-grey-lighter text-purple">Updated At</th>
                    </tr>
                </thead>

                <transition-group tag="tbody" enter-active-class="animated fadeIn" leave-active-class="animated fadeOut" mode="out-in">

                    <tr v-for="notification in notifications.slice().reverse()" :key="notification.id">
                        <td class="p-5 bg-grey-white text-purple-darker flex flex-row">
                            <img class="rounded-full h-10 w-10 mr-5" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt="Avatar">
                            <span class="self-center"> {{notification.name}} </span>
                        </td>
                        <td class="p-5 bg-grey-white text-purple-darker">{{notification.remarks}}</td>
                        <td class="p-5 bg-grey-white text-purple-darker">{{notification.updated_at}}</td>
                    </tr>

                </transition-group>

            </table>

        </div>


    </div>

</template>


<script>

export default {
    mounted() {
        this.getNotifications();
        Echo.channel('notification')
            .listen('SendNotification', (e) => {
                console.log(e.notif);
                this.notifications.push({
                    'id': e.notif.id,
                    'name': e.notif.name,
                    'remarks': e.notif.remarks,
                    'updated_at': e.notif.updated_at
                });
                this.count = this.notifications.length;
                console.log(this.notifications);

                // this.getNotifications();
            });

    },
    data() {
        return {
            notifications: [],
            count: ''
        };
    },
    methods: {
        getNotifications() {
            axios.get('/api/notifications')
                .then(response => {
                    this.notifications = response.data.notifications;
                    this.count = response.data.count;
                    console.log(response.data);
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    }
}


</script>
