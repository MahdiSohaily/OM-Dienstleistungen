<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    posts: Number,
    services: Number,
    users: Number,
    company: Array,
});

const form = useForm({
    name: props.company.name,
    address: props.company.address,
    stablish_year: props.company.stablish_year,
    company_info: props.company.company_info,
    email_address: props.company.email_address,
    phone: props.company.phone,
});

const updateData = () => {
    form.post(route('dashboard.storeHeader'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};


</script>

<template>
    <AppLayout title="Dashboard" :name="props.company.name">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Published Posts</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ posts }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                        <i class="ni ni-book-bookmark text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">User Accounts</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ users }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                        <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Registered Services</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            {{ services }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex flex-column h-100">
                                        <h5 class="font-weight-bolder">Edit Company Information</h5>
                                        <FormSection @submitted="updateData">
                                            <template #description>
                                                Fill out the following form to update the company Information
                                            </template>
                                            <template #form>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="name">Company Name</label>
                                                            <input name="name" aria-describedby="addon-right addon-left"
                                                                placeholder="Enter Your Company Name" class="form-control"
                                                                type="text" v-model="form.name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input name="address" aria-describedby="addon-right addon-left"
                                                                v-model="form.address" class="form-control" type="tex">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="stablish">Stablish Year</label>
                                                            <input name="stablish" aria-describedby="addon-right addon-left"
                                                                class="form-control" type="date"
                                                                v-model="form.stablish_year">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="company_info">Company info</label>
                                                            <textarea name="company_info"
                                                                aria-describedby="addon-right addon-left" rows="5"
                                                                class="form-control"
                                                                v-model="form.company_info">{{ form.company_info }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="email">Email Address</label>
                                                            <input name="email" aria-describedby="addon-right addon-left"
                                                                placeholder="name@example.com" class="form-control"
                                                                type="email" v-model="form.email_address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input name="phone" aria-describedby="addon-right addon-left"
                                                                placeholder="Company Phone Number" class="form-control"
                                                                type="text" v-model="form.phone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>

                                            <template #actions>
                                                <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                                                    Saved.
                                                </ActionMessage>

                                                <PrimaryButton :class="{ 'opacity-25': form.processing }"
                                                    :disabled="form.processing">
                                                    Save
                                                </PrimaryButton>
                                            </template>
                                        </FormSection>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <h5 class="font-weight-bolder">Company Information</h5>
                                        <div class=" h-100">
                                            <div class="card-body p-3">
                                                <div class="timeline timeline-one-side">
                                                    <div class="timeline-block mb-3">
                                                        <span class="timeline-step">
                                                            <i class="ni ni-app text-success text-gradient"></i>
                                                        </span>
                                                        <div class="timeline-content">
                                                            <h6 class="text-dark text-sm font-weight-bold mb-0">
                                                                Company Name</h6>
                                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                                                {{ form.name }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-block mb-3">
                                                        <span class="timeline-step">
                                                            <i class="ni ni-pin-3 text-danger text-gradient"></i>
                                                        </span>
                                                        <div class="timeline-content">
                                                            <h6 class="text-dark text-sm font-weight-bold mb-0">Company
                                                                Address</h6>
                                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                                                {{ form.address }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-block mb-3">
                                                        <span class="timeline-step">
                                                            <i class="ni ni-calendar-grid-58 text-info text-gradient"></i>
                                                        </span>
                                                        <div class="timeline-content">
                                                            <h6 class="text-dark text-sm font-weight-bold mb-0">Stablish
                                                                Year</h6>
                                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                                                {{ form.stablish_year }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-block mb-3">
                                                        <span class="timeline-step">
                                                            <i class="ni ni-world-2 text-warning text-gradient"></i>
                                                        </span>
                                                        <div class="timeline-content">
                                                            <h6 class="text-dark text-sm font-weight-bold mb-0">Company Info
                                                            </h6>
                                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                                                {{ form.company_info }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-block mb-3">
                                                        <span class="timeline-step">
                                                            <i class="ni ni-email-83 text-primary text-gradient"></i>
                                                        </span>
                                                        <div class="timeline-content">
                                                            <h6 class="text-dark text-sm font-weight-bold mb-0">Email
                                                                Address</h6>
                                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                                                {{ form.email_address }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-block">
                                                        <span class="timeline-step">
                                                            <i class="ni ni-mobile-button text-dark text-gradient"></i>
                                                        </span>
                                                        <div class="timeline-content">
                                                            <h6 class="text-dark text-sm font-weight-bold mb-0">Phone Number
                                                            </h6>
                                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{
                                                                form.phone }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                    <div class=" border-radius-lg h-100">
                                        <img :src="'./assets/img/shapes/waves-white.svg'"
                                            class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                        <div
                                            class="md:hidden position-relative d-flex align-items-center justify-content-center h-100">
                                            <img class="w-100 position-relative z-index-2 pt-4"
                                                :src="'./assets/img/logo.png'" alt="rocket">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
