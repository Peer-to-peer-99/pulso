import { computed, type MaybeRefOrGetter, toValue } from 'vue';

export function useUserInitials(name: MaybeRefOrGetter<string | undefined>) {
  const initial = computed(() => {
    return toValue(name)?.trim().charAt(0).toUpperCase() || '?';
  });

  return {
    initial,
  };
}
