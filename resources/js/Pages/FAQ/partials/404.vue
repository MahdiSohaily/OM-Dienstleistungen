<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
    company: Object,
});
</script>
<template>
    <AppLayout title="FAQ" :name="props.company.name">
        <section class="page_404">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="col-sm-10 col-sm-offset-1  text-center">
                            <div class="four_zero_four_bg">



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
<style>
/*======================
    404 page
=======================*/


.page_404 {
    padding: 40px 0;
    background: #fff;
    font-family: 'Arvo', serif;
}

.page_404 img {
    width: 100%;
}

.four_zero_four_bg {

    background-image: url(https://cdn.dribbble.com/users/722246/screenshots/3066818/404-page.gif);
    height: 650px;
    background-position: center;
}


.four_zero_four_bg h1 {
    font-size: 80px;
}

.four_zero_four_bg h3 {
    font-size: 80px;
}

.link_404 {
    color: #fff !important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;
}

.contant_box_404 {
    margin-top: -50px;
}</style>