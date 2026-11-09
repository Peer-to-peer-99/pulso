import { Measurement } from '@/types/measurement/measurement';

interface MeasurementState {
  measurements: Measurement[];
  loading: false;
  error: null;
}

export type {
  MeasurementState
};
