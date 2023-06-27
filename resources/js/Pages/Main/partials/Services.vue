<script setup>
import { useForm, Link } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { ref } from 'vue';

const props = defineProps({
    company: Object,
    main_page: Object,
})

const url = ref('');

const form = useForm({
    services_title: props.main_page.services_title,
    services_title_desc: props.main_page.services_title_desc,
    filename: null,
    file: null,
});

const updateData = () => {
    form.post(route('main.storeServices'), {
        preserveScroll: true,
        onSuccess: () => { },
    });
};

const onFileChange = (e) => {
    url.value = URL.createObjectURL(e.target.files[0]);
    console.log(url.value);
    form.filename = "Selected File: " + e.target.files[0].name;
    form.file = e.target.files[0];
}

</script>
<template>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center text-center my-sm-5">
                    <div class="col-lg-6">
                        <h2 class="text-dark mb-0">{{ form.services_title }}</h2>
                        <p class="lead">{{ form.services_title_desc }}</p>
                        <Link :href="route('services')" target="blank" rel="nofollow" class="text-info icon-move-right">
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
                            <TextInput id="services_title" v-model="form.services_title" type="text"
                                class="mt-1 block w-full" autocomplete="services_title" />
                            <InputError :message="form.errors.services_title" class="mt-2" />
                        </div>
                        <input type="file" name="filename" class="custom-file-input" id="inputFileUpload"
                            v-on:change="onFileChange">
                        <label class="custom-file-label" for="inputFileUpload">Choose file</label>
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4">
                            <TextInput id="services_title_desc" v-model="form.services_title_desc" type="text"
                                class="mt-1 block w-full" autocomplete="services_title_desc" />
                            <InputError :message="form.errors.services_title_desc" class="mt-2" />
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
                <div class="col-lg-8">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <h5 class="font-weight-bolder mt-3">Glas- und Gebäudereinigung</h5>
                                <p class="pe-5">
                                    Glas- und Gebäudereinigungsdienste sind für jedes Unternehmen, das ein sauberes,
                                    professionelles Image bewahren möchte, unerlässlich. Bei diesen Dienstleistungen
                                    handelt
                                    es sich um die Reinigung der Außen- und Innenflächen eines Gebäudes, einschließlich
                                    der
                                    Fenster, Fassaden, Wände und Dächer.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <h5 class="font-weight-bolder mt-3">Abbrucharbeiten</h5>
                                <p class="pe-3">
                                    Bei Abbrucharbeiten handelt es sich um den Abriss oder die Entfernung von Bauwerken
                                    wie
                                    Gebäuden oder Brücken. Diese Dienstleistungen werden häufig von Unternehmen in
                                    Anspruch
                                    genommen, die alte oder veraltete Gebäude räumen müssen, um Platz für Neubauten oder
                                    Renovierungen zu schaffen.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mt-3">
                        <div class="col-md-6 mt-3">
                            <div class="info">
                                <h5 class="font-weight-bolder mt-3">Entrümpelung</h5>
                                <p class="pe-5">Unter Räumungsdiensten versteht man das Entfernen unerwünschter
                                    Gegenstände,
                                    Abfälle oder Materialien aus einem Grundstück oder Raum. Dieser Service wird
                                    typischerweise von Unternehmen in Anspruch genommen, die eine Fläche für Neubauten
                                    oder
                                    Renovierungen räumen müssen, oder von Unternehmen, die an einen neuen Standort
                                    umziehen
                                    und unerwünschte Gegenstände entsorgen müssen.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="info">
                                <h5 class="font-weight-bolder mt-3">Müllentsorgung</h5>
                                <p class="pe-3">Abfallentsorgungsdienste umfassen den Prozess des Sammelns, Transports
                                    und
                                    Entsorgens von Abfallmaterialien von einem Unternehmens- oder Industriestandort.
                                    Dieser
                                    Service wird typischerweise von Unternehmen in Anspruch genommen, die eine große
                                    Menge
                                    Abfall erzeugen und eine sichere und effiziente Möglichkeit zur Entsorgung benötigen
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-lg-4 mt-lg-0 mt-4">
                    <div class="card card-background card-background-mask-secondry tilt" data-tilt>
                        <div class="full-background" style="background-image: url(./assets/img/services.jpg)">
                        </div>
                        <div class="card-body pt-7 text-center">
                            <div class="icon icon-lg up mb-3 mt-3">
                                <svg width="50px" height="50px" viewBox="0 0 42 42" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>box-3d-50</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF"
                                            fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                                                    <path
                                                        d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                    </path>
                                                    <path
                                                        d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                        opacity="0.7"></path>
                                                    <path
                                                        d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                        opacity="0.7"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h2 class="text-white up mb-0">Spüre das
                                <br /> Qualität
                            </h2>

                            <Link :href="route('services')" class="btn btn-outline-white mt-5 up btn-round">
                            In Kontakt Kommen
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<style></style>