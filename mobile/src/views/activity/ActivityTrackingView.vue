<script setup lang="ts">
import { IonPage, IonContent, IonButton } from '@ionic/vue';
import { useActivityStore } from '@/stores/activity.store';

const activityStore = useActivityStore();
</script>

<template>
  <ion-page>
    <ion-content>

      <main>
        <slot/>
        <ion-button :disabled="activityStore.isTracking" @click="activityStore.startTracking()">Start</ion-button>
        <ion-button color="danger"  :disabled="!activityStore.isTracking" @click="activityStore.stopTracking()">Finish</ion-button>
      </main>
    </ion-content>
  </ion-page>
</template>
