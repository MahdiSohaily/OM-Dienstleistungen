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
    map_title: props.page.map_title,
    map_desc: props.page.map_desc,
});

const updateData = () => {
    form.post(route('contact.storeMap'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};
</script>
<template>
    <section class="">
        <div class="container">
            <div class="bg-gradient-INFO position-relative m-3 border-radius-xl overflow-hidden">
                <div class="container py-md-7 py-3 postion-relative z-index-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-3">
                                <div class="row">
                                    <div class="row justify-content-center text-center my-sm-5">
                                        <div class="col-12">
                                            <h2 class="text-dark mb-0">{{ form.map_title }}</h2>
                                            <p>
                                                {{ form.map_desc }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-auto">
                                <iframe class="col-12 rounded-3"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <label for="">Map Section Title</label>
                            <TextInput id="map_title" v-model="form.map_title" type="text" class="mt-1 block w-full"
                                autocomplete="map_title" />
                            <InputError :message="form.errors.map_title" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="">Map Section Description</label>
                            <textarea class="mt-1 block w-full form-control form-control-lg" name="map_desc"
                                v-model="form.map_desc" id="map_desc" cols="30" rows="10"></textarea>
                            <InputError :message="form.errors.map_desc" class="mt-2" />
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