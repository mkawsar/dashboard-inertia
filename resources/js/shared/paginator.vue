<template>
    <div class="text-center fixed-table-pagination">
        <pre>{{ links }}</pre>
        <div class="pagination">
            <ul class="pagination">
                <li class="page-first" v-for="(link, index) in links" :key="index">
                    <a href="javascript:void(0)"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                </li>
                <!-- <li class="page-first">
                    <a href="javascript:void(0)"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                </li>
                <li class="page-pre">
                    <a href="javascript:void(0)">‹</a>
                </li>
                <li class="page-number">
                    <a href="javascript:void(0)">1</a>
                </li>
                <li class="page-number active">
                    <a href="javascript:void(0)">2</a>
                </li>
                <li class="page-number">
                    <a href="javascript:void(0)">3</a>
                </li>
                <li class="page-next">
                    <a href="javascript:void(0)">›</a>
                </li>
                <li class="page-last">
                    <a href="javascript:void(0)"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </li> -->
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