export function generateLayout({ folder, pascalName }) {
  return {
    path: `src/layouts/${folder ? `${folder}/` : ''}${pascalName}.vue`,
    content: `
<script setup lang="ts">
</script>

<template>
  <div>
    <slot />
  </div>
</template>
`,
  };
}
