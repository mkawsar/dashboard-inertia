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

<style scoped>

</style>
