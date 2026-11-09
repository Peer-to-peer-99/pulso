import type { RouteRecordRaw } from 'vue-router';

const route: RouteRecordRaw = {
  path: '/progress/weight',
  name: 'progress-weight',
  component: () => import('../../views/progress/WeightView.vue'),
};

export default route;
