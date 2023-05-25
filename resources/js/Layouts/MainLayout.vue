<template>
    <header
        class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full"
    >
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-lg">
                    <Link
                        class="text-lg font-medium"
                        :href="route('listing.index')"
                    >
                        Listings
                    </Link>
                </div>

                <div class="text-lg">
                    <Link
                        class="text-xl text-center text-indigo-600 dark:text-indigo-300 font-bold"
                        :href="route('listing.index')"
                    >
                        Home Page
                    </Link>
                </div>
                <div class="text-lg">
                    <Link :href="route('listing.create')" class="btn-primary"
                        >+ New Listing</Link
                    >
                </div>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <div
            v-if="flashSuccess"
            class="mb-4 border rouned-md shadow-sm border-green-200 dark:border-green-800 bg-white dark:bg-green-900 p-2"
        >
            {{ flashSuccess }}
        </div>
        <slot>Default</slot>
    </main>
</template>

<script setup>
import { computed } from "vue";
import { Link, usePage } from "@inertiajs/inertia-vue3";

const page = usePage();
const flashSuccess = computed(() => page.props.value.flash.success);
</script>
