<script setup lang="ts">
import { onMounted } from 'vue';
import { IonPage, IonContent } from '@ionic/vue';
import UserGreeting from '@/components/dashboard/UserGreeting.vue';
import { useAuthStore } from '@/stores/auth/login.store';
import ActivityGoalCard from '@/views/activity/ActivityGoalCard.vue';
import ButtonAction from '@/components/dashboard/ButtonAction.vue';
const authStore = useAuthStore();

const items = [
  {
    icon: '/images/dumbbell.svg',
    title: 'Treino',
  },
  {
    icon: '/images/dumbbell.svg',
    title: 'Registrar atividade',
  },
  {
    icon: '/images/dumbbell.svg',
    title: 'Ver histórico',
  },
];
onMounted(async () => {
  await authStore.me();
});
</script>
<template>
  <ion-page>
    <ion-content>
      <main class="mx-4 space-y-4">
        <UserGreeting :name="authStore.user?.name" description="Que tal se movimentar hoje?" />
        <ActivityGoalCard
          icon="/images/run.svg"
          title="Corrida"
          unit="km"
          :goal="2.4"
          description="Meta de tempo: 12 min"
          :progress="45"
          current="8:45"
        />
        <div class="flex overflow-x-scroll w-full gap-4"  >
          <ButtonAction :icon="item.icon" :title="item.title" v-for="item in items" :key="item.title" />
        </div>
      </main>
    </ion-content>
  </ion-page>
</template>
