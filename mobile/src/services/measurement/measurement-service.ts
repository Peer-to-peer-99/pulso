import { api } from '@/services/api';
import type { Measurement } from '@/types/measurement/measurement';
import type { MeasurementResponse } from '@/types/measurement/measurement-response';

export const MeasurementService = {
  async getAll(): Promise<Measurement[]> {
    const { data } = await api.get<MeasurementResponse>('/measurements');
    return data.latest;
  }
}
