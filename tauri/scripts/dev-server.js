/**
 * Cross-Platform Development Server Launcher
 * Starts PHP built-in server for development
 */

const { spawn } = require('child_process');
const path = require('path');
const fs = require('fs');
const { getBuildConfig, printPlatformInfo } = require('./platform-utils');

// Get platform-specific configuration
const config = getBuildConfig();

// Print platform information
printPlatformInfo();

// Get PHP project path from environment or use default
const phpProjectPath = process.env.GEMACRYPT_PHP_PATH || config.phpProjectPath;

// Validate that the PHP project directory exists
if (!fs.existsSync(phpProjectPath)) {
  console.error(`\n❌ ERROR: PHP project directory not found: ${phpProjectPath}`);
  console.error('\nPlease set the GEMACRYPT_PHP_PATH environment variable to your PHP project location.');
  console.error('\nExamples:');
  console.error('  Windows:  set GEMACRYPT_PHP_PATH=F:\\Daniel\\My Web Sites\\radius.center\\gemacrypt');
  console.error('  macOS:    export GEMACRYPT_PHP_PATH=~/Sites/gemacrypt');
  console.error('  Linux:    export GEMACRYPT_PHP_PATH=~/www/gemacrypt');
  console.error('\nOr update the default path in scripts/platform-utils.js\n');
  process.exit(1);
}

console.log(`✓ PHP Project Path: ${phpProjectPath}`);
console.log(`✓ Starting PHP server on http://127.0.0.1:8000\n`);

// Spawn PHP server
const phpServer = spawn(config.phpExecutable, [
  '-S',
  '127.0.0.1:8000',
  '-t',
  phpProjectPath
], {
  stdio: 'inherit',
  shell: false
});

// Handle server events
phpServer.on('error', (err) => {
  console.error(`\n❌ Failed to start PHP server: ${err.message}`);
  console.error('\nMake sure PHP is installed and available in your PATH.');
  console.error('Check installation: php --version\n');
  process.exit(1);
});

phpServer.on('exit', (code, signal) => {
  if (code !== null) {
    console.log(`\nPHP server exited with code ${code}`);
  } else if (signal !== null) {
    console.log(`\nPHP server killed with signal ${signal}`);
  }
});

// Handle process termination
process.on('SIGINT', () => {
  console.log('\n\nShutting down PHP server...');
  phpServer.kill('SIGTERM');
  process.exit(0);
});

process.on('SIGTERM', () => {
  phpServer.kill('SIGTERM');
  process.exit(0);
});

// Keep the process running
console.log('Press Ctrl+C to stop the server\n');
