import { parseResource } from '../utils/naming.mjs';
import { createFiles } from '../services/file.service.mjs';
import { generateType } from '../generators/type.generator.mjs';
export function makeType({resource}){
  const data = parseResource(resource);
  return createFiles([generateType(data)]);
}
