<script setup lang="ts">
import { useUserInitials } from '@/composables/useUserInitials';

const props = defineProps<{
  name?: string;
  description?: string;
}>();

const {initial} = useUserInitials(() => props.name);
</script>

<template>
  <div class="flex gap-4 mx-4 mt-5 items-center">
    <ion-avatar class="flex items-center justify-center border border-primary">{{initial}}</ion-avatar>
    <div>
      <label class="text-lg">Olá,  {{name}}</label>
      <p class="text-gray-400"> {{props.description}}</p>
    </div>
  </div>
</template>

<style scoped></style>
