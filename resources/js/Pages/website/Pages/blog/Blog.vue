<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '../../Layouts/Navbar.vue';
import Profile from './components/Profile.vue';
import Footer from '../../Layouts/Footer.vue';

const props = defineProps({
    company: Object,
    blog_page: Object,
    posts: Array
});

</script>
<template>
    <Head title="Blog" />
    <Navbar :company="company" />
    <Profile :company="company" :page="blog_page" :posts="posts" />
    <Footer :name="company.name" />
</template>
<style></style>