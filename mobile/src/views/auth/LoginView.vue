<script setup lang="ts">
import AuthLayout from '@/layouts/Auth/AuthLayout.vue';
import { useAuthStore } from '@/stores/auth/login.store';
import { reactive, ref } from 'vue';
import { AuthCredentials } from '@/types/auth/auth-credentials';
import { IonInput, IonButton, IonText } from '@ionic/vue';

const authStore = useAuthStore();
const form = reactive<AuthCredentials>({
  email: '',
  password: '',
});
const error = ref<string | null>(null);

async function handleLogin(): Promise<void> {
  error.value = null;
  try {
    console.log('form', form);
    await authStore.login(form);
  } catch (error) {
    error.value = 'Unable to log in.';
  }
}
</script>

<template>
  <AuthLayout>
    <main class="flex flex-col justify-start space-y-5">
      <div class="space-y-2">
        <label class="text-lg">Bem-vinda de volta!</label>
        <p class="text-gray-400">Entre para continuar sua jornada</p>
      </div>

      <form @submit.prevent="handleLogin" class="space-y-3">
        <ion-input
          v-model="form.email"
          type="email"
          placeholder="e-mail"
          autocomplete="email"
          required
        />
        <ion-input
          v-model="form.password"
          type="password"
          placeholder="password"
          autocomplete="current-password"
          required
        />

        <ion-text v-if="error" color="danger">
          {{ error }}
        </ion-text>
        <ion-button class="rounded-xl" color="primary" type="submit" :disabled="authStore.loading" expand="block">{{
          authStore.loading ? 'Logging in...' : 'Login'
        }}</ion-button>
      </form>
    </main>
  </AuthLayout>
</template>
