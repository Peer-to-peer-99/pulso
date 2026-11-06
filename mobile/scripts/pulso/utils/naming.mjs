export function toPascalCase(value) {
  return value
    .split(/[-_]/)
    .map((part) => part.charAt(0).toUpperCase() + part.slice(1))
    .join('');
}

export function toKebabCase(value) {
  return value
    .replace(/([a-z0-9])([A-Z])/g, '$1-$2')
    .replace(/[_\s]/g, '-')
    .toLowerCase();
}

export function parseResource(resource) {
  const segments = resource.split('/').filter(Boolean);

  if (segments.length === 0 || segments.some((segment) => !/^[a-zA-Z][a-zA-Z0-9_-]*$/.test(segment))) {
    throw new Error('Invalid resource name.');
  }

  const name = segments.at(-1);
  const directories = segments.slice(0, -1);

  return {
    name,
    directories,
    folder: directories.join('/'),
    pascalName: toPascalCase(name),
    kebabName: toKebabCase(name),
    routePath: '/' + segments.map(toKebabCase).join('/'),
    routeName: segments.map(toKebabCase).join('-'),
  };
}
