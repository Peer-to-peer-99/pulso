<script setup lang="ts">
import { computed } from 'vue';

const props = withDefaults(
  defineProps<{
    value?: number;
  }>(),
  {
    value: 0,
  },
);

const normalizedValue = computed(() => Math.min(Math.max(props.value, 0), 1));
const percentage = computed(() => Math.round(normalizedValue.value * 100));
</script>

<template>
  <div class="flex items-center gap-3 w-full">
    <ion-progress-bar :value="normalizedValue" color="primary" class="flex-1" />
    <span class="text-xs text-gray-300"> {{ percentage }}% </span>
  </div>
</template>

<style scoped></style>
