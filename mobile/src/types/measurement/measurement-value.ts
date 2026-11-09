interface MeasurementValue {
  id?: number;
  metric: string;
  side: 'left' | 'right' | null;
  value_cm: number;
}

export type {
  MeasurementValue
};
