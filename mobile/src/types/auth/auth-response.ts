import { AuthUser } from '@/types/auth/auth-user';

interface AuthResponse
{
  message: string;
  access_token: string;
  token_type: 'Bearer';
  user: AuthUser
}
export type {
  AuthResponse
};
