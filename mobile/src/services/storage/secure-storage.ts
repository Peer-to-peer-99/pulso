import { Capacitor } from '@capacitor/core';
import { SecureStorage as NativeSecureStorage } from '@aparajita/capacitor-secure-storage';

import { initializeSecureStorage } from './secure-storage-plataform';
import { SECURE_STORAGE_PREFIX } from './secure-storage-config';

export const SecureStorageService = {
  async set<T>(key: string, value: T): Promise<void> {
    if (Capacitor.isNativePlatform()) {
      await initializeSecureStorage();
      await NativeSecureStorage.set(key, value);
      return;
    }

    localStorage.setItem(
      `${SECURE_STORAGE_PREFIX}${key}`,
      JSON.stringify(value)
    );
  },

  async get<T>(key: string): Promise<T | null> {
    if (Capacitor.isNativePlatform()) {
      await initializeSecureStorage();
      const value = await NativeSecureStorage.get(key);
      return (value ?? null) as T | null;
    }

    const value = localStorage.getItem(
      `${SECURE_STORAGE_PREFIX}${key}`
    );

    if (value === null) {
      return null;
    }

    return JSON.parse(value) as T;
  },

  async remove(key: string): Promise<boolean> {
    if (Capacitor.isNativePlatform()) {
      await initializeSecureStorage();
      return NativeSecureStorage.remove(key);
    }
    const storageKey = `${SECURE_STORAGE_PREFIX}${key}`;
    const exists = localStorage.getItem(storageKey) !== null;
    localStorage.removeItem(storageKey);

    return exists;
  }
};
