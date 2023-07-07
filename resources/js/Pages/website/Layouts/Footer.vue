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
                Kontakt
              </a>
            </li>
          </ul>
          <p class="text-sm text-white mb-0">
            Copyright © 2023 {{ name }}.
          </p>
        </div>
        <div class="col-lg-6 ms-auto">
          <p class="text-white">
            {{ name }} GbR </p>
          <p class="text-white">
            Am Tonschuppen 2
          </p>
          <p class="text-white">53347 Alfter</p>
          <a class="text-white" href="tel:04917620727313">
            <span class="fa fa-phone text-white pe-2" aria-hidden="true"></span>(+49) 176 20727313
          </a>
          <br>
          <a class="text-white me-xl-4 me-4" href="tel:04917681155605">
            <span class="fa fa-phone text-white pe-2" aria-hidden="true"></span>(+49) 176 81155605
          </a>
          <br>
          <a href="https://instagram.com/om_dienstleistungen?igshid=NTc4MTIwNjQ2YQ==" target="_blank"
            class="text-white me-xl-4 me-4">
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