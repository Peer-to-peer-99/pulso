import { defineStore } from 'pinia';
import type { AuthState } from '@/types/auth/auth-state';
import type { AuthCredentials } from '@/types/auth/auth-credentials';
import { AuthApiService } from '@/services/auth/auth-api-service';
import { AuthTokenService } from '@/services/auth/auth-token-service';

export const useAuthStore = defineStore('auth-login', {
  state: (): AuthState => ({
    loading: false,
    user: null,
    isAuthenticated: false
  }),

  actions: {
    async login(credentials: AuthCredentials): Promise<void>{
      this.loading = true;
      try {
        const response = await AuthApiService.login(credentials);
        await AuthTokenService.save(response.access_token);

        this.user = response.user;
        this.isAuthenticated = true;
      }finally {
        this.loading = false;
      }
    }
  },

  getters: {
  }
});
