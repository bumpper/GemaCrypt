const fs = require('fs');
const path = require('path');

// Copy a folder from ./php-win-src into src-tauri/php-win
const src = path.resolve(process.cwd(), 'php-win-src');
const dest = path.resolve(process.cwd(), 'src-tauri', 'php-win');

if (!fs.existsSync(src)) {
  console.log('No php-win-src folder found. Place a portable PHP zip extracted into php-win-src and re-run.');
  process.exit(0);
}

function copyRecursive(src, dest) {
  if (!fs.existsSync(dest)) fs.mkdirSync(dest, { recursive: true });
  const entries = fs.readdirSync(src, { withFileTypes: true });
  for (let entry of entries) {
    const srcPath = path.join(src, entry.name);
    const destPath = path.join(dest, entry.name);
    if (entry.isDirectory()) {
      copyRecursive(srcPath, destPath);
    } else {
      fs.copyFileSync(srcPath, destPath);
    }
  }
}

copyRecursive(src, dest);
console.log('Copied php-win-src -> src-tauri/php-win');
