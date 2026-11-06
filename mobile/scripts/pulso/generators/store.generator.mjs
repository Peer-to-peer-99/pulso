export function generateStore({ folder, pascalName, kebabName, routeName }) {
  return {
    path: `src/stores/${folder}/${kebabName}.store.ts`,
    content: `
import { defineStore } from 'pinia';

export const use${pascalName}Store = defineStore('${routeName}', {
  state: () => ({
    loading: false
  }),

  actions: {
  },

  getters: {
  }
});
`,
  };
}
