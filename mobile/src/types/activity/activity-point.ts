

interface ActivityPoint {
  latitude: number;
  longitude: number;

  altitude: number | null;
  altitudeAccuracy: number | null;

  accuracy: number;
  speed: number | null;
  heading: number | null;

  recordedAt: number;
}

export type {
  ActivityPoint
};
