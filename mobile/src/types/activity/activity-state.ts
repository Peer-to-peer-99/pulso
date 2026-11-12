import type { ActivityPoint } from '@/types/activity/activity-point';

interface ActivityState {
  isTracking: boolean;
  isPaused: boolean;

  distance: number;
  elapsedTime: number;
  movingTime: number;

  currentPace: number | null;
  averagePace: number | null;

  points: ActivityPoint[];
}

export type {
  ActivityState
};
