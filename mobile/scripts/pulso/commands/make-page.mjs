import { parseResource } from '../utils/naming.mjs';
import { generatePage, generateRoute } from '../generators/page.generator.mjs';
import { generateStore } from '../generators/store.generator.mjs';
import { createFiles } from '../services/file.service.mjs';

export function makePage({ resource, flags }) {
  const data = parseResource(resource);
  const files = [generatePage(data), generateRoute(data)];

  if (flags.includes('--store')) {
    files.push(generateStore(data));
  }

  return createFiles(files);
}
