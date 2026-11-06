import { parseResource } from '../utils/naming.mjs';
import { createFiles } from '../services/file.service.mjs';
import { generateLayout } from '../generators/layout.generator.mjs';
export function makeLayout({ resource }) {
  const data = parseResource(resource);
  const files = [generateLayout(data)];
  return createFiles(files);
}
