export function generateComponent({ folder, pascalName }) {
  return {
    path: `src/components/${folder}/${pascalName}.vue`,
    content: `
<script setup lang="ts">
</script>

<template>
  <div>
    ${pascalName}
  </div>
</template>


`,
  };
}
