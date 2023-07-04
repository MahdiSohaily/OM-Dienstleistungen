<script setup>
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
const props = defineProps({
    page: Object,
});

const split = (data) => {
    return data.split('\n');
}

const form = useForm({
    who_we_are: props.page.who_we_are,
    who_we_are_desc: props.page.who_we_are_desc,
    what_we_do: props.page.what_we_do,
    what_we_do_desc: props.page.what_we_do_desc,
});

const updateData = () => {
    form.post(route('about.storeAbout'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};

</script>
<template>
    <section class="py-7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row justify-content-start">
                        <div class="col-md-12">
                            <div class="info">
                                <h4 class="d-flex align-items-center">
                                    <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center me-2">
                                        <i class="fas fa-handshake opacity-10" aria-hidden="true"></i>
                                    </div>
                                    {{ form.who_we_are }}
                                </h4>
                                <p v-for="item of split(form.who_we_are_desc)">
                                    {{ item }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="info">
                                <h4 class="d-flex align-items-center">
                                    <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center me-2">
                                        <i class="fas fa-briefcase opacity-10" aria-hidden="true"></i>
                                    </div>
                                    {{ form.what_we_do }}
                                </h4>
                                <p v-for="item of split(form.what_we_do_desc)">
                                    {{ item }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
                    <div class="card shadow-lg">
                        <div class="card-header p-0 mx-3 my-3 position-relative z-index-1">
                            <div class="d-block blur-shadow-image">
                                <img :src="page.about_photo" alt="img-blur-shadow" class="img-fluid shadow rounded-3">
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
                            <TextInput id="who_we_are" v-model="form.who_we_are" type="text" class="mt-1 block w-full"
                                autocomplete="who_we_are" />
                            <InputError :message="form.errors.who_we_are" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <textarea class="mt-1 block w-full form-control form-control-lg" name="who_we_are_desc"
                                v-model="form.who_we_are_desc" id="who_we_are_desc" cols="30" rows="10"></textarea>
                            <InputError :message="form.errors.who_we_are_desc" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="what_we_do" v-model="form.what_we_do" type="text" class="mt-1 block w-full"
                                autocomplete="what_we_do" />
                            <InputError :message="form.errors.what_we_do" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <textarea class="mt-1 block w-full form-control form-control-lg" name="what_we_do_desc"
                                v-model="form.what_we_do_desc" id="what_we_do_desc" cols="30" rows="10"></textarea>
                            <InputError :message="form.errors.what_we_do_desc" class="mt-2" />
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