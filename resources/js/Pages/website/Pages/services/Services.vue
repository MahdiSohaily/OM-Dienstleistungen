<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '../../Layouts/Navbar.vue';
import Header from './components/Header.vue';
import Details from './components/Details.vue';
import Footer from '../../Layouts/Footer.vue';

const props = defineProps({
    company: Object,
    services_page: Object,
    services: Array
});
</script>
<template>
    <Head title="Dienstleistungen" />
    <Navbar :company="company" />
    <Header :title="props.services_page.title" :title_desc="props.services_page.title_desc" />
    <Details :services="services" />
    <Footer :name="company.name" />
</template>
<style></style>