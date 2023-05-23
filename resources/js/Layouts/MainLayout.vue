<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/show">Show Page</Link>&nbsp;
    <Link href="/listing">Listing Page</Link>
    <slot>Default</slot>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>
