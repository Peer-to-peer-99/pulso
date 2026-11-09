<script setup lang="ts">
import AuthLayout from '@/layouts/Auth/AuthLayout.vue';
import { useAuthStore } from '@/stores/auth/login.store';
import { reactive, ref } from 'vue';
import { AuthCredentials } from '@/types/auth/auth-credentials';
import { IonInput, IonButton, IonText } from "@ionic/vue";

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
    <h1>Login</h1>

    <pre>{{ form }}</pre>
    <form @submit.prevent="handleLogin">
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
      <ion-button type="submit" :disabled="authStore.loading" expand="block">{{
        authStore.loading ? 'Logging in...' : 'Login'
      }}</ion-button>
    </form>
  </AuthLayout>
</template>
