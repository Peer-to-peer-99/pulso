export function generateType({ folder, kebabName }) {
  return {
    path: `src/types/${folder}/${kebabName}.ts`,
    content: `
    export type {
    };
`,
  };
}
