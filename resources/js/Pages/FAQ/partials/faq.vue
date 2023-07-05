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
    id: props.faq.id,
    question: props.faq.question,
    answer: props.faq.answer,
});

const updateData = () => {
    form.post(route('faq.updateFAQ'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};
</script>
<template>
    <AppLayout title="FAQ" :name="props.company.name">
        <div class="col-11 mx-auto">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="mb-0">Question</h6>
                            <p class="text-sm">
                                {{ form.question }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <h6 class="mb-0">Answer</h6>
                    <p class="text-sm">
                        {{ form.answer }}
                    </p>
                </div>
            </div>
        </div>
        <section class="col-11 mx-auto py-5">
            <div class="row">
                <FormSection @submitted="updateData">
                    <template #form>
                        <!-- Name -->
                        <div hidden class="col-span-6 sm:col-span-4">
                            <TextInput id="id" v-model="form.id" type="text" class="mt-1 block w-full" autocomplete="id" />
                            <InputError :message="form.errors.id" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <label for="question">Question</label>
                            <textarea name="question" aria-describedby="addon-right addon-left" rows="5"
                                class="form-control" v-model="form.question">{{ form.question }}</textarea>
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <label for="answer">Answer</label>
                            <textarea name="answer" aria-describedby="addon-right addon-left" rows="5" class="form-control"
                                v-model="form.answer">{{ form.answer }}</textarea>
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
        </section>
    </AppLayout>
</template>