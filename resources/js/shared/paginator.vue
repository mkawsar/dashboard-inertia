<template>
    <div class="text-center fixed-table-pagination">
        <div class="pagination">
            <ul class="pagination">
                <template v-for="(link, index) in links" :key="index">
                    <li class="page-number" :class="link.active === true ? 'active': ''">
                        <a v-if="link.url == null && link.active === false" href="javascript:void(0)"
                           v-html="link.label" class="disable-link"></a>
                        <a v-else :href="link.url" v-html="link.label"
                           :class="link.active === true ? 'disable-link': ''"></a>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'paginator',
    props: {
        links: Array
    }
}
</script>
