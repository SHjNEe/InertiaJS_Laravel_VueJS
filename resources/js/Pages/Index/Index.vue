<template>
    <p>Main page</p>
    <div>The message is {{ message }}</div>
</template>

<script setup>
// import MainLayout from "../../Layouts/MainLayout.vue";
defineProps({ messageFrom: String });
</script>
