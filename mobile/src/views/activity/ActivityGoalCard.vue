<script setup lang="ts">
import { computed } from 'vue';
import ProgressBar from '@/components/dashboard/ProgressBar.vue';

const props = withDefaults(
  defineProps<{
    title: string;
    icon: string;
    goal: number;
    progress: number;
    current: string;
    unit?: string;
    description?: string;
  }>(),
  {
    unit: '',
    description: '',
  },
);
</script>

<template>
  <div class="rounded-xl bg-primary-contrast px-4 py-4">
    <div class="flex justify-between">
      <div class="flex gap-4">
        <img :src="icon" :alt="title" class="h-8 w-8" />

        <div>
          <p class="text-lg">{{ title }}</p>
          <p class="text-xs">{{ description }}</p>
        </div>
      </div>

      <span class="text-xl font-semibold text-gray-300"> {{ goal }} {{ unit }} </span>
    </div>

    <div class="mt-4">
      <ProgressBar :value="props.progress/100" />
      <p class="mt-2 text-xs text-gray-300">{{current}}  min</p>
    </div>
  </div>
</template>
