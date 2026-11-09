import type { RouteRecordRaw } from 'vue-router';

const route: RouteRecordRaw = {
  path: '/progress/photos',
  name: 'progress-photos',
  component: () => import('../../views/progress/PhotosView.vue'),
};

export default route;
