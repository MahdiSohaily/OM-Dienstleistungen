<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import HeaderSection from './partials/HeaderSection.vue';
import Service from './partials/Service.vue';

const props = defineProps({
    company_info: Object,
    services_page: Object,
    services: Array
});
</script>
<template>
    <AppLayout :title="'Services'" :name="props.company_info.name">

        <Head title="Dienstleistungen" />
        <HeaderSection :page="services_page" />
        <Service v-for="service, index of services" :service="service" :index="index" />
    </AppLayout>
</template>
<style></style>