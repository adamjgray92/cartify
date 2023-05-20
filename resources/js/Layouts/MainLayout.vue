<template>
    <header
        class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full"
    >
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-lg font-medium">
                    <Link :href="route('listing.index')">Listings</Link>&nbsp;
                </div>
                <div
                    class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center"
                >
                    <Link :href="route('listing.index')">LaraZillow</Link>&nbsp;
                </div>
                <div v-if="user" class="flex items-center gap-4">
                    <Link
                        :href="route('notification.index')"
                        class="text-gray-500 relative pr-2 py-2"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
                            />
                        </svg>

                        <div
                            v-if="notificationCount"
                            class="absolute right-0 top-0 w-5 h-5 bg-red-700 dark:bg-red-400 text-white font-medium border border-white dark:border-gray-900 rounded-full text-xs text-center"
                        >
                            {{ notificationCount }}
                        </div>
                    </Link>
                    <Link
                        :href="route('realtor.listing.index')"
                        class="text-sm text-gray-500"
                        >{{ user.name }}</Link
                    >
                    <Link
                        :href="route('realtor.listing.create')"
                        class="btn-primary"
                        >+ New Listing</Link
                    >
                    <div>
                        <Link method="delete" :href="route('logout')"
                            >Logout</Link
                        >
                    </div>
                </div>
                <div v-else class="flex items-center gap-2">
                    <Link :href="route('user-account.create')" as="button"
                        >Register</Link
                    >
                    <Link :href="route('login')" as="button">Sign In</Link>
                </div>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p-4 w-full">
        <div
            v-if="flashSuccess"
            class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2"
        >
            {{ flashSuccess }}
        </div>

        <slot></slot>
    </main>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const flashSuccess = computed(() => usePage().props.flash.success);
const user = computed(() => usePage().props.user);
const notificationCount = computed(() =>
    Math.min(usePage().props.user.notificationCount, 9)
);
</script>
