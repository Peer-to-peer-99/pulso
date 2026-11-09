import type { RouteRecordRaw } from 'vue-router';

const route: RouteRecordRaw = {
  path: '/progress/measurements',
  name: 'progress-measurements',
  component: () => import('../../views/progress/MeasurementsView.vue'),
};

export default route;
