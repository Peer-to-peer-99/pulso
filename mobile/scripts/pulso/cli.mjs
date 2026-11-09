import { parseArguments } from './utils/arguments.mjs';

import { makePage } from './commands/make-page.mjs';
import { makeStore } from './commands/make-store.mjs';
import { makeComponent } from './commands/make-component.mjs';
import { makeLayout} from './commands/make-layout.mjs';
import { makeType } from './commands/make-type.mjs';

function run() {
  try {
    const options = parseArguments(process.argv.slice(2));
    let createdFiles;

    switch (options.command) {
      case 'page':
        createdFiles = makePage(options);
        break;

      case 'store':
        createdFiles = makeStore(options);
        break;

      case 'component':
        createdFiles = makeComponent(options);
        break;

      case 'layout':
        createdFiles = makeLayout(options);
        break;

      case 'type':
        createdFiles = makeType(options);
        break;

      default:
        throw new Error(`Unknown command: ${options.command}`);
    }

    console.log('\nFiles created:');
    createdFiles.forEach((file) => {
      console.log(`  ✓ ${file}`);
    });
  } catch (error) {
    console.error(`\nError: ${error.message}`);
    process.exitCode = 1;
  }
}

run();
