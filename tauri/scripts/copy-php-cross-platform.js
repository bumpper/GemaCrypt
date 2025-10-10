/**
 * Cross-Platform PHP Bundling Script
 * Copies platform-specific PHP runtime into the Tauri bundle
 */

const fs = require('fs');
const path = require('path');
const { getBuildConfig, printPlatformInfo } = require('./platform-utils');

// Get platform-specific configuration
const config = getBuildConfig();

// Print platform information
printPlatformInfo();

// Define source and destination paths
const platformPhpDir = config.bundledPhpDir; // e.g., 'php-win', 'php-mac', 'php-linux'
const srcDir = path.resolve(process.cwd(), `${platformPhpDir}-src`);
const destDir = path.resolve(process.cwd(), 'src-tauri', platformPhpDir);

console.log(`Looking for PHP runtime source: ${srcDir}`);

// Check if source directory exists
if (!fs.existsSync(srcDir)) {
  console.log('\n⚠️  No platform-specific PHP runtime source found.');
  console.log(`\nTo bundle PHP with your application, follow these steps:\n`);
  
  switch (config.platform) {
    case 'windows':
      console.log('1. Download PHP for Windows (Thread Safe, x64):');
      console.log('   https://windows.php.net/download/');
      console.log(`2. Extract the ZIP to: ${srcDir}`);
      console.log('3. Run this script again: npm run package:php');
      break;
    
    case 'macos':
      console.log('1. PHP is pre-installed on macOS, or install via Homebrew:');
      console.log('   brew install php');
      console.log('2. To bundle PHP, copy PHP binaries to:');
      console.log(`   ${srcDir}`);
      console.log('3. Run this script again: npm run package:php');
      console.log('\nNote: Bundling PHP on macOS may require code signing.');
      break;
    
    case 'linux':
      console.log('1. PHP is typically installed via package manager:');
      console.log('   Ubuntu/Debian: sudo apt install php');
      console.log('   Fedora: sudo dnf install php');
      console.log('2. To bundle PHP, copy PHP binaries to:');
      console.log(`   ${srcDir}`);
      console.log('3. Run this script again: npm run package:php');
      console.log('\nNote: Most Linux users prefer system PHP over bundled.');
      break;
  }
  
  console.log('\n✓ Continuing build without bundled PHP.');
  console.log('  Users will need PHP installed on their system.\n');
  process.exit(0);
}

/**
 * Recursively copy directory
 */
function copyRecursive(src, dest) {
  if (!fs.existsSync(dest)) {
    fs.mkdirSync(dest, { recursive: true });
  }
  
  const entries = fs.readdirSync(src, { withFileTypes: true });
  let fileCount = 0;
  
  for (let entry of entries) {
    const srcPath = path.join(src, entry.name);
    const destPath = path.join(dest, entry.name);
    
    if (entry.isDirectory()) {
      copyRecursive(srcPath, destPath);
    } else {
      fs.copyFileSync(srcPath, destPath);
      fileCount++;
    }
  }
  
  return fileCount;
}

// Perform the copy
console.log(`\n📦 Bundling PHP runtime for ${config.platform}...`);
console.log(`   Source: ${srcDir}`);
console.log(`   Destination: ${destDir}\n`);

try {
  const fileCount = copyRecursive(srcDir, destDir);
  console.log(`✓ Successfully copied ${fileCount} files`);
  console.log(`✓ PHP runtime bundled to: ${destDir}\n`);
  
  // Verify PHP executable exists
  const phpExePath = path.join(destDir, config.phpExecutable);
  if (fs.existsSync(phpExePath)) {
    console.log(`✓ PHP executable found: ${config.phpExecutable}`);
    
    // On Unix systems, ensure PHP is executable
    if (config.platform !== 'windows') {
      try {
        fs.chmodSync(phpExePath, 0o755);
        console.log('✓ Set executable permissions on PHP binary');
      } catch (err) {
        console.warn('⚠️  Could not set executable permissions:', err.message);
      }
    }
  } else {
    console.warn(`⚠️  Warning: PHP executable not found at ${phpExePath}`);
    console.warn('   Make sure your PHP runtime includes the PHP executable.');
  }
  
  console.log('\n✓ PHP bundling complete!\n');
  
} catch (err) {
  console.error(`\n❌ Error bundling PHP: ${err.message}\n`);
  process.exit(1);
}
