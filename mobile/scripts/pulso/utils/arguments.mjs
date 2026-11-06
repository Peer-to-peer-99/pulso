export function parseArguments(argv){
  const [command, resource, ...flags] = argv;
  if(!command || !resource){
    throw new Error('Use: npm run make:page auth/LoginPage');
  }

  return {
    command,
    resource,
    flags
  }
}
