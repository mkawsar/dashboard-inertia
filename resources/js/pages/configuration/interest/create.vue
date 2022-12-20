<template>
    <Head title="Interest Create"/>
    <DashboardLayout>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <form class="form-horizontal" @submit.prevent="handleSubmitInterestForm" novalidate>
                            <div class="card-header">
                                <div class="form-group">
                                    <label for="type" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <h4 class="card-title">Interest Config Setting</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="form-group">
                                    <label for="type" class="col-sm-2 control-label">Interest Type</label>
                                    <div class="col-sm-6">
                                        <select name="type" id="type" class="form-control" v-model="form.type">
                                            <option>Select an Option</option>
                                            <option value="saving">Saving</option>
                                            <option value="personal">Personal</option>
                                            <option value="bussiness">Bussiness</option>
                                            <option value="car">car</option>
                                            <option value="home">Home</option>
                                            <option value="tour">Tour</option>
                                        </select>
                                        <label :id="form.errors.type" class="error" :for="form.errors.type" v-if="form.errors.type">
                                            {{ form.errors.type }}
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="percentage" class="col-sm-2 control-label">Interest Percentage</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="percentage" name="percentage" class="form-control" placeholder="Percentage" v-model="form.percentage"/>
                                        <label :id="form.percentage" class="error" :for="form.percentage" v-if="form.errors.percentage">
                                            {{ form.errors.percentage }}
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="type" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-outline btn-success" :disabled="form.processing">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>

<script>
import {useForm} from '@inertiajs/inertia-vue3';
import DashboardLayout from '@/shared/layouts/DashboardLayout.vue'
export default {
  components: { DashboardLayout },
    name: 'InterestCreate',
    setup() {
        let form = useForm({
            type: '',
            percentage: ''
        });

        return {form}
    },
    methods: {
        handleSubmitInterestForm() {
            this.form.post(this.$route('config.interest.store'));
        }
    }
}
</script>