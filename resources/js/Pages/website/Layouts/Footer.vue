<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
  name: String,
});
</script>
<template>
  <footer class="footer py-5 bg-gradient-dark position-relative overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 me-auto mb-lg-0 mb-4 text-lg-start text-center">
          <h6 class="text-white font-weight-bolder text-uppercase mb-lg-4 mb-3">{{ props.name }}</h6>
          <ul class="nav flex-row ms-n3 justify-content-lg-start justify-content-center mb-4 mt-sm-0">
            <li class="nav-item">
              <a class="nav-link text-white" :href="route('about')">
                Über uns
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" :href="route('services')">
                Dienstleistungen
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" :href="route('privicy')">
                Impressum
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" :href="route('policy')">
                Datenschutz
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" :href="route('contact')">
                Kontaktiere
              </a>
            </li>
          </ul>
          <p class="text-sm text-white mb-0">
            Urheberrechte © 2023 von {{ name }}.
          </p>
        </div>
        <div class="col-lg-6 ms-auto text-center ">
          <p class="mb-5 text-md text-white font-weight-bold">
            Der Lohn für das Betreten der Bühne ist Ruhm. Der Preis des Ruhms ist, dass man die Bühne nicht verlassen
            kann.
          </p>
          <a href="javascript:;" target="_blank" class="text-white me-xl-4 me-4">
            <span class="fab fa-instagram" aria-hidden="true"></span>
            <span class="text-sm px-2">Follow us on instagram</span>
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER ------- -->
</template>
<style></style>