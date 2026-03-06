<script setup lang="ts">
    const props = defineProps(['slug'])
</script>

<template>
    The slug of this project is: {{ props.slug }}
</template>