<script setup lang="ts">
import {IonPage, IonContent} from '@ionic/vue';
import ActivityTrackingView from '@/views/activity/ActivityTrackingView.vue';
</script>

<template>
    <ion-page>
      <ion-content>
         <main>
           <div class="rounded-lg">
              <label>Duration</label>
           </div>
           <ActivityTrackingView/>
         </main>
      </ion-content>
    </ion-page>

</template>
