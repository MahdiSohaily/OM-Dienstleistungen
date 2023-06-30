<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '../../Layouts/Navbar.vue';
import Footer from '../../Layouts/Footer.vue';

const props = defineProps({
    company: Object,
    blog_page: Object,
    posts: Array
});

</script>
<template>
    <Head title="Blog" />
    <Navbar :company="company" />
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $page.props.auth.user.name }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            System Administrator
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Update Information</h6>
                    </div>
                    <div class="card-body p-3">
                        <UpdateProfileInformationForm :user="$page.props.auth.user" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Update Password</h6>
                    </div>
                    <div class="card-body p-3">
                        <UpdatePasswordForm />
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Delete Account</h6>
                    </div>
                    <div class="card-body p-3">
                        <DeleteUserForm />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer :name="company.name" />
</template>
<style></style>