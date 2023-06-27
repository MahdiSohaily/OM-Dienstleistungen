<script setup>
const props = defineProps({
    title: String,
    title_desc: String,
    mail_to_title: String,
    social_title: String,
    mail_to: String,
})
</script>
<template>
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-95" style="background-image: url('./assets/img/demolition.jpg');">
            <span class="mask bg-gradient-info opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                            <div class="col-lg-8 text-center mx-auto my-auto">
                                <h1 class="text-white">{{ title }}</h1>
                                <p class="lead mb-4 text-white opacity-8">
                                    {{ title_desc }}
                                </p>
                                <a :href="'mailto:' + mail_to" type="submit" class="btn bg-white text-dark">{{
                                    mail_to_title }}</a>
                                <h6 class="text-white mb-2 mt-5">{{ social_title }}</h6>
                                <div class="d-flex justify-content-center">
                                    <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-linkedin text-lg text-white"></i></a>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
                    </g>
                </svg>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
</template>
<style></style>