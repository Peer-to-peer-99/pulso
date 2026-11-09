import { api } from '@/services/api';
import type { AuthCredentials } from '@/types/auth/auth-credentials';
import type { AuthResponse } from '@/types/auth/auth-response';
import type { AuthUser } from '@/types/auth/auth-user';

export const AuthApiService = {
  async login(credentials: AuthCredentials): Promise<AuthResponse> {
    const { data } = await api.post<AuthResponse>('/auth/login', credentials);
    return data;
  },

  async me(): Promise<AuthUser>
  {
    const { data } = await api.get<AuthUser>('/auth/user');
    return data;
  },

  async logout(): Promise<void>
  {
    return api.post('auth/logout');
  }
};
