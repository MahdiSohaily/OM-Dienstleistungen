<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';


const props = defineProps({
    company: Object,
    about_page: Object,
    social_media: Object,
});

</script>
<template>
    <AppLayout title="FAQ" :name="props.company.name">

        <Head title="FAQ" />

    </AppLayout>
</template>
<style></style>