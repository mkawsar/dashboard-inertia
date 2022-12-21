<template>
    <Head title="Interest Setting"/>
    <DashboardLayout>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="bootstrap-table">
                                    <div class="fixed-table-toolbar">
                                        <div class="bars pull-left">
                                            <div class="toolbar"></div>
                                        </div>
                                        <div class="columns columns-right pull-right">
                                            <Link :href="$route('config.interest.create')" class="btn btn-sm btn-outline btn-success pull-right">
                                                Add Setting
                                            </Link>
                                        </div>
                                        <div class="pull-left search">
                                            <input class="form-control" type="text" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="fixed-table-container">
                                    <div class="fixed-table-body">
                                        <table id="bootstrap-table" class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Type</th>
                                                <th class="text-center">Percentage</th>
                                                <th class="text-center">Created Date</th>
                                                <th class="text-center">Creator</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(config, index) in configs.data" :key="index">
                                                    <td class="text-center">{{ config.id }}</td>
                                                    <td class="text-center">{{ config.type }}</td>
                                                    <td class="text-center">{{ config.percentage + ' %' }}</td>
                                                    <td class="text-center">{{ $moment(config.created_at).format('yyyy/MM/DD') }}</td>
                                                    <td class="text-center">{{ config.creator.name }}</td>
                                                    <td class="text-center">
                                                        <div class="table-icons">
                                                            <a rel="tooltip" title="Edit"
                                                            class="btn btn-simple btn-warning btn-icon table-action edit"
                                                            href="javascript:void(0)">
                                                                <i class="ti-pencil-alt"></i>
                                                            </a>
                                                            <a rel="tooltip" title="Remove"
                                                            class="btn btn-simple btn-danger btn-icon table-action remove"
                                                            href="javascript:void(0)">
                                                                <i class="ti-close"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <paginator :links="configs.links"/>
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
import paginator from "@/shared/paginator";
import DashboardLayout from "@/shared/layouts/DashboardLayout";

export default {
    name: 'ConfigurationIndex',
    components: {DashboardLayout, paginator},
    /*setup() {
        let props = defineProps({
            configs: Object,
            filter: Object
        });
        return {props};
    },*/
    props: {
        configs: Object,
        filter: Object
    },
}
</script>
