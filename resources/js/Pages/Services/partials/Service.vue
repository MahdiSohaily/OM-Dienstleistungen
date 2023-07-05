<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    service: Object,
    index: Number,
})

const form = useForm({
    id: props.service.id,
    title: props.service.title,
    intro_text: props.service.intro_text,
    content: props.service.content,
});

const updateData = () => {
    form.post(route('services.update'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};


const split = (data) => {
    return data.split('\n');
}

</script>
<template>
    <section v-if="index % 2 == 0" class=" md:my-10 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12 my-auto pb-5">
                    <h3 class="text-gradient text-info mb-0">{{ form.title }}</h3>
                    <p v-for="item of split(form.content)" class="pe-md-5">
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
                <div class="col-md-5 col-12 my-auto">
                    <img class="w-100 border-radius-lg shadow-lg" :src="service.photo_path" alt="Product Image">
                </div>
                <div class="col-md-7 col-12 my-auto pb-5">
                    <h3 class="text-gradient text-info mb-0">{{ form.title }}</h3>
                    <p v-for="item of split(form.content)" class="pe-md-5">
                        {{ item }}
                    </p>
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
                            <label for="Title">Title</label>
                            <TextInput id="title" v-model="form.title" type="text" class="mt-1 block w-full"
                                autocomplete="title" />
                            <InputError :message="form.errors.title" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="">Service Intro</label>
                            <textarea class="mt-1 block w-full form-control form-control-lg" name="intro_text"
                                v-model="form.intro_text" id="intro_text" cols="30" rows="10"></textarea>
                            <InputError :message="form.errors.intro_text" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <label for="">Service Description</label>
                            <textarea class="mt-1 block w-full form-control form-control-lg" name="content"
                                v-model="form.content" id="content" cols="30" rows="10"></textarea>
                            <InputError :message="form.errors.content" class="mt-2" />
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