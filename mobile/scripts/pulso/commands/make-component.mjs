import { parseResource } from '../utils/naming.mjs';
import { generateComponent } from '../generators/component.generator.mjs';
import { createFiles } from '../services/file.service.mjs';

export function makeComponent({ resource }) {
  const data = parseResource(resource);
  return createFiles([generateComponent(data)]);
}
