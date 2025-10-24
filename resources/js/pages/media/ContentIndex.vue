<script setup lang="ts">
import { Head } from '@inertiajs/vue3';

defineProps({
    teste: String,
})
</script>
<template>

    <Head title="Content" />

    <div>Hellow!</div>
    <span class="text-white">{{ teste }}</span>
</template>
