<template>
    <DashboardLayout>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                        <li :class="{ 'active': $page.url === '/admin/configuration/index' }">
                                            <a href="#home" data-toggle="tab" aria-expanded="true">Home</a>
                                        </li>
                                        <li class="">
                                            <a href="#profile" data-toggle="tab" aria-expanded="false">Profile</a>
                                        </li>
                                        <li class="">
                                            <a href="#messages" data-toggle="tab" aria-expanded="false">Messages</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>

<script>
import DashboardLayout from '../../shared/layouts/DashboardLayout.vue';

export default {
    name: 'ConfigurationIndex',
    components: {DashboardLayout},
}
</script>
