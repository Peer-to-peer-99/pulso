import type { RouteRecordRaw } from 'vue-router';

const route: RouteRecordRaw = {
  path: '/workout',
  name: 'workout',
  component: () => import('../../views/workout/WorkoutView.vue'),
};

export default route;
