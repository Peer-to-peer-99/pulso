import { parseResource } from '../utils/naming.mjs';
import { generateStore } from '../generators/store.generator.mjs';
import { createFiles } from '../services/file.service.mjs';

export function makeStore({ resource }) {
  const data = parseResource(resource);

  return createFiles([generateStore(data)]);
}
