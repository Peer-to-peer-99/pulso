import { Geolocation, type Position, type PositionOptions } from '@capacitor/geolocation';
import type { ActivityPoint } from '@/types/activity/activity-point';

export function mapPositionToActivityPoint(
  position: Position
): ActivityPoint {
  return {
    latitude: position.coords.latitude,
    longitude: position.coords.longitude,

    altitude: position.coords.altitude,
    altitudeAccuracy: position.coords.altitudeAccuracy,

    accuracy: position.coords.accuracy,
    speed: position.coords.speed,
    heading: position.coords.heading,

    recordedAt: position.timestamp
  }
}


const GPS_OPTIONS: PositionOptions = {
  enableHighAccuracy: true,
  timeout: 10000,
  maximumAge: 0,
}

export async function checkLocationPermissions()
{
  return Geolocation.checkPermissions();
}

export async function requestLocationPermission()
{
  const currentPermissions = await Geolocation.checkPermissions();
  if(currentPermissions.location === 'granted') return true;
  const permissions = await Geolocation.requestPermissions();
  return permissions.location === "granted"
}

export async function getCurrentPosition(): Promise<ActivityPoint>
{
  const position = await Geolocation.getCurrentPosition(GPS_OPTIONS);
  return mapPositionToActivityPoint(position);
}

export async function watchPosition(
  onPoint: (point: ActivityPoint) => void,
  onError: (error: unknown) => void
):Promise<string> {
  return Geolocation.watchPosition(GPS_OPTIONS, (position, error) => {
    if(error){
      onError(error);
      return;
    }
    if(position){
      onPoint(mapPositionToActivityPoint(position));
    }
  });
}

export async function clearWatch(id: string): Promise<void>
{
  await Geolocation.clearWatch({id});
}
