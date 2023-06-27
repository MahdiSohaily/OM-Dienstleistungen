<script setup>
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    company: Object,
    page: Object,
    social: Object,
});


const form = useForm({
    title: props.page.title,
    title_desc: props.page.title_desc,
    mail_to_title: props.page.mail_to_title,
    social_title: props.page.social_title,
});

const updateData = () => {
    form.post(route('about.storeHeader'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};
</script>
<template>
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-95" style="background-image: url('./assets/img/demolition.jpg');">
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
                        <h6 class="text-white mb-2 mt-5">{{ social_title }}</h6>
                        <div class="d-flex justify-content-center">
                            <a :href="social.facebook"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
                            <a :href="social.instagram"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
                            <a :href="social.twitter"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
                            <a :href="social.linkedin"><i class="fab fa-linkedin text-lg text-white"></i></a>
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