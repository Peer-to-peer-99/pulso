import { defineStore } from 'pinia';
import type { MeasurementState } from '@/types/measurement/measurement-state';
import { MeasurementService } from '@/services/measurement/measurement-service';

export const useMeasurementsStore = defineStore('measurements', {
  state: (): MeasurementState => ({
    loading: false,
    error: null,
    measurements: []
  }),

  actions: {
    async fetchMeasurement(){
      this.loading = true;
      this.error = null;

      try {
        const response = await MeasurementService.getAll();
        console.log('response', response);
        this.measurements = response;
      } catch (error) {
        this.error = 'Failed to load measurements.';
        console.error(error);
      } finally {
        this.loading = false;
      }
    }
  },

  getters: {
  }
});
