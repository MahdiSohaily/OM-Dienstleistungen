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
})
</script>

<template>
    <AppLayout title="Home">
        <Head title="Home" />
        <Header :company="company" :main_page="main_page" />
        <Services :main_page="main_page" />
        <Mini :company="company" :main_page="main_page" />
        <Blog :main_page="main_page" />
    </AppLayout>
</template>

<style></style>
