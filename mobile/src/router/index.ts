import { createRouter, createWebHistory } from '@ionic/vue-router';
import type { RouteRecordRaw } from 'vue-router';


const generatedRoutes = Object.values(
  import.meta.glob<{ default: RouteRecordRaw }>('./routes/**/*.ts', { eager: true }),
).map((module) => module.default);

const routes: RouteRecordRaw[] = [
  ...generatedRoutes,
];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

export default router;
