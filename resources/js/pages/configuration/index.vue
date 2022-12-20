<template>
    <Head title="Interest Setting"/>
    <DashboardLayout>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <ConfigLayout>
                                <div class="tab-content text-center">
                                    <Link :href="$route('config.interest.create')" class="btn btn-sm btn-outline btn-success pull-right">Add Setting</Link>
                                    <div class="row">
                                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                                    </div>
                                </div>
                            </ConfigLayout>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>

<script>
import DashboardLayout from '@/shared/layouts/DashboardLayout.vue';
import ConfigLayout from '@/pages/configuration/layouts/ConfigLayout.vue';

export default {
    name: 'ConfigurationIndex',
    components: { DashboardLayout, ConfigLayout },
    data() {
        return {
            isModalOpen: false
        }
    },
    methods: {
        handleClickOpenModal() {
            this.isModalOpen = !this.isModalOpen;
        }
    },
}
</script>