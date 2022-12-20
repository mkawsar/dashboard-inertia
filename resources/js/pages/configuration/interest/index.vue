<template>
    <Head title="Interest Setting"/>
    <DashboardLayout>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <Link :href="$route('config.interest.create')" class="btn btn-sm btn-outline btn-success pull-right">Add Setting</Link>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>

<script>
import DashboardLayout from '@/shared/layouts/DashboardLayout.vue';

export default {
    name: 'ConfigurationIndex',
    components: { DashboardLayout },
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