# Cross-Platform Compatibility Implementation Summary

## Overview

Your GemaCrypt Tauri project has been successfully updated with full cross-platform compatibility. You can now copy the project to macOS, Linux (Ubuntu/Debian), or Fedora/RHEL and build native applications on each platform.

## What Was Changed

### 1. New Utility Scripts (`scripts/`)

#### `platform-utils.js`
- Detects current operating system (Windows, macOS, Linux)
- Provides platform-specific paths and configurations
- Supports environment variable `GEMACRYPT_PHP_PATH` for custom PHP project locations
- Returns appropriate PHP executable names, icon paths, and bundle targets

#### `dev-server.js`
- Cross-platform PHP development server launcher
- Automatically detects platform and uses correct paths
- Validates PHP project directory exists
- Provides helpful error messages with platform-specific instructions

#### `copy-php-cross-platform.js`
- Bundles PHP runtime for any platform
- Looks for `php-win-src/`, `php-mac-src/`, or `php-linux-src/`
- Provides instructions for obtaining PHP runtimes
- Sets executable permissions on Unix systems

### 2. Updated Configuration Files

#### `package.json`
**New Scripts:**
- `start:php` - Cross-platform PHP server
- `dev:windows`, `dev:mac`, `dev:linux` - Platform-specific dev modes
- `build:mac`, `build:mac-intel` - macOS builds (Apple Silicon & Intel)
- `build:linux-deb`, `build:linux-rpm`, `build:linux-appimage` - Linux package formats
- `build:fedora` - Fedora/RHEL with RPM support
- `package:php` - Cross-platform PHP bundling
- `platform:info` - Display current platform configuration

#### `tauri.conf.json`
**Updates:**
- Added all icon formats (ico, icns, png) for multi-platform support
- Configured Windows-specific settings (WiX, NSIS)
- Configured macOS-specific settings (minimum version, frameworks)
- Configured Linux-specific settings (DEB, RPM, AppImage dependencies)
- Added metadata (publisher, copyright, descriptions)

### 3. Updated Rust Code

#### `src-tauri/src/main.rs`
**New Features:**
- Platform detection at compile time using `cfg!` macros
- `find_bundled_php()` - Searches for platform-specific PHP bundles:
  - Windows: `php-win/php.exe`
  - macOS: `php-mac/php`
  - Linux: `php-linux/php`
- `get_php_project_dir()` - Platform-specific default paths:
  - Windows: `F:\Daniel\My Web Sites\radius.center\gemacrypt`
  - macOS: `~/Sites/gemacrypt`
  - Linux: `~/www/gemacrypt` or `/var/www/gemacrypt`
- Environment variable support: `GEMACRYPT_PHP_PATH`
- Improved error messages with platform-specific instructions

### 4. Platform-Specific Scripts

#### Windows Scripts
- `quick-dev.bat` - Updated with better error checking
- `quick-build.bat` - Updated with PHP bundling option

#### macOS/Linux Scripts
- `quick-dev.sh` - New shell script for Unix systems
- `quick-build.sh` - New shell script with platform detection
- Both scripts include:
  - Prerequisite checking
  - Platform detection (macOS vs Linux vs Fedora)
  - Automatic RPM building on Fedora
  - PHP bundling prompts

### 5. Comprehensive Documentation

#### `BUILD_INSTRUCTIONS_CROSS_PLATFORM.md`
Complete guide covering:
- Prerequisites for each platform
- Environment setup
- Building on Windows, macOS, Linux, and Fedora
- PHP bundling instructions
- Troubleshooting for each platform
- Platform-specific notes and tips

#### `PLATFORM_SETUP.md`
Detailed setup instructions for:
- Windows (Node.js, Rust, Visual Studio, PHP, WebView2)
- macOS (Xcode, Homebrew, dependencies)
- Linux Ubuntu/Debian (system packages)
- Fedora/RHEL (system packages, RPM tools)
- Transferring projects between platforms
- Common issues and solutions

#### Updated `README.md`
- Added cross-platform support section
- Clarified what can and cannot be done
- Added links to new documentation
- Updated feature list

## Key Features

### ✅ What You Can Do

1. **Copy Project to Any Platform**
   - Transfer source files via USB, Git, or network
   - No platform-specific files to worry about

2. **Build Native Applications**
   - Windows: MSI, NSIS installers
   - macOS: DMG, APP bundle
   - Linux: DEB, AppImage
   - Fedora: RPM, AppImage

3. **Use Environment Variables**
   - Set `GEMACRYPT_PHP_PATH` to point to your PHP files
   - Works on all platforms

4. **Bundle PHP (Optional)**
   - Create self-contained applications
   - Platform-specific bundling support

### ❌ What You Cannot Do

1. **Cross-Compile**
   - Cannot build macOS DMG from Windows
   - Cannot build Linux DEB/RPM from Windows
   - Cannot build Windows MSI from macOS/Linux
   - Must build on each target platform

## How to Use

### On Windows

```cmd
# Development
quick-dev.bat

# Production Build
quick-build.bat

# Or use npm scripts
npm run dev:windows
npm run build:windows
```

### On macOS

```bash
# Make scripts executable (first time only)
chmod +x quick-dev.sh quick-build.sh

# Development
./quick-dev.sh

# Production Build
./quick-build.sh

# Or use npm scripts
npm run dev:mac
npm run build:mac
```

### On Linux (Ubuntu/Debian)

```bash
# Make scripts executable (first time only)
chmod +x quick-dev.sh quick-build.sh

# Development
./quick-dev.sh

# Production Build
./quick-build.sh

# Or use npm scripts
npm run dev:linux
npm run build:linux-deb
```

### On Fedora/RHEL

```bash
# Make scripts executable (first time only)
chmod +x quick-dev.sh quick-build.sh

# Development
./quick-dev.sh

# Production Build
./quick-build.sh  # Automatically detects Fedora and builds RPM

# Or use npm scripts
npm run dev:linux
npm run build:fedora
```

## Environment Variables

### `GEMACRYPT_PHP_PATH`

Set this to point to your PHP project files:

**Windows:**
```cmd
set GEMACRYPT_PHP_PATH=F:\Daniel\My Web Sites\radius.center\gemacrypt
```

**macOS/Linux:**
```bash
export GEMACRYPT_PHP_PATH=~/Sites/gemacrypt
```

To make permanent, add to:
- Windows: System Environment Variables
- macOS: `~/.zshrc` or `~/.bash_profile`
- Linux: `~/.bashrc`

## File Structure

```
gemacrypt/tauri/
├── scripts/
│   ├── platform-utils.js              # Platform detection
│   ├── dev-server.js                  # Cross-platform dev server
│   ├── copy-php-cross-platform.js     # Cross-platform PHP bundling
│   └── copy-php.js                    # Original Windows script (kept)
├── src-tauri/
│   ├── src/
│   │   └── main.rs                    # Updated with cross-platform support
│   └── tauri.conf.json                # Updated with multi-platform config
├── quick-dev.bat                      # Windows dev script
├── quick-build.bat                    # Windows build script
├── quick-dev.sh                       # macOS/Linux dev script
├── quick-build.sh                     # macOS/Linux build script
├── package.json                       # Updated with cross-platform scripts
├── BUILD_INSTRUCTIONS_CROSS_PLATFORM.md
├── PLATFORM_SETUP.md
├── CROSS_PLATFORM_SUMMARY.md          # This file
└── README.md                          # Updated with cross-platform info
```

## Testing Checklist

Before distributing, test on each platform:

### Windows
- [ ] Development mode works (`quick-dev.bat`)
- [ ] Build completes successfully (`quick-build.bat`)
- [ ] MSI installer installs and runs
- [ ] PHP integration works
- [ ] Application uninstalls cleanly

### macOS
- [ ] Development mode works (`./quick-dev.sh`)
- [ ] Build completes successfully (`./quick-build.sh`)
- [ ] DMG mounts and installs
- [ ] APP bundle runs correctly
- [ ] PHP integration works

### Linux (Ubuntu/Debian)
- [ ] Development mode works (`./quick-dev.sh`)
- [ ] Build completes successfully (`./quick-build.sh`)
- [ ] DEB package installs (`sudo dpkg -i`)
- [ ] AppImage runs without installation
- [ ] PHP integration works

### Fedora/RHEL
- [ ] Development mode works (`./quick-dev.sh`)
- [ ] Build completes successfully (`./quick-build.sh`)
- [ ] RPM package installs (`sudo dnf install`)
- [ ] AppImage runs without installation
- [ ] PHP integration works

## Troubleshooting

### Common Issues

**"PHP not found" error:**
- Install PHP on the system
- Or set `GEMACRYPT_PHP_PATH` environment variable
- Or bundle PHP with the application

**"Permission denied" on shell scripts:**
```bash
chmod +x quick-dev.sh quick-build.sh
```

**Build fails with missing dependencies:**
- See `PLATFORM_SETUP.md` for platform-specific dependencies
- Install all required system packages

**Port 8000 already in use:**
- Stop other PHP servers or applications using that port
- Or modify the port in the scripts

## Next Steps

1. **Test on Windows** (your current platform)
   ```cmd
   npm run dev:windows
   ```

2. **Transfer to macOS/Linux** (when ready)
   - Copy project files (exclude `node_modules` and `target`)
   - Run `npm install` on target platform
   - Set `GEMACRYPT_PHP_PATH` environment variable
   - Make shell scripts executable
   - Test and build

3. **Create Releases**
   - Build on each platform
   - Test installers
   - Distribute platform-specific packages

## Support

For detailed instructions, see:
- **[BUILD_INSTRUCTIONS_CROSS_PLATFORM.md](BUILD_INSTRUCTIONS_CROSS_PLATFORM.md)** - Complete build guide
- **[PLATFORM_SETUP.md](PLATFORM_SETUP.md)** - Platform-specific setup
- **[README.md](README.md)** - Project overview

## Summary

Your GemaCrypt Tauri project is now fully cross-platform compatible! You can:

✅ Copy the project to any platform  
✅ Build native executables on Windows, macOS, and Linux  
✅ Create platform-specific installers (MSI, DMG, DEB, RPM)  
✅ Use the same source code across all platforms  
✅ Bundle PHP or use system PHP  
✅ Customize paths via environment variables  

The implementation is complete and ready for testing on actual hardware.
