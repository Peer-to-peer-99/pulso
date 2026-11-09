import axios from 'axios';
import { AuthTokenService } from '@/services/auth/auth-token-service';

export const api = axios.create({
  baseURL: import.meta.env.VITE_API_URL,
  headers: {
    Accept: 'application/json',
    'Content-Type': 'application/json',
  },
  timeout: 15000,
});

api.interceptors.request.use(async (config) => {
  const token = await AuthTokenService.get();
  if(token){
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});
