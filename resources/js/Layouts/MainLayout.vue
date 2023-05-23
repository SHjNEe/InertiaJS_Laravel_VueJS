<template>
    <Link href="/listing">Listings</Link>&nbsp;
    <Link href="/listing/create">New Listing</Link>
    <!-- <div>The page with time {{ timer }}</div> -->
    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>
    <slot>Default</slot>
</template>

<script setup>
import { computed } from "vue";
import { Link, usePage } from "@inertiajs/inertia-vue3";

const page = usePage();
const flashSuccess = computed(() => page.props.value.flash.success);
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
