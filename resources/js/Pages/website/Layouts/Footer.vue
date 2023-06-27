<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
  name: String,
});
</script>
<template>
  <!-- <footer class="footer pt-5 mt-5">
    <hr class="horizontal dark mb-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <h6 class="text-gradient text-primary font-weight-bolder">Company Name</h6>
          </div>
          <div>
            <h6 class="mt-3 mb-2 opacity-8">Social</h6>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <Link class="nav-link pe-1" href="https://www.facebook.com/#/" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </Link>
              </li>

              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/#" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link pe-1" href="https://instagram.com/#" target="_blank">
                  <i class="fab fa-instagram text-lg opacity-8"></i>
                </a>
              </li>


              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/#official" target="_blank">
                  <i class="fab fa-linkedin text-lg opacity-8"></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel#" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-gradient text-primary text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <Link class="nav-link" :href="route('about')">
                Über uns
                </Link>
              </li>

              <li class="nav-item">
                <Link class="nav-link" :href="route('services')">
                  Dienstleistungen
                </Link>
              </li>

              <li class="nav-item">
                <Link class="nav-link" :href="route('about')">
                  What we have done
                </Link>
              </li>

              <li class="nav-item">
                <Link class="nav-link" :href="route('blog')">
                  Blog
                </Link>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-gradient text-primary text-sm">Hilfe Unterstützung</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://contact-us" target="_blank">
                  Kontaktiere uns
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://knowledge-center" target="_blank">
                  Frequently Asked
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-soft-ui-footer" target="_blank">
                  Custom Development
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://sponsorships" target="_blank">
                  Sponsorships
                </a>
              </li>

                </ul>
              </div>
            </div>
                      </div>
                  </div>
                </footer> -->
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
              <Link class="nav-link text-white opacity-8" :href="route('blog')" target="_blank">
              Blog
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