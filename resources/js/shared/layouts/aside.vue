<template>
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">CT</a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">Creative Tim</a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="info">
                    <div class="photo">
                        <img :src="user.picture" :alt="user.picture"/>
                    </div>

                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <span>{{ user.name }} <b class="caret"></b></span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="sidebar-mini">Mp</span>
                                    <span class="sidebar-normal">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="sidebar-mini">Ep</span>
                                    <span class="sidebar-normal">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="sidebar-mini">S</span>
                                    <span class="sidebar-normal">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" @click.prevent="handleLogoutAction">
                                    <span class="sidebar-mini text-danger">L</span>
                                    <span class="sidebar-normal text-danger">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li :class="{ 'active': $page.props.menu.left === 'dashboard' }">
                    <Link :href="$route('dashboard.index')">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </Link>
                </li>
                <li :class="{ 'active': $page.props.menu.left === 'configuration' }" v-if="$page.props.auth.user.role === 'admin'">
                    <Link :href="$route('config.interest.index')">
                        <i class="ti-settings"></i>
                        <p>Configuration</p>
                    </Link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'AsideNav'
}
</script>

<script setup>
import {reactive} from 'vue';
import {usePage} from '@inertiajs/inertia-vue3';
import {Inertia} from '@inertiajs/inertia'

let user = reactive({
    name: usePage().props.value.auth.user.username,
    picture: usePage().props.value.auth.user.picture
});

let handleLogoutAction = () => {
    Inertia.post('/auth/logout');
};

</script>

<style scoped>

</style>
