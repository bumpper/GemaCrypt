/**
 * Platform Detection and Utility Functions
 * Provides cross-platform support for GemaCrypt Tauri application
 */

const os = require('os');
const path = require('path');

/**
 * Detect the current operating system platform
 * @returns {string} 'windows', 'macos', 'linux', or 'unknown'
 */
function detectPlatform() {
  const platform = os.platform();
  
  switch (platform) {
    case 'win32':
      return 'windows';
    case 'darwin':
      return 'macos';
    case 'linux':
      return 'linux';
    default:
      return 'unknown';
  }
}

/**
 * Get the PHP executable name for the current platform
 * @returns {string} PHP executable name
 */
function getPhpExecutable() {
  const platform = detectPlatform();
  return platform === 'windows' ? 'php.exe' : 'php';
}

/**
 * Get the default PHP project path based on platform
 * This can be overridden by GEMACRYPT_PHP_PATH environment variable
 * @returns {string} Default PHP project path
 */
function getDefaultPhpProjectPath() {
  // Check for environment variable first
  if (process.env.GEMACRYPT_PHP_PATH) {
    return process.env.GEMACRYPT_PHP_PATH;
  }

  const platform = detectPlatform();
  const homeDir = os.homedir();
  
  switch (platform) {
    case 'windows':
      // Windows default - adjust this to your actual path
      return 'F:\\Daniel\\My Web Sites\\radius.center\\gemacrypt';
    
    case 'macos':
      // macOS default - user should set GEMACRYPT_PHP_PATH
      return path.join(homeDir, 'Sites', 'gemacrypt');
    
    case 'linux':
      // Linux default - user should set GEMACRYPT_PHP_PATH
      return path.join(homeDir, 'www', 'gemacrypt');
    
    default:
      return path.join(homeDir, 'gemacrypt');
  }
}

/**
 * Get the bundled PHP directory name for the current platform
 * @returns {string} Bundled PHP directory name
 */
function getBundledPhpDirName() {
  const platform = detectPlatform();
  
  switch (platform) {
    case 'windows':
      return 'php-win';
    case 'macos':
      return 'php-mac';
    case 'linux':
      return 'php-linux';
    default:
      return 'php-runtime';
  }
}

/**
 * Get platform-specific shell command prefix
 * @returns {object} Command configuration
 */
function getShellConfig() {
  const platform = detectPlatform();
  
  switch (platform) {
    case 'windows':
      return {
        shell: 'cmd.exe',
        shellArgs: ['/c'],
        background: 'start /B',
        separator: '&'
      };
    
    case 'macos':
    case 'linux':
      return {
        shell: '/bin/sh',
        shellArgs: ['-c'],
        background: '',
        separator: '&'
      };
    
    default:
      return {
        shell: process.env.SHELL || '/bin/sh',
        shellArgs: ['-c'],
        background: '',
        separator: '&'
      };
  }
}

/**
 * Get the icon file path for the current platform
 * @returns {string} Icon file path relative to src-tauri
 */
function getIconPath() {
  const platform = detectPlatform();
  
  switch (platform) {
    case 'windows':
      return 'icons/icon.ico';
    case 'macos':
      return 'icons/icon.icns';
    case 'linux':
      return 'icons/icon.png';
    default:
      return 'icons/icon.png';
  }
}

/**
 * Get bundle targets for the current platform
 * @returns {string} Tauri bundle targets
 */
function getBundleTargets() {
  const platform = detectPlatform();
  
  switch (platform) {
    case 'windows':
      return 'msi,nsis';
    case 'macos':
      return 'dmg,app';
    case 'linux':
      // Check if we're on Fedora/RHEL for RPM support
      const isRpmBased = process.env.RPM_BUILD === 'true' || 
                         process.platform === 'linux' && 
                         require('fs').existsSync('/etc/fedora-release');
      return isRpmBased ? 'deb,rpm,appimage' : 'deb,appimage';
    default:
      return 'all';
  }
}

/**
 * Get platform-specific build information
 * @returns {object} Build configuration
 */
function getBuildConfig() {
  const platform = detectPlatform();
  
  return {
    platform: platform,
    phpExecutable: getPhpExecutable(),
    phpProjectPath: getDefaultPhpProjectPath(),
    bundledPhpDir: getBundledPhpDirName(),
    iconPath: getIconPath(),
    bundleTargets: getBundleTargets(),
    shellConfig: getShellConfig()
  };
}

/**
 * Print platform information (for debugging)
 */
function printPlatformInfo() {
  const config = getBuildConfig();
  
  console.log('\n=== Platform Information ===');
  console.log(`Platform: ${config.platform}`);
  console.log(`PHP Executable: ${config.phpExecutable}`);
  console.log(`PHP Project Path: ${config.phpProjectPath}`);
  console.log(`Bundled PHP Dir: ${config.bundledPhpDir}`);
  console.log(`Icon Path: ${config.iconPath}`);
  console.log(`Bundle Targets: ${config.bundleTargets}`);
  console.log('============================\n');
}

module.exports = {
  detectPlatform,
  getPhpExecutable,
  getDefaultPhpProjectPath,
  getBundledPhpDirName,
  getShellConfig,
  getIconPath,
  getBundleTargets,
  getBuildConfig,
  printPlatformInfo
};
