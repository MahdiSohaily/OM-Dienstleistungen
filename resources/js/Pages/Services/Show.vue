<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import HeaderSection from './partials/HeaderSection.vue';
import Service from './partials/Service.vue';

const props = defineProps({
    services_page: Object,
    services: Array
});
</script>
<template>
    <AppLayout :title="'Services'">

        <Head title="Dienstleistungen" />
        <HeaderSection :page="services_page" />
        <Service v-for="service, index of services" :service="service" :index="index" />
    </AppLayout>
</template>
<style></style>