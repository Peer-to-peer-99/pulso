import { Capacitor } from '@capacitor/core';
import { SecureStorage as NativeSecureStorage } from '@aparajita/capacitor-secure-storage';
import { SECURE_STORAGE_PREFIX } from './secure-storage-config';

let initialization: Promise<void> | null = null;

export async function initializeSecureStorage(): Promise<void> {
  if (!Capacitor.isNativePlatform()) {
    return;
  }

  initialization ??= NativeSecureStorage.setKeyPrefix(SECURE_STORAGE_PREFIX);
  await initialization;
}
