<style lang="scss">
.pagination {
    justify-content: flex-end !important;
    .page-stats {
        align-items: center;
        margin-right: 5px;
    }
    i {
        color: #3273dc !important;
    }
}
</style>

<template>
    <nav>
        <span class="page-stats"> {{pagination.from}} - {{pagination.to}} of {{pagination.total}} </span>

        <ul class="pagination">
            <li class="page-item">
                <a v-if="pagination.prevPageUrl" class="page-link" @click="$emit('prev');"> Prev </a>
                <a class="page-link" v-else :disabled="true"> Prev </a>
            </li>

            <li class="page-item">
                <a v-if="pagination.nextPageUrl" class="page-link" @click="$emit('next');"> Next </a>
                <a class="page-link" v-else :disabled="true"> Next </a>
            </li>
        </ul>

    </nav>

</template>


<script>
export default {
    props: ['pagination']
}
</script>
