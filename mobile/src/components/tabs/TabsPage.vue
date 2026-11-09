<script setup lang="ts">
import { IonPage, IonTabs, IonRouterOutlet, IonTabBar, IonTabButton, IonLabel, IonIcon } from '@ionic/vue';
import { barbellOutline, homeOutline, personOutline, trendingUpOutline } from 'ionicons/icons';

const items = [
  {
    icon: homeOutline,
    name: 'Home',
    url: '/home',
  },
  {
    icon: barbellOutline,
    name: 'Workout',
    url: '/workout',
  },
  {
    icon: trendingUpOutline,
    name: 'Progress',
    url: '/progress',
  },
  {
    icon: personOutline,
    name: 'Profile',
    url: '/profile'
  },
];
</script>

<template>
  <ion-page>
    <ion-tabs>
      <ion-router-outlet />

      <ion-tab-bar slot="bottom">
        <ion-tab-button v-for="item in items" :key="item.url" :tab="item.name.toLowerCase()" :href="item.url">
          <ion-icon :icon="item.icon" />
          <ion-label>{{ item.name }}</ion-label>
        </ion-tab-button>
      </ion-tab-bar>
    </ion-tabs>
  </ion-page>
</template>
