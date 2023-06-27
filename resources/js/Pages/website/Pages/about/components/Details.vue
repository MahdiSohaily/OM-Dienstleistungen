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
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
              <div class="d-block blur-shadow-image">
                <img :src="page.about_photo" alt="img-blur-shadow" class="img-fluid shadow rounded-3">
              </div>
              <div class="colored-shadow"
                style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg&quot;);">
              </div>
            </div>
            <div class="card-body">
              <a href="javascript:;">
                <h5 class="mt-3">
                  Get insights on Search
                </h5>
              </a>
              <p>
                Website visitors today demand a frictionless user expericence — especially when using search. Because of
                the hight standards.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Section with four info areas left & one card right with image and waves -->
  <section class="py-sm-7">
    <div class="container">
      <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
        <img :src="'../assets/img/shapes/waves-white.svg'" alt="pattern-lines"
          class="position-absolute start-0 top-md-0 w-100 opacity-6">
        <div class="container py-7 postion-relative z-index-2 position-relative">
          <div class="row">
            <div class="col-md-7 mx-auto text-center">
              <h3 class="text-white mb-0">{{ page.catelog_title }}</h3>
              <h3 class="text-info text-gradient mb-4">{{ page.catelog_title_2 }}</h3>
              <p class="text-white mb-5">
                {{ page.catelog_desc }}
              </p>
              <a href="javascript:;" class="btn btn-info btn-lg mb-3 mb-sm-0">{{ page.catelog_btn }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
          <h2 class="mb-0">Mehr als vertrauenswürdig</h2>
          <h2 class="text-gradient text-info mb-3">1,000 Kunden</h2>
          <p class="lead">
            Viele Unternehmen, Startups, Universitäten und Regierungsinstitutionen lieben unsere Dienste.
          </p>
        </div>
      </div>
      <div class="row mt-6">


        <div class="col-lg-4 col-md-8">
          <div class="card card-plain">
            <div class="card-body">
              <div class="author">
                <div class="name">
                  <h6 class="mb-0 font-weight-bolder">Client Name</h6>
                  <div class="stats">
                    <i class="far fa-clock" aria-hidden="true"></i> 1 day ago
                  </div>
                </div>
              </div>
              <p class="mt-4">
                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quaerat ipsum itaque
                repellendus harum iste non! Explicabo delectus rem temporibus, quibusdam deleniti ad dolorum consequuntur
                odio porro id perspiciatis suscipit."
              </p>
              <div class="rating mt-3">
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-8 ms-md-auto">
          <div class="card bg-gradient-info">
            <div class="card-body">
              <div class="author align-items-center">
                <div class="name">
                  <h6 class="text-white mb-0 font-weight-bolder">Client Name</h6>
                  <div class="stats text-white">
                    <i class="far fa-clock" aria-hidden="true"></i> 1 week ago
                  </div>
                </div>
              </div>
              <p class="mt-4 text-white">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eligendi ea
                corporis fugit? Quia dolor nemo repudiandae distinctio, rem provident consequatur quam eaque debitis
                asperiores minima ab modi non labore!!!!"</p>
              <div class="rating mt-3">
                <i class="fas fa-star text-white" aria-hidden="true"></i>
                <i class="fas fa-star text-white" aria-hidden="true"></i>
                <i class="fas fa-star text-white" aria-hidden="true"></i>
                <i class="fas fa-star text-white" aria-hidden="true"></i>
                <i class="fas fa-star text-white" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-8">
          <div class="card card-plain">
            <div class="card-body">
              <div class="author">
                <div class="name">
                  <h6 class="mb-0 font-weight-bolder">Client Name</h6>
                  <div class="stats">
                    <i class="far fa-clock" aria-hidden="true"></i> 3 weeks ago
                  </div>
                </div>
              </div>
              <p class="mt-4">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis modi, necessitatibus et
                culpa neque ab corporis rerum alias corrupti expedita impedit explicabo velit? Quam inventore neque nam!
                Reprehenderit, quasi provident.!."</p>
              <div class="rating mt-3">
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
                <i class="fas fa-star" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>
<style></style>