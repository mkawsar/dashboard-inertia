<template>
<!--    <div id="toast-pos" class="toast-container position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1099">
        <div id="toastAlert" class="toast align-items-center text-white bg-danger border" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <div class="hstack gap-3">
                        <span id="toasticon" class="toast-icon-danger"></span>
                        <span id="toastBody" class="ms-auto h5 text-center align-middle" >Hello, world! This is a toast message.</span>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>-->
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
                            <form method="post" action="#" id="loginFormValidation" novalidate>
                                <div class="card" data-background="color" data-color="blue">
                                    <div class="card-header">
                                        <h3 class="card-title">Login</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" placeholder="Enter email"
                                                   required="true"
                                                   class="form-control input-no-border">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password" required="true"
                                                   class="form-control input-no-border">
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-fill btn-wd ">Let's go</button>
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
                        &copy; {{ year }}, made with <i class="fa fa-heart heart"></i> by <a href="javascript:void(0)">No
                        man</a>
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
        //$('#loginFormValidation').validate();
    }
}
</script>

<script setup>
import {onMounted} from 'vue';
import {useToastr} from '../../services/toastr'
const toastr = useToastr();

onMounted(() => {
    console.log('test');
    toastr.info('Hello world');
})
</script>
