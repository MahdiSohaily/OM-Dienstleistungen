<script setup>
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    page: Object,
})
const form = useForm({
    form_title: props.page.form_title,
    form_desc: props.page.form_desc,
});

const updateData = () => {
    form.post(route('contact.storeHeader'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};
</script>
<template>
    <header>
        <div class="page-header min-vh-85">
            <div>
                <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0"
                    :src="'./assets/img/photo3.jpg'" alt="image">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 d-flex justify-content-center flex-column mt-5">
                        <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class="text-center">
                                <h3 class="text-gradient text-info">{{ form.form_title }}</h3>
                                <p class="mb-0">
                                    {{ form.form_desc }}
                                </p>
                            </div>
                            <form action="https://formsubmit.co/mahdi.sohaily4030@email.com" id="contact-form" method="post"
                                autocomplete="off">
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="fullname">Vollständiger Name</label>
                                            <div class="input-group mb-4">
                                                <input id="fullname" name="fullname" class="form-control"
                                                    placeholder="Vollständiger Name" aria-label="Full Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ps-md-2">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <input name="email" id="email" type="email" class="form-control"
                                                    placeholder="hello@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 mt-md-0 mt-4">
                                        <label for="message">Wie können wir Ihnen helfen?</label>
                                        <textarea name="message" class="form-control" id="message" rows="6"
                                            placeholder="Beschreiben Sie Ihr Problem "></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn bg-gradient-info mt-3 mb-0">
                                                Nachricht senden
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                            <label for="">Form Title</label>
                            <TextInput id="form_title" v-model="form.form_title" type="text" class="mt-1 block w-full"
                                autocomplete="form_title" />
                            <InputError :message="form.errors.form_title" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <label for="">Form Description</label>
                            <TextInput id="form_desc" v-model="form.form_desc" type="text" class="mt-1 block w-full"
                                autocomplete="form_desc" />
                            <InputError :message="form.errors.form_desc" class="mt-2" />
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