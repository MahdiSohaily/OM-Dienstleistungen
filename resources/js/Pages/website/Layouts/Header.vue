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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="page-header min-vh-100" style="background-image: url('./assets/img/basic-leaning.jpg');">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="page-header min-vh-100" style="background-image: url('./assets/img/photo3.jpg');">
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
                                <!-- <h6 class="text-white mb-2 mt-5">{{ social_title }}</h6>
                                <div class="d-flex justify-content-center">
                                    <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-linkedin text-lg text-white"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="page-header min-vh-100" style="background-image: url('./assets/img/photo2.jpg');">
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
                                <!-- <h6 class="text-white mb-2 mt-5">{{ social_title }}</h6>
                                <div class="d-flex justify-content-center">
                                    <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-linkedin text-lg text-white"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>
<style></style>