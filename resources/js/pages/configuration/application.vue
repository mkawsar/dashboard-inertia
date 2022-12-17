<template>
    <DashboardLayout>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <ConfigLayout>
                                <div class="tab-content text-center">
                                    <p>Hello wrold.</p>
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
import DashboardLayout from '@/shared/layouts/DashboardLayout.vue'
import ConfigLayout from './layouts/ConfigLayout.vue';
export default {
    components: { DashboardLayout, ConfigLayout },
    name: 'ConfigApplication'
}
</script>