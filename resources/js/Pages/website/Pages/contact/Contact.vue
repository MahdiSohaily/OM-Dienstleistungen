<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '../../Layouts/Navbar.vue';
import Details from './components/Details.vue';
import Footer from '../../Layouts/Footer.vue';

const props = defineProps({
    company: Object,
    contact_page: Object,
});

</script>
<template>
    <Head title="Kontaktiere uns" />
    <Navbar :company="company" />
    <Details :page="contact_page" />
    <Footer :name="company.name" />
</template>
<style></style>