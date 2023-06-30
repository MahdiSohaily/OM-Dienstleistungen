<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
  name: String,
});
</script>
<template>
  <footer class="footer py-5 bg-gradient-dark position-relative overflow-hidden">
    <img src="../../../../../public/assets/img/shapes/waves-white.svg" alt="pattern-lines"
      class="position-absolute start-0 top-0 w-100 opacity-6">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 me-auto mb-lg-0 mb-4 text-lg-start text-center">
          <h6 class="text-white font-weight-bolder text-uppercase mb-lg-4 mb-3">{{ props.name }}</h6>
          <ul class="nav flex-row ms-n3 justify-content-lg-start justify-content-center mb-4 mt-sm-0">
            <li class="nav-item">
              <Link class="nav-link text-white opacity-8" :href="route('about')" target="_blank">
              Über uns
              </Link>
            </li>
            <li class="nav-item">
              <Link class="nav-link text-white opacity-8" :href="route('services')" target="_blank">
              Dienstleistungen
              </Link>
            </li>
            <li class="nav-item">
              <Link class="nav-link text-white opacity-8" :href="route('home')" target="_blank">
              Kontaktiere uns
              </Link>
            </li>
            <li class="nav-item">
              <Link class="nav-link text-white opacity-8" :href="route('home')" target="_blank">
              Privecy Policy
              </Link>
            </li>
            <li class="nav-item">
              <Link class="nav-link text-white opacity-8" :href="route('home')" target="_blank">
              Terms & Conditions
              </Link>
            </li>
          </ul>
          <p class="text-sm text-white opacity-8 mb-0">
            Urheberrechte © 2023 von OM-Dienstleistungen.
          </p>
        </div>
        <div class="col-lg-6 ms-auto text-lg-end text-center">
          <p class="mb-5 text-lg text-white font-weight-bold">
            Der Lohn für das Betreten der Bühne ist Ruhm. Der Preis des Ruhms ist, dass man die Bühne nicht verlassen
            kann.
          </p>
          <Link href="javascript:;" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
          <span class="fab fa-instagram" aria-hidden="true"></span>
          </Link>
          <Link href="javascript:;" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
          <span class="fab fa-twitter" aria-hidden="true"></span>
          </Link>
          <Link href="javascript:;" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
          <span class="fab fa-facebook" aria-hidden="true"></span>
          </Link>
          <Link href="javascript:;" target="_blank" class="text-white opacity-5">
          <span class="fab fa-linkedin" aria-hidden="true"></span>
          </Link>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER ------- -->
</template>
<style></style>