<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import HeaderSection from './partials/HeaderSection.vue';
import MapSection from './partials/MapSection.vue';

const props = defineProps({
    company: Object,
    contact_page: Object,
});

</script>
<template>
    <AppLayout title="Contact" :name="props.company.name">

        <Head title="Kontaktiere uns" />
        <HeaderSection :page="contact_page" />
        <MapSection :page="contact_page" />
    </AppLayout>
</template>
<style></style>