import fs from 'node:fs';
import path from 'node:path';

export function createFiles(files) {
  const createdFiles = [];

  for (const file of files) {
    const absolutePath = path.resolve(file.path);

    if (fs.existsSync(absolutePath)) {
      throw new Error(`File already exists: ${file.path}`);
    }
  }

  for (const file of files) {
    const absolutePath = path.resolve(file.path);

    fs.mkdirSync(path.dirname(absolutePath), {
      recursive: true,
    });

    fs.writeFileSync(absolutePath, file.content.trimStart());
    createdFiles.push(file.path);
  }

  return createdFiles;
}
