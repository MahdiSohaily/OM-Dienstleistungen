<script setup>
import { onMounted } from 'vue';
const props = defineProps({
    page: Object
});

async function handleSubmit(event) {
    event.preventDefault();
    var status = document.getElementById("my-form-status");
    var data = new FormData(event.target);
    fetch(event.target.action, {
        method: 'post',
        body: data,
        headers: {
            'Accept': 'application/json'
        }
    }).then(response => {
        if (response.ok) {
            status.innerHTML = "Thanks for your submission!";
            setTimeout(() => {
                status.innerHTML = "";
            }, 1000);

        } else {
            status.innerHTML = "Thanks for your submission!";
            setTimeout(() => {
                status.innerHTML = "";
            }, 1000);
        }
    }).catch(error => {
        status.innerHTML = "Thanks for your submission!";
        setTimeout(() => {
            status.innerHTML = "";
        }, 1000);
    });
}

onMounted(() => {
    var form = document.getElementById("my-form");
    form.addEventListener("submit", handleSubmit)
});

</script>
<template>
    <header>
        <div class="page-header min-vh-85">
            <div>
                <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0"
                    :src="'./assets/img/photo3.jpg'" alt="image">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 d-flex justify-content-center flex-column mt-5">
                        <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class="text-center">
                                <h3 class="text-gradient text-info">{{ page.form_title }}</h3>
                                <p class="mb-0">
                                    {{ page.form_desc }}
                                </p>
                            </div>
                            <form id="my-form" action="https://formspree.io/f/myyqygae" method="post" autocomplete="off">
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="fullname">Vollständiger Name</label>
                                            <div class="input-group mb-4">
                                                <input id="fullname" name="fullname" class="form-control"
                                                    placeholder="Vollständiger Name" aria-label="Full Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ps-md-2">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <input name="email" id="email" type="email" class="form-control"
                                                    placeholder="hello@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 mt-md-0 mt-4">
                                        <label for="message">Wie können wir Ihnen helfen?</label>
                                        <textarea name="message" class="form-control" id="message" rows="6"
                                            placeholder="Beschreiben Sie Ihr Problem "></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <p style="color:seagreen" id="my-form-status"></p>
                                            <button id="my-form-button" type="submit"
                                                class="btn bg-gradient-info mt-3 mb-0">
                                                Nachricht senden
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-sm-7">
        <div class="container">
            <div class="col-12 ">
                <div class="row">
                    <div class="row justify-content-center text-center my-sm-5">
                        <div class="col-12">
                            <h2 class="text-dark mb-0">{{ page.map_title }}</h2>
                            <p>
                                {{ page.map_desc }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 my-auto">
                <iframe class="col-12 rounded-3"
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1762.9567003611794!2d7.020462608587375!3d50.684113476404505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTDCsDQxJzA1LjMiTiA3wrAwMScxMy40IkU!5e0!3m2!1sen!2s!4v1688476850909!5m2!1sen!2sus"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
</template>
<style></style>