<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    company: Object
})
</script>
<template>
    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <img class="website-logo" :src="company.logo" alt="" srcset="" />
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
</template>

<style scoped>
.website-logo {
    width: 35px;
}
</style>
