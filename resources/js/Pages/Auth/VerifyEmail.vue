<template>
    <div>You need to be verified first to view this page.</div>
    <div>
        <Link
            :href="route('verification.send')"
            method="post"
            as="button"
            class="text-indigo-600 dark:text-indigo-400"
            >Resend verification email</Link
        >
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    layout: MainLayout,
};
</script>
