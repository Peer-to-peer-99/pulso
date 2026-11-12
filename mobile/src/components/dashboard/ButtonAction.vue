<script setup lang="ts">
const props = defineProps<{
  title?: string;
  icon?: string;
}>()
</script>
<template>
  <div class="flex items-center justify-center text-center border border-gray-500 rounded-3xl flex-col space-y-4 w-28 min-h-40">
    <img :src="props.icon" :alt="props.title"/>
    <label>{{props.title}}</label>
  </div>
</template>

<style scoped></style>
