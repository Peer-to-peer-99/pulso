<script setup lang="ts">
import AuthLayout from '@/layouts/Auth/AuthLayout.vue';
</script>

<template>
  <AuthLayout>
    <h1>Login</h1>
    <ion-input type="email" placeholder="e-mail"/>
    <ion-input type="password" placeholder="password"/>
    <ion-button>Login</ion-button>
  </AuthLayout>
</template>
