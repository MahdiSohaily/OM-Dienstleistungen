<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Footer from '../../Layouts/Footer.vue';

const props = defineProps({
    company: Object,
    post: Object,
});

const split = (data) => {
    return data.split('\n');
}

</script>
<template>
    <Head title="Blog" />
    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <img class="w-3" :src="company.logo" alt="" srcset="" />
                        <Link class="navbar-brand font-weight-bolder ms-sm-3" :href="route('home')" rel="tooltip"
                            title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                        {{ company.name }}
                        </Link>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100 d-flex justify-content-end">
                                <li class="nav-item">
                                    <Link class="nav-link nav-link-icon me-2" :href="route('home')" target="_blank">
                                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Home">
                                        Home
                                    </p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link class="nav-link nav-link-icon me-2" :href="route('about')" target="_blank">
                                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="About Us">
                                        Über uns
                                    </p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link class="nav-link nav-link-icon me-2" :href="route('services')" target="_blank">
                                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Services">
                                        Dienstleistungen
                                    </p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link class="nav-link nav-link-icon me-2" :href="route('blog')" target="_blank">
                                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Blog">
                                        Blog
                                    </p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link class="nav-link nav-link-icon me-2" :href="route('contact')" target="_blank">
                                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="Contact Us">
                                        Kontaktiere uns
                                    </p>
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar -->
    <!-- START Testimonials w/ user image & text & info -->
    <section class="py-sm-7 py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="row py-lg-7 py-5">
                        <div class="col-lg-4 col-md-5 position-relative my-auto">
                            <img class="img border-radius-lg max-width-700 w-100 position-relative z-index-2"
                                :src="post.photo_path" alt="bruce">
                        </div>
                        <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="mb-0">{{ post.title }}</h4>
                            </div>
                            <p v-for="item of split(post.content)" class="text-lg mb-2">
                                {{ item }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <Footer />
</template>
<style></style>