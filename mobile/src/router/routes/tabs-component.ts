import type {RouteRecordRaw} from 'vue-router';
import TabsPage from '@/components/tabs/TabsPage.vue';
import HomeView from '@/views/HomeView.vue';
import ProgressView from '@/views/progress/ProgressView.vue';


const tabsRoutes: RouteRecordRaw = {
  path: '/',
  component: TabsPage,
  children: [
    {
      path: '',
      redirect: '/home',
    },
    {
      path: 'home',
      component: HomeView,
    },
    {
      path: 'progress',
      component: ProgressView,
      children: [
        {
          path: 'measurements',
          component: () => import('@/views/progress/MeasurementsView.vue'),
        },
        {
          path: 'weight',
          component: () => import('@/views/progress/WeightView.vue'),
        },
        {
          path: 'photos',
          component: () => import('@/views/progress/PhotosView.vue'),
        },
      ],
    },
  ],
};

export default tabsRoutes;
