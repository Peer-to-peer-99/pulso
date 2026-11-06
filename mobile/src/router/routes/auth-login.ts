import type { RouteRecordRaw } from 'vue-router';

const route: RouteRecordRaw = {
  path: '/auth/login',
  name: 'auth-login',
  component: () => import('../../views/auth/LoginView.vue'),
};

export default route;
