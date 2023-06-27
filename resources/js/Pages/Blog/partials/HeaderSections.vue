<script setup>
const props = defineProps({
    company: Object,
    page: Object,
    count: Number,
});

const split = (data) => {
    return data.split('\n');
}
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
                                    <span class="h6 pe-2">{{ count }}</span>
                                    <span>Beiträge</span>
                                </div>
                            </div>
                            <p v-for="item of split(page.description)" class="text-lg mb-2">
                                {{ item }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
