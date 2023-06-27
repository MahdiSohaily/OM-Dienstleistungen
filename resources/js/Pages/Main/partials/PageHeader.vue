<script setup>
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    main_page: Object,
    company: Object,
})
const form = useForm({
    title: props.main_page.title,
    title_desc: props.main_page.title_desc,
    mail_to_title: props.main_page.mail_to_title,
    social_title: props.main_page.social_title,
});

const updateData = () => {
    form.post(route('main.storeHeader'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};
</script>
<template>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="page-header min-vh-100" style="background-image: url('./assets/img/basic-leaning.jpg');">
                    <span class="mask bg-gradient-info opacity-6"></span>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center mx-auto my-auto">
                                <h1 class="text-white">{{ form.title }}</h1>
                                <p class="lead mb-4 text-white opacity-8">
                                    {{ form.title_desc }}
                                </p>
                                <a :href="'mailto:' + company.email_address" type="submit" class="btn bg-white text-dark">{{
                                    form.mail_to_title }}</a>
                                <h6 class="text-white mb-2 mt-5">{{ form.social_title }}</h6>
                                <div class="d-flex justify-content-center">
                                    <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
                                    <a href="javascript:;"><i class="fab fa-linkedin text-lg text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <FormSection @submitted="updateData">
                    <template #description>
                        Aktualisieren Sie diesen Abschnitt mit dem folgenden Formular.
                     </template>
                    <template #form>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="title" v-model="form.title" type="text" class="mt-1 block w-full"
                                autocomplete="title" />
                            <InputError :message="form.errors.title" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="title_desc" v-model="form.title_desc" type="text" class="mt-1 block w-full"
                                autocomplete="title_desc" />
                            <InputError :message="form.errors.title_desc" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="mail_to_title" v-model="form.mail_to_title" type="text" class="mt-1 block w-full"
                                autocomplete="mail_to_title" />
                            <InputError :message="form.errors.mail_to_title" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="social_title" v-model="form.social_title" type="text" class="mt-1 block w-full"
                                autocomplete="social_title" />
                            <InputError :message="form.errors.social_title" class="mt-2" />
                        </div>
                    </template>

                    <template #actions>
                        <ActionMessage :on="form.recentlySuccessful" class="mr-3">
                            Saved.
                        </ActionMessage>

                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Save
                        </PrimaryButton>
                    </template>
                </FormSection>
            </div>
        </div>
    </section>
</template>
<style></style>