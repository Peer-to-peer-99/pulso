import { AuthUser } from '@/types/auth/auth-user';

interface AuthState
{
  loading: boolean;
  user: AuthUser | null;
  isAuthenticated: boolean;
}

export type {
  AuthState
};
