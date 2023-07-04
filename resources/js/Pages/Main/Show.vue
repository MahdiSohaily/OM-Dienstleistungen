<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Header from './partials/PageHeader.vue';
import Services from './partials/Services.vue';
import Mini from './partials/Mini.vue';
import Blog from './partials/Blog.vue';

const props = defineProps({
    company: Object,
    main_page: Object,
    faqs: Array
})
</script>

<template>
    <AppLayout title="Home" :name="props.company.name">

        <Head title="Home" />
        <Header :company="company" :main_page="main_page" />
        <Services :main_page="main_page" />
        <Mini :company="company" :main_page="main_page" />
        <Blog :main_page="main_page" :faqs="faqs" />
    </AppLayout>
</template>

<style></style>
