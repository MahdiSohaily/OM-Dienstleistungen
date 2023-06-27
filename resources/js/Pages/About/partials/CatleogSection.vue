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
    catelog_title: props.page.catelog_title,
    catelog_title_2: props.page.catelog_title_2,
    catelog_desc: props.page.catelog_desc,
    catelog_btn: props.page.catelog_btn,
});

const updateData = () => {
    form.post(route('about.storeCatelog'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};

</script>
<template>
    <section class="py-sm-7">
        <div class="container">
            <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
                <img :src="'../assets/img/shapes/waves-white.svg'" alt="pattern-lines"
                    class="position-absolute start-0 top-md-0 w-100 opacity-6">
                <div class="container py-7 postion-relative z-index-2 position-relative">
                    <div class="row">
                        <div class="col-md-7 mx-auto text-center">
                            <h3 class="text-white mb-0">{{ form.catelog_title }}</h3>
                            <h3 class="text-info text-gradient mb-4">{{ form.catelog_title_2 }}</h3>
                            <p class="text-white mb-5">
                                {{ form.catelog_desc }}
                            </p>
                            <a href="javascript:;" class="btn btn-info btn-lg mb-3 mb-sm-0">{{ form.catelog_btn }}</a>
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
                            <TextInput id="catelog_title" v-model="form.catelog_title" type="text" class="mt-1 block w-full"
                                autocomplete="catelog_title" />
                            <InputError :message="form.errors.catelog_title" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="catelog_title_2" v-model="form.catelog_title_2" type="text" class="mt-1 block w-full"
                                autocomplete="catelog_title_2" />
                            <InputError :message="form.errors.catelog_title_2" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="catelog_desc" v-model="form.catelog_desc" type="text" class="mt-1 block w-full"
                                autocomplete="catelog_desc" />
                            <InputError :message="form.errors.catelog_desc" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="catelog_btn" v-model="form.catelog_btn" type="text" class="mt-1 block w-full"
                                autocomplete="catelog_btn" />
                            <InputError :message="form.errors.catelog_btn" class="mt-2" />
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