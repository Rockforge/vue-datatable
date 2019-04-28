<template>
    <div>

        <h1>Post Component</h1>

        <input type="text" v-model="search" placeholder="Search something...">

        <ul>
            <li v-for="post in filteredList">
                {{post.title}}
            </li>
        </ul>

    </div>
</template>


<script>

export default {
    data() {
        return {
            search: '',
            postList: [
                {
                    id: 1,
                    title: 'First Post'
                },
                {
                    id: 2,
                    title: 'Second Post'
                },
                {
                    id: 3,
                    title: 'Third Post'
                },
            ]
        }
    },
    computed: {
        filteredList() {
            return this.postList.filter(post => {
                return post.title.toLowerCase().includes(this.search.toLowerCase());
            });
        }
    }

}

</script>
