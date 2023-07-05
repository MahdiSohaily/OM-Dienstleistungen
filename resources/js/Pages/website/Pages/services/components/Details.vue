<script setup>
const props = defineProps({
    services: Array
})

const split = (data) => {
    return data.split('\n');
}
</script>
<template>
    <template v-for="service, index of services">
        <section v-if="index % 2 === 0" class=" md:my-10 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12 my-auto pb-5">
                        <h3 class="text-gradient text-info mb-0">{{ service.title }}</h3>
                        <p v-for="item of split(service.content)" class="pe-md-5">
                            {{ item }}
                        </p>
                    </div>
                    <div class="col-md-5 col-12 my-auto">
                        <img class="w-100 border-radius-lg shadow-lg" :src="service.photo_path" alt="Product Image">
                    </div>
                </div>
            </div>
        </section>
        <section v-else class="md:my-10 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12 my-auto pb-5">
                        <img class="w-100 border-radius-lg shadow-lg" :src="service.photo_path" alt="Product Image">
                    </div>
                    <div class="col-md-7 col-12 my-auto">
                        <h3 class="text-gradient text-info mb-0">{{ service.title }}</h3>
                        <p v-for="item of split(service.content)" class="pe-md-5">
                            {{ item }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </template>
</template>
<style></style>