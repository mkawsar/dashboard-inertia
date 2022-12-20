<template>
    <Head title="Interest Create"/>
    <DashboardLayout>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="card">
                        <config-layout>
                            <div class="tab-content text-center">
                                <form @submit.prevent="handleSubmitInterestForm" novalidate>
                                    <div class="card-content">
                                        <pre>{{ form }}</pre>
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Required Text</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control error" type="text" name="required" required="required" aria-invalid="true">
                                                    <label id="required-error" class="error" for="required">This field is required.</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <label for="type" class="col-sm-3 control-label">Interest Type</label>
                                            <div class="col-sm-9">
                                                <select name="type" id="type" class="form-control">
                                                    <option>Select an Option</option>
                                                    <option value="saving">Saving</option>
                                                    <option value="personal">Personal</option>
                                                    <option value="bussiness">Bussiness</option>
                                                    <option value="car">car</option>
                                                    <option value="home">Home</option>
                                                    <option value="tour">Tour</option>
                                                </select>
                                                <label id="required-error" class="error" for="required">This field is required.</label>
                                            </div>
                                            <label id="email" class="error" for="email" v-if="form.errors.type">
                                                {{ form.errors.type }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-fill btn-info">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </config-layout>
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>

<script>
import {onMounted} from 'vue';
import {useForm} from '@inertiajs/inertia-vue3';
import DashboardLayout from '@/shared/layouts/DashboardLayout.vue'
import ConfigLayout from '@/pages/configuration/layouts/ConfigLayout.vue';
export default {
  components: { DashboardLayout, ConfigLayout },
    name: 'InterestCreate',
    setup() {
        let form = useForm({
            type: ''
        });

        // onMounted(() => {
        //     console.log($route('config.interest.index'));
        // });
        return {form}
    },
    methods: {
        handleSubmitInterestForm() {
            this.form.post(this.$route('config.interest.store'));
        }
    }

}
</script>