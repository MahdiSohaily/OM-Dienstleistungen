<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    company: Object,
    faq: Object
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
    <AppLayout title="FAQ" :name="props.company.name">
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Profile Information</h6>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="javascript:;">
                                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" aria-hidden="true" aria-label="Edit Profile"
                                    data-bs-original-title="Edit Profile"></i><span class="sr-only">Edit Profile</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <p class="text-sm">
                        Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult
                        paths,
                        choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                    </p>
                    <hr class="horizontal gray-light my-4">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong>
                            &nbsp; Alec M. Thompson</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp;
                            (44)
                            123 1234 123</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp;
                            alecthompson@mail.com</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong>
                            &nbsp;
                            USA</li>
                        <li class="list-group-item border-0 ps-0 pb-0">
                            <strong class="text-dark text-sm">Social:</strong> &nbsp;
                            <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                <i class="fab fa-facebook fa-lg" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                <i class="fab fa-twitter fa-lg" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                <i class="fab fa-instagram fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
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
                                <TextInput id="mail_to_title" v-model="form.mail_to_title" type="text"
                                    class="mt-1 block w-full" autocomplete="mail_to_title" />
                                <InputError :message="form.errors.mail_to_title" class="mt-2" />
                            </div>
                            <!-- Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <TextInput id="social_title" v-model="form.social_title" type="text"
                                    class="mt-1 block w-full" autocomplete="social_title" />
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
    </AppLayout>
</template>