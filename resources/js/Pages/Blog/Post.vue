<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, useForm, Link } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { ref } from 'vue';

const props = defineProps({
    data: Object,
});

const form = useForm({
    id: props.data.id,
    title: props.data.title,
    intro_text: props.data.intro_text,
    content: props.data.content,
});

const updateData = () => {
    form.post(route('blog.store'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};



const split = (data) => {
    return data.split('\n');
}

</script>
<template>
    <AppLayout title="Blog" :name="props.company.name">

        <Head title="Blog" />
        <section class="py-sm-7 py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="row ">
                            <div class="col-12 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h4 class="mb-0">{{ form.title }}</h4>
                                </div>
                                <p v-for="item of split(form.content)" class="text-lg mb-2">
                                    {{ item }}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

                        <div class="col-span-6 sm:col-span-4">
                            <label for="intro_text"></label>
                            <textarea class="mt-1 block w-full form-control form-control-lg" name="content"
                                v-model="form.intro_text" id="intro_text" cols="30" rows="10"></textarea>
                            <InputError :message="form.errors.intro_text" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
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
    </AppLayout>
</template>
<style></style>