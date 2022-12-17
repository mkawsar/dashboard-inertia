<template>
    <footer class="footer">
        <div class="container-fluid">
            <div class="copyright pull-right">
                &copy;
                {{year}}, made with <i class="fa fa-heart heart"></i> by <a href="javascript:void(0)">No Name</a>
            </div>
        </div>
    </footer>
</template>

<script>
import moment from 'moment';
export default {
    name: 'FooterNav',
    data() {
        return {
            year: moment().year()
        }
    }
}
</script>

<style scoped>

</style>
