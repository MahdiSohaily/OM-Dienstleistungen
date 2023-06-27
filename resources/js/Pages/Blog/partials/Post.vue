<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    post: Object,
});

</script>
<template>
    <div class="col-lg-4 col-sm-6">
        <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
                <Link :href="route('blog.edit', post.id)">
                <img class="w-100 border-radius-lg move-on-hover shadow" :src="post.photo_path">
                </Link>
            </div>
            <div class="card-body px-0">
                <h5>
                    <Link :href="route('blog.edit', post.id)" class="text-dark font-weight-bold">
                    {{ post.title }}
                    </Link>
                </h5>
                <p class="custom-description h-3">
                    {{ post.intro_text }}
                </p>
                <Link :href="route('blog.edit', post.id)" class="text-info icon-move-right">Weiterlesen
                <i class="fas fa-arrow-right text-sm"></i>
                </Link>
            </div>
        </div>
    </div>
</template>
<style></style>