<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '../../Layouts/Navbar.vue';
import Header from './components/Header.vue';
import Details from './components/Details.vue';
import Footer from '../../Layouts/Footer.vue';

const props = defineProps({
    company: Object,
    about_page: Object
});
</script>
<template>
    <Head title="Über uns" />
    <Navbar :company="company" />
    <Header :title="about_page.title" :title_desc="about_page.title_desc" :mail_to_title="about_page.mail_to_title"
        :social_title="about_page.social_title" :mail_to="company.email_address" />
    <Details :page="about_page" />
    <Footer :name="company.name" />
</template>
<style></style>