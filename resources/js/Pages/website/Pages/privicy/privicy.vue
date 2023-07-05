<script setup>
import { Head } from '@inertiajs/vue3';
import Navbar from '../../Layouts/Navbar.vue';
import Footer from '../../Layouts/Footer.vue';

const props = defineProps({
    company: Object,
});

</script>
<template>
    <Head title="Impressum" />
    <Navbar :company="company" />
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="col-8 mx-auto card card-body  shadow-blur mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="mx-auto my-auto">
                    <div class="h-100">
                        <h4 class="mb-1">
                            Impressum
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h4 class="mb-0">Angaben gemäß § 5 TMG</h4>
                    </div>
                    <div class="card-body p-3">
                        <pre>
O&M Dienstleistungen GbR
Am Tonschuppen 2
53347 Alfter
                       </pre>
                        <h5>Vertreten durch:</h5>
                        <pre>
[Vor- und Nachnamen der vertretungsberechtigten Personen]
                        </pre>
                        <h5>Kontakt</h5>

                        <pre>
<a href="tel:04917681155605">Telefon: +49 (0) 176 81155605</a>
<a href="mailto:info@om-dienstleistungen.de">E-Mail: info@om-dienstleistungen.de</a>
</pre>
                        <h5>Umsatzsteuer-ID</h5>
                        <p>Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz:
                            DE357267009
                        </p>
                        <h5>Berufsbezeichnung und berufsrechtliche Regelungen</h5>
                        <pre>
Berufsbezeichnung:
Reinigungskraft
Zuständige Kammer:
Verliehen in:
Deutschland
Es gelten folgende berufsrechtliche Regelungen:
                        </pre>
                        <h4>Angaben zur Berufshaftpflichtversicherung</h4>
                        <h5>Name und Sitz des Versicherers:</h5>
                        <pre>
Helvetia Versicherungen
61377 Friedrichsdorf
Geltungsraum der Versicherung:
Deutschland
                        </pre>
                        <h4>EU-Streitschlichtung</h4>
                        <p>Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:
                            <a class="text-info"
                                href="https://ec.europa.eu/consumers/odr/">https://ec.europa.eu/consumers/odr</a>. <br>
                            Unsere E-Mail-Adresse finden Sie oben im Impressum.
                        </p>
                        <h4>Verbraucherstreitbeilegung/Universalschlichtungsstelle</h4>
                        <p>Verbraucherstreitbeilegung/Universalschlichtungsstelle Verbraucherschlichtungsstelle
                            teilzunehmen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer :name="company.name" />
</template>
<style></style>