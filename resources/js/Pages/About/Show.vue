<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import HeaderSection from './partials/HeaderSection.vue';
import AboutSection from './partials/AboutSection.vue';


const props = defineProps({
    company: Object,
    about_page: Object,
    social_media: Object,
});

</script>
<template>
    <AppLayout title="About" :name="props.company.name">

        <Head title="Über uns" />
        <!-- -------- START HEADER 7 w/ text and video ------- -->
        <HeaderSection :company="company" :page="about_page" :social="social_media" />
        <!-- Section with four info areas left & one card right with image and waves -->
        <AboutSection :page="about_page" />
        <!-- END Section with four info areas left & one card right with image and waves -->
    </AppLayout>
</template>
<style></style>