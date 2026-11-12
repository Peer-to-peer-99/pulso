import type { RouteRecordRaw } from 'vue-router';

const route: RouteRecordRaw = {
  path: '/activity/tracking',
  name: 'activity-tracking',
  component: () => import('../../views/activity/ActivityTrackingView.vue'),
};

export default route;
