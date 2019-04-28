<template>
    <div class="users container">
        <h1>Vue Tables</h1>



        <input type="text" v-model="tableData.search" placeholder="Search Table" @keyup.enter="getUsers()">


        <datatable
            :columns="columns"
            :sortKey="sortKey"
            :sortOrders="sortOrders" @sort="sortBy"
        >

            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td>{{user.name}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.role}}</td>
                </tr>


            </tbody>
        </datatable>

        <pagination :pagination="pagination"
            @prev="getUsers(pagination.prevPageUrl)"
            @next="getUsers(pagination.nextPageUrl)"
        ></pagination>

    </div>

</template>


<script>

import Datatable from './Datatable.vue';
import Pagination from './Pagination.vue';

export default {
    components: { datatable: Datatable, pagination: Pagination },
    created() {

        this.getUsers();
    },
    data() {

        let sortOrders = {};
        let columns = [
            {width: '33%', label: 'Name', name: 'name'},
            {width: '33%', label: 'Email', name: 'email'},
            {width: '33%', label: 'Role', name: 'role'},
        ];


        columns.forEach((column) => {
            sortOrders[column.name] = -1;
        });


        return {
            users: [],
            columns: columns,
            sortKey: 'name',
            sortOrders: sortOrders,
            tableData: {
                draw: 0,
                length: 0,
                search: '',
                column: 0,
                dir: 'desc',
            },
            pagination: {
                lastPage: '',
                currentPage: '',
                total: '',
                lastPageUrl: '',
                nextPageUrl: '',
                prevPageUrl: '',
                from: '',
                to: ''
            }

        }
    },
    methods: {
        getUsers(url = '/getUsers') {
            this.tableData.draw++;
            axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                    if (this.tableData.draw == data.draw) {
                        this.users = data.data.data;
                        this.configPagination(data.data);
                    }
                })
                .catch(errors => {
                    console.log(errors);
                });
        },
        configPagination(data) {
            this.pagination.lastPage = data.last_page;
            this.pagination.currentPage = data.current_page;
            this.pagination.total = data.total;
            this.pagination.lastPageUrl = data.last_page_url;
            this.pagination.nextPageUrl = data.next_page_url;
            this.pagination.prevPageUrl = data.prev_page_url;
            this.pagination.from = data.from;
            this.pagination.to = data.to;
        },
        sortBy(key) {
            this.sortKey = key;
            this.sortOrders[key] = this.sortOrders[key] * -1;
            this.tableData.column = this.getIndex(this.columns, 'name', key);
            this.tableData.dir = this.sortOrders[key] === 1 ? 'asc' : 'desc';
            this.getUsers();
        },
        getIndex(array, key, value) {
            return array.findIndex(i => i[key] == value)
        },
    }

}
</script>

