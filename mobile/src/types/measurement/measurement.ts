import { MeasurementValue } from '@/types/measurement/measurement-value';

interface Measurement {
  id: number;
  measured_at: string;
  values: MeasurementValue[];
}

export type {
  Measurement
};
