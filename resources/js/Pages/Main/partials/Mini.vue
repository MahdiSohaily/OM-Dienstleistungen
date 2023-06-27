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
})

const form = useForm({
    mini_description: props.main_page.mini_description,
});

const updateData = () => {
    form.post(route('main.storeMini'), {
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
        <div class="container">
            <div class="row">
                <div class="bg-gradient-dark position-relative border-radius-xl">
                    <img :src="'../assets/img/shapes/waves-white.svg'" alt="pattern-lines"
                        class="position-absolute start-0 top-md-0 w-100 opacity-6">
                    <div class="container py-md-7 py-3 postion-relative z-index-2">
                        <div class="row">
                            <div class="col-md-5 col-12 ">
                                <img class="w-100 border-radius-lg shadow-lg" :src="'../assets/img/curved-images/about.jpg'"
                                    alt="Product Image">
                            </div>
                            <div class="col-md-7 col-12 ps-5">
                                <h3 class="text-gradient text-info">{{ company.name }}</h3>
                                <p v-for="item of split(form.mini_description)" class="pe-md-5 mb-4 text-white">
                                    {{ item }}
                                </p>
                                <Link :href="route('about')" target="blank" rel="nofollow"
                                    class="text-info icon-move-right">
                                Lernen Sie uns näher kennen
                                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row">
                <FormSection @submitted="updateData">
                    <template #description>
                        Aktualisieren Sie diesen Abschnitt mit dem folgenden Formular.
                    </template>
                    <template #form>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <textarea class="mt-1 block w-full form-control form-control-lg" name="mini_description"
                                v-model="form.mini_description" id="mini_description" cols="30" rows="10"></textarea>
                            <InputError :message="form.errors.mini_description" class="mt-2" />
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