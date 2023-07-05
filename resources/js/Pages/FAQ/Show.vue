<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';


const props = defineProps({
    company: Object,
    faqs: Array,
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
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                    </td>
                                    <td>
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