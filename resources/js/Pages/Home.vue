<script setup>
import { Link, Head } from '@inertiajs/vue3';
import Navbar from './website/Layouts/Navbar.vue';
import Header from './website/Layouts/Header.vue';
import Footer from './website/Layouts/Footer.vue';



const props = defineProps({
    'company': Object,
    'main_page': Object
})

const split = (data) => {
    return data.split('\n');
}
</script>

<template>
    <Head title="Home" />
    <Navbar :company="company" />
    <Header :title="props.main_page.title" :title_desc="props.main_page.title_desc"
        :mail_to_title="props.main_page.mail_to_title" :social_title="props.main_page.social_title"
        :mail_to="company.email_address" />
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center text-center my-sm-5">
                    <div class="col-lg-6">
                        <h2 class="text-dark mb-0">{{ main_page.services_title }}</h2>
                        <p class="lead">{{ main_page.services_title_desc }}</p>
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
                <div class="col-lg-8">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <h5 class="font-weight-bolder mt-3">Glas- und Gebäudereinigung</h5>
                                <p class="pe-5">
                                    Glas- und Gebäudereinigungsdienste sind für jedes Unternehmen, das ein sauberes,
                                    professionelles Image bewahren möchte, unerlässlich. Bei diesen Dienstleistungen handelt
                                    es sich um die Reinigung der Außen- und Innenflächen eines Gebäudes, einschließlich der
                                    Fenster, Fassaden, Wände und Dächer.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <h5 class="font-weight-bolder mt-3">Abbrucharbeiten</h5>
                                <p class="pe-3">
                                    Bei Abbrucharbeiten handelt es sich um den Abriss oder die Entfernung von Bauwerken wie
                                    Gebäuden oder Brücken. Diese Dienstleistungen werden häufig von Unternehmen in Anspruch
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
                                <p class="pe-5">Unter Räumungsdiensten versteht man das Entfernen unerwünschter Gegenstände,
                                    Abfälle oder Materialien aus einem Grundstück oder Raum. Dieser Service wird
                                    typischerweise von Unternehmen in Anspruch genommen, die eine Fläche für Neubauten oder
                                    Renovierungen räumen müssen, oder von Unternehmen, die an einen neuen Standort umziehen
                                    und unerwünschte Gegenstände entsorgen müssen.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="info">
                                <h5 class="font-weight-bolder mt-3">Müllentsorgung</h5>
                                <p class="pe-3">Abfallentsorgungsdienste umfassen den Prozess des Sammelns, Transports und
                                    Entsorgens von Abfallmaterialien von einem Unternehmens- oder Industriestandort. Dieser
                                    Service wird typischerweise von Unternehmen in Anspruch genommen, die eine große Menge
                                    Abfall erzeugen und eine sichere und effiziente Möglichkeit zur Entsorgung benötigen</p>
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
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class=" position-relative border-radius-xl">
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
                                <p v-for="item of split(main_page.mini_description)" class="pe-md-5 text-">
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

    </section>
    <!-- <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="mb-0">{{ main_page.blog_title }}</h2>
                    <p class="lead">
                        {{ main_page.blog_title_desc }}
                    </p>
                    <Link :href="route('blog')" target="blank" rel="nofollow" class="text-info icon-move-right">
                    Erkunde mehr
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </Link>
                </div>
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
                                darunter einen hochwertigen Rakel, einen Schrubber, einen Eimer, eine Reinigungslösung und
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
                                Reinigungsarbeiten, die durchgeführt werden, um einen Raum oder Gegenstand in gutem Zustand
                                zu halten. Diese Aufgaben werden in der Regel täglich oder wöchentlich erledigt und umfassen
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
                                Unter Gebäudereinigung versteht man die Reinigung und Pflege der Innen- und Außenräume eines
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
    </section> -->

    <Footer :name="company.name" />
</template>

<style></style>
