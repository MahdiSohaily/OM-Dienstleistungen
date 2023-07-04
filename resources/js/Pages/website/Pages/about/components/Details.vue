<script setup>
const props = defineProps({
  page: Object
})
</script>
<template>
  <!-- Section with four info areas left & one card right with image and waves -->
  <section class="py-7">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="row justify-content-start">
            <div class="col-md-12">
              <div class="info">
                <h4 class="d-flex align-items-center">
                  <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center me-2">
                    <i class="fas fa-handshake opacity-10" aria-hidden="true"></i>
                  </div>
                  {{ page.who_we_are }}
                </h4>
                <p>
                  {{ page.who_we_are_desc }}
                </p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="info">
                <h4 class="d-flex align-items-center">
                  <div class="icon icon-shape rounded-circle bg-gradient-info shadow text-center me-2">
                    <i class="fas fa-briefcase opacity-10" aria-hidden="true"></i>
                  </div>
                  {{ page.what_we_do }}
                </h4>
                <p>
                  {{ page.what_we_do_desc }}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
          <div class="card shadow-lg">
            <div class="card-header p-0 mx-3 my-3 position-relative z-index-1">
              <div class="d-block blur-shadow-image">
                <img :src="page.about_photo" alt="img-blur-shadow" class="img-fluid shadow rounded-3">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<style></style>