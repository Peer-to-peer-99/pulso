import { defineStore } from 'pinia';
import { requestLocationPermission, getCurrentPosition, watchPosition, clearWatch } from '@/services/activity/gps-service';
import type { ActivityPoint } from '@/types/activity/activity-point';

export const useActivityStore = defineStore('activity', {
  state: () => ({
    isTracking: false,
    currentPoint: null as ActivityPoint | null,
    watchId: null as string | null,
    error: null as string | null,
  }),

  actions: {
    async getLocation(): Promise<void> {
      try {
        this.error = null;

        const granted = await requestLocationPermission();

        if (!granted) {
          this.error = 'Location permission not granted.';
          return;
        }
        this.currentPoint = await getCurrentPosition();
      } catch (error) {
        console.error(error);
        this.error = 'Unable to obtain the location.';
      }
    },
    async startTracking(): Promise<void> {
      if (this.isTracking) return;

      try {
        this.error = null;
        const granted = await requestLocationPermission();

        if (!granted) {
          this.error = 'Location permission not granted.';
          return;
        }

        this.watchId = await watchPosition(
          (point) => {
            this.currentPoint = point;
          },
          (error) => {
            console.error(error);
            this.error = 'Error capturing location.';
          },
        );

        this.isTracking = true;
      } catch (error) {
        console.error(error);
        this.error = 'Unable to start tracking.';
      }
    },

    async stopTracking(): Promise<void> {
      if (!this.watchId) return;

      try {
        await clearWatch(this.watchId);

        this.watchId = null;
        this.isTracking = false;
      } catch (error) {
        console.error(error);
        this.error = 'It was not possible to stop the tracking.';
      }
    },
  },

  getters: {},
});
