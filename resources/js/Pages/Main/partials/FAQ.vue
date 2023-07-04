<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    company: Object,
    main_page: Object,
    faqs: Array
})

const form = useForm({
   faqs_title: props.main_page.faq_title,
   faqs_title_desc: props.main_page.faq_title_desc,
});

const updateData = () => {

    console.log(form.faqs_title);
    form.post(route('main.storefaqs'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};

const split = (data) => {
    return data.split('\n');
}
</script>
<template>
    <section class="py-5">


        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="row justify-content-center text-center my-sm-5">
                        <div class="col-lg-6">
                            <h2 class="text-dark mb-0">{{ main_page.faq_title }}</h2>
                            <p class="faq-aftertext">{{ main_page.faq_title_desc }}
                            </p>
                            <Link :href="route('contact')" target="blank" rel="nofollow" class="text-info icon-move-right">
                            Erkunde mehr
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <FormSection @submitted="updateData">
                        <template #description>
                            Aktualisieren Sie diesen Abschnitt mit dem folgenden Formular.
                        </template>
                        <template #form>
                            <!-- Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <TextInput id="faqs_title" v-model="form.faqs_title" type="text" class="mt-1 block w-full"
                                    autocomplete="faqs_title" />
                                <InputError :message="form.errors.faqs_title" class="mt-2" />
                            </div>
                            <!-- Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <TextInput id="faqs_title_desc" v-model="form.faqs_title_desc" type="text"
                                    class="mt-1 block w-full" autocomplete="faqs_title_desc" />
                                <InputError :message="form.errors.faqs_title_desc" class="mt-2" />
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
            <div class="container">

                <div class="row">
                    <div class="container">
                        <details v-for="faq of faqs" class="faq-card">
                            <summary>{{ faq.question }} <span class="faq-open-icon">+</span>
                            </summary>
                            <span class="faq-card-spoiler">
                                {{ faq.answer }}
                            </span>
                        </details>
                    </div>
                </div>
            </div>

        </section>
    </section>
</template>
<style></style>