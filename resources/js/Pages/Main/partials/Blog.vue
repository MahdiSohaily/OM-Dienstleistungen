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
    blog_title: props.main_page.blog_title,
    blog_title_desc: props.main_page.blog_title_desc,
});

const updateData = () => {
    form.post(route('main.storeBlog'), {
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
                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="mb-0">{{ form.blog_title }}</h2>
                    <p class="lead">
                        {{ form.blog_title_desc }}
                    </p>
                    <Link :href="route('blog')" target="blank" rel="nofollow" class="text-info icon-move-right">
                    Erkunde mehr
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </Link>
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
                            <TextInput id="blog_title" v-model="form.blog_title" type="text" class="mt-1 block w-full"
                                autocomplete="blog_title" />
                            <InputError :message="form.errors.blog_title" class="mt-2" />
                        </div>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="blog_title_desc" v-model="form.blog_title_desc" type="text"
                                class="mt-1 block w-full" autocomplete="blog_title_desc" />
                            <InputError :message="form.errors.blog_title_desc" class="mt-2" />
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
        <div class="container mt-sm-5">
            <div class="page-header min-vh-50 my-sm-3 mb-3 border-radius-xl"
                style="background-image:url(./assets/img/basic-leaning.jpg);">
                <span class="mask bg-gradient-dark"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ms-lg-5">
                            <h1 class="text-white">Was ist eine Grundreinigung?</h1>
                            <p class="lead text-white opacity-8">
                                Zur Grundreinigung eines Unternehmens gehören in der Regel das Staubwischen, Wischen und
                                Desinfizieren von Oberflächen, das Staubsaugen und Wischen von Böden, das Reinigen von
                                Toiletten und das Leeren von Mülleimern.
                            </p>
                            <Link :href="route('blog')" class="text-info icon-move-right">
                            Weiterlesen
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl p-5">

                        <div class="description">
                            <h5>Window cleaning like a pro</h5>
                            <p>
                                Um Fenster wie ein Profi zu reinigen, wählen Sie zunächst die richtigen Werkzeuge aus,
                                darunter einen hochwertigen Rakel, einen Schrubber, einen Eimer, eine Reinigungslösung
                                und
                                ein Mikrofasertuch. Reinigen Sie den Fensterrahmen und die Fensterbank, bevor Sie die
                                Reinigungslösung mit kreisenden Bewegungen auf das Fenster auftragen.
                            </p>
                            <Link :href="route('blog')" class="text-info icon-move-right">
                            Weiterlesen
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </Link>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl p-5">
                        <div class="description">
                            <h5>Was ist eine Unterhaltsreinigung?</h5>
                            <p>
                                Unter Unterhaltsreinigung versteht man die regelmäßigen und routinemäßigen
                                Reinigungsarbeiten, die durchgeführt werden, um einen Raum oder Gegenstand in gutem
                                Zustand
                                zu halten. Diese Aufgaben werden in der Regel täglich oder wöchentlich erledigt und
                                umfassen
                                das Reinigen von Oberflächen, Staubwischen sowie das Wischen oder Staubsaugen von Böden.
                            </p>
                            <Link :href="route('blog')" class="text-info icon-move-right">
                            Weiterlesen
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </Link>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="info-horizontal bg-gray-100 border-radius-xl p-5">
                        <div class="description">
                            <h5>Gebäudereinigung – Was gehört dazu?</h5>
                            <p>
                                Unter Gebäudereinigung versteht man die Reinigung und Pflege der Innen- und Außenräume
                                eines
                                Gebäudes. Diese Art der Reinigung kann je nach den Bedürfnissen des Gebäudes und seiner
                                Bewohner ein breites Spektrum an Aufgaben umfassen.
                            </p>
                            <Link :href="route('blog')" class=" text-info icon-move-right">
                            Weiterlesen
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<style></style>