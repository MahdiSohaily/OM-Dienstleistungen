<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import HeaderSection from './partials/HeaderSections.vue';
import Post from './partials/Post.vue';

const props = defineProps({
    company: Object,
    page: Object,
    posts: Array,
});

</script>
<template>
    <AppLayout :title="'Blog'" :name="props.company.name">

        <Head title="Blog" />
        <HeaderSection :company="company" :page="page" :count="posts.length" />
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h3 class="mb-5">{{ page.posts_section_title }}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <Post v-for="post of posts" :post="post" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
<style></style>