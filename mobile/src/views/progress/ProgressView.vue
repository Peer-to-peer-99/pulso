<script setup lang="ts">
import { onMounted } from 'vue';
import { IonPage, IonContent, IonSegment, IonSegmentButton } from '@ionic/vue';
import {useRoute, useRouter } from 'vue-router';

const router = useRouter();
const route = useRoute();
const options = [
  {
    name: 'Measurements',
    url: '/progress/measurements',
  },
  {
    name: 'Weight',
    url: '/progress/weight',
  },
  {
    name: 'Photos',
    url: '/progress/photos',
  },
];

function navigate(url: string) {
  router.push(url);
}
</script>

<template>
  <ion-page>
    <ion-content>
      <main>
        <ion-segment :value="route.path">
          <ion-segment-button
            v-for="option in options"
            :key="option.url"
            :value="option.url"
            @click="navigate(option.url)"
          >
            <ion-label>{{ option.name }}</ion-label>
          </ion-segment-button>
        </ion-segment>
      </main>
    </ion-content>
  </ion-page>
</template>
