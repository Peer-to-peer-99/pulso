import { SECURE_STORAGE_KEYS } from '../storage/secure-storage-config';
import { SecureStorageService } from '../storage/secure-storage';

export const AuthTokenService = {
  save(token: string): Promise<void> {
    if (!token.trim()) {
      throw new Error('Token cannot be empty.');
    }

    return SecureStorageService.set(SECURE_STORAGE_KEYS.ACCESS_TOKEN, token);
  },

  get(): Promise<string | null> {
    return SecureStorageService.get<string>(SECURE_STORAGE_KEYS.ACCESS_TOKEN);
  },

  remove(): Promise<boolean> {
    return SecureStorageService.remove(SECURE_STORAGE_KEYS.ACCESS_TOKEN);
  },
};
