export function generatePage({ folder, pascalName }) {
  const viewPath = `src/views/${folder}/${pascalName}View.vue`;
  const content = `
<script setup lang="ts">
import {IonPage, IonContent} from '@ionic/vue';
</script>

<template>
    <ion-page>
      <ion-content>
         <main>
           <h1>${pascalName}</h1>
         </main>
      </ion-content>
    </ion-page>

</template>
`;

  return {
    path: viewPath,
    content,
  };
}

export function generateRoute({ folder, pascalName, routePath, routeName }) {
  return {
    path: `src/router/routes/${routeName}.ts`,
    content: `
import type { RouteRecordRaw } from 'vue-router';

const route: RouteRecordRaw = {
  path: '${routePath}',
  name: '${routeName}',
  component: () => import('../../views/${folder}/${pascalName}View.vue'),
};

export default route;
`,
  };
}
