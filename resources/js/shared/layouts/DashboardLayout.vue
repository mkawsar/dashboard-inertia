<template>
    <div class="wrapper">
        <AsideNav/>
        <div class="main-panel">
            <TopNav/>
            <div class="content">
                <slot/>
            </div>
            <FooterNav/>
        </div>
    </div>
</template>

<script>
import TopNav from "./top-nav";
import AsideNav from "./aside";
import FooterNav from "./footer";
export default {
    name: "DashboardLayout",
    components: {FooterNav, AsideNav, TopNav}
}
</script>

<script setup>
import {onMounted} from 'vue';
import {usePage} from '@inertiajs/inertia-vue3';
import {useToastr} from '@/services/toastr';

const toastr = useToastr();

onMounted(() => {
    if (usePage().props.value.flash.success != null) {
        toastr.success(usePage().props.value.flash.success);
    }
})
</script>

<style scoped>

</style>
