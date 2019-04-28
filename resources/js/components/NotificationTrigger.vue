<template>
    <div class="container mx-auto py-4">
        <div class="w-full max-w-xs mx-auto">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="trigger">
                <div class="mb-4">
                    <label class="block text-purple text-sm font-bold mb-2" for="name">Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-purple-darker" id="name" type="text" name="name" v-model="name">
                </div>


                <div class="mb-4">
                    <label class="block text-purple text-sm font-bold mb-2" for="link">Link</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-purple-darker" id="link" type="text" link="link" v-model="link">
                </div>


                <div class="mb-6">
                    <label class="block text-purple text-sm font-bold mb-2" for="remarks">Remarks</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-purple-darker" id="remarks" type="text" remarks="remarks" v-model="remarks">
                </div>

                <div class="flex flex-row justify-center">
                    <button class="bg-purple hover:bg-purple-dark text-white font-bold py-2 px-4 rounded" type="submit"> Trigger notification </button>
                </div>


            </form>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            name: '',
            link: '',
            remarks: '',
        }
    },
    methods: {
        trigger() {
            console.log('Testing');

            axios.post('/api/trigger', {
                name: this.name,
                link: this.link,
                remarks: this.remarks,
            }).then(response => {
                console.log(response.data);
            }).catch(function(error) {
                console.log(error);
            });
        }
    }
}
</script>
