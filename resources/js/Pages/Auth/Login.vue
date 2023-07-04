<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h4 class="font-weight-bolder">Sign In</h4>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body">
                            <form role="form" @submit.prevent="submit">
                                <div class="mb-3">
                                    <input id="email" v-model="form.email" type="email"
                                        class="form-control form-control-lg" required autofocus autocomplete="username"
                                        placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                        <InputError class="mt-2" :message="form.errors.email" />
                                    </div>
                                    <div class="mb-3">
                                        <input id="password" v-model="form.password" type="password"
                                            class="form-control form-control-lg" placeholder="Password" required
                                            autocomplete="current-password" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>
                                    <div class="form-check form-switch">
                                        <input v-model="form.remember" name="remember" class="form-check-input"
                                            type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-lg bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <Link v-if="canResetPassword" :href="route('password.request')"
                                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Forgot your password?
                                    </Link>
                                </div> -->
                        </div>
                    </div>
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                        <div
                            class="position-relative bg-gradient- h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                            <img :src="'./assets/img/shapes/pattern-lines.svg'" alt="pattern-lines"
                                class="position-absolute opacity-4 start-0">
                            <div class="position-relative">
                                <img class="max-width-500 w-100 position-relative z-index-2"
                                    :src="'./assets/img/logo.png'">
                            </div>
                            <h4 class="mt-5 text-secondary font-weight-bolder">"Aufmerksamkeit ist die neue Währung"</h4>
                            <p class="text-secondary">
                                Je müheloser das Schreiben aussieht, desto mehr Mühe hat der Autor
                                tatsächlich in den Prozess gesteckt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
