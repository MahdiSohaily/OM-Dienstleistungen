<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';


const props = defineProps({
    company: Object,
    about_page: Object,
    social_media: Object,
});

</script>
<template>
    <AppLayout title="FAQ" :name="props.company.name">

        <Head title="FAQ" />
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>All the frequently asked questions</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Question
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Answer
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">John Michael</h6>
                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                                        <p class="text-xs text-secondary mb-0">Organization</p>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style></style>