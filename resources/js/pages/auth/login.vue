<template>
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:void(0)">Paper Dashboard PRO</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)">Register</a></li>
                    <li><a href="javascript:void(0)">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="" data-image="/assets/img/background-2.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form method="post" @submit.prevent="handleLoginFormSubmit" id="loginFormValidation"
                                  novalidate>
                                <div class="card" data-background="color" data-color="blue">
                                    <div class="card-header">
                                        <h3 class="card-title">Login</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" id="email" name="email" placeholder="Enter email"
                                                   required="true" v-model="form.email"
                                                   class="form-control input-no-border">
                                            <label id="email" class="error" for="email" v-if="form.errors.email">
                                                {{ form.errors.email }}
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password" required="true"
                                                   class="form-control input-no-border" v-model="form.password">
                                            <label id="password" class="error" for="password" v-if="form.errors.password">
                                                {{ form.errors.password }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-fill btn-wd" :disabled="form.processing">
                                            Let's go
                                        </button>
                                        <div class="forgot">
                                            <a href="javascript:void(0)">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                        &copy; {{ year }}, made with <i class="fa fa-heart heart"></i> by 
                        <a href="javascript:void(0)">No man</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>

<script>
import moment from 'moment';

export default {
    name: 'Login',
    data() {
        return {
            year: moment().year()
        }
    },
    mounted() {
        $(function () {
            demo.checkFullPageBackgroundImage();
        });
    },
}
</script>

<script setup>
import {computed, onMounted} from 'vue';
import {useForm, usePage} from '@inertiajs/inertia-vue3';
import {useToastr} from '@/services/toastr';

const toastr = useToastr();

let form = useForm({
    email: '',
    password: ''
});

let handleLoginFormSubmit = () => {
    form.post('/auth/authenticate');
};

let error = computed(() => {
    if (usePage().props.value.flash.error != null) {
        toastr.error(usePage().props.value.flash.error);
    }
});

onMounted(() => {
    if (usePage().props.value.flash.success != null) {
        toastr.success(usePage().props.value.flash.success);
    }
})
</script>
