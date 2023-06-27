<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    company: Object,
    page: Object,
    posts: Array
});
</script>
<template>
    <!-- START Testimonials w/ user image & text & info -->
    <section class="py-sm-7 py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="row py-lg-7 py-5">
                        <div class="col-lg-4 col-md-5 position-relative my-auto">
                            <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2"
                                :src="page.photo_path" alt="bruce">
                        </div>
                        <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="mb-0">{{ company.name }}</h4>
                            </div>
                            <div class="row mb-4">
                                <div class="col-auto">
                                    <span class="h6 pe-2">{{ posts.length }}</span>
                                    <span>Beiträge</span>
                                </div>
                            </div>
                            <p class="text-lg mb-0">
                                {{ page.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Testimonials w/ user image & text & info -->
    <!-- START Blogs w/ 4 cards w/ image & text & link -->
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h3 class="mb-5">{{ page.posts_section_title }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div v-for="post of posts" class="col-lg-4 col-sm-6">
                            <div class="card card-plain card-blog">
                                <div class="card-image border-radius-lg position-relative">
                                    <Link :href="route('post', post.id)">
                                    <img class="w-100 border-radius-lg move-on-hover shadow" :src="post.photo_path">
                                    </Link>
                                </div>
                                <div class="card-body px-0">
                                    <h5>
                                        <Link :href="route('post', post.id)" class="text-dark font-weight-bold">
                                        {{ post.title }}
                                        </Link>
                                    </h5>
                                    <p class="custom-description h-3">
                                        {{ post.intro_text }}
                                    </p>
                                    <Link :href="route('post', post.id)" class="text-info icon-move-right">Weiterlesen
                                    <i class="fas fa-arrow-right text-sm"></i>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<style scoped></style>