<script setup lang="ts">
import { IonPage, IonContent, IonLabel } from '@ionic/vue';
import { onMounted } from 'vue';
import { useMeasurementsStore } from '@/stores/measurements.store';

const measurementStore = useMeasurementsStore();
onMounted(async () => {
  await measurementStore.fetchMeasurement();
});
</script>

<template>
  <ion-page>
    <ion-content>
      <main>
        <h1>Measurements</h1>
        <div>
          <ion-label>Shoulders</ion-label>
          <pre>{{measurementStore.measurements}}</pre>
        </div>
      </main>
    </ion-content>
  </ion-page>
</template>
