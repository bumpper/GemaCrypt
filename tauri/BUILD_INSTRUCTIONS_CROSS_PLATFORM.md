# Cross-Platform Build Instructions for GemaCrypt

This guide provides detailed instructions for building GemaCrypt on Windows, macOS, and Linux (including Fedora for RPM packages).

## Table of Contents

- [Overview](#overview)
- [Prerequisites by Platform](#prerequisites-by-platform)
- [Environment Setup](#environment-setup)
- [Building on Windows](#building-on-windows)
- [Building on macOS](#building-on-macos)
- [Building on Linux (Ubuntu/Debian)](#building-on-linux-ubuntudebian)
- [Building on Fedora/RHEL (RPM)](#building-on-fedorarhel-rpm)
- [Cross-Platform Development](#cross-platform-development)
- [Bundling PHP](#bundling-php)
- [Troubleshooting](#troubleshooting)

---

## Overview

GemaCrypt is built using Tauri 2.0, which allows you to create native desktop applications for multiple platforms. However, **you must build on each target platform** - cross-compilation from Windows to macOS/Linux is not straightforward with Tauri.

### What You Can Do:

✅ Copy the project files to any platform  
✅ Build native executables on each platform  
✅ Create platform-specific installers (MSI, DMG, DEB, RPM)  
✅ Use the same source code across all platforms  

### What You Cannot Do:

❌ Build a macOS DMG from Windows  
❌ Build a Linux DEB/RPM from Windows  
❌ Build a Windows MSI from macOS/Linux  

---

## Prerequisites by Platform

### All Platforms

- **Node.js** 16 or higher ([Download](https://nodejs.org/))
- **Rust** latest stable ([Download](https://rustup.rs/))
- **PHP** 7.4 or higher ([Download](https://www.php.net/downloads))

### Windows-Specific

- **Visual Studio Build Tools** with C++ support
  - Download from: https://visualstudio.microsoft.com/downloads/
  - Select "Desktop development with C++"
- **WebView2** (pre-installed on Windows 11)

### macOS-Specific

- **Xcode Command Line Tools**
  ```bash
  xcode-select --install
  ```
- **Homebrew** (recommended for installing dependencies)
  ```bash
  /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
  ```

### Linux-Specific (Ubuntu/Debian)

```bash
sudo apt update
sudo apt install -y \
  libwebkit2gtk-4.1-dev \
  build-essential \
  curl \
  wget \
  file \
  libssl-dev \
  libayatana-appindicator3-dev \
  librsvg2-dev \
  php
```

### Fedora/RHEL-Specific

```bash
sudo dnf install -y \
  webkit2gtk4.1-devel \
  openssl-devel \
  curl \
  wget \
  file \
  libappindicator-gtk3-devel \
  librsvg2-devel \
  php \
  rpm-build
```

---

## Environment Setup

### Setting the PHP Project Path

The application needs to know where your PHP files are located. Set the `GEMACRYPT_PHP_PATH` environment variable:

**Windows (Command Prompt):**
```cmd
set GEMACRYPT_PHP_PATH=F:\Daniel\My Web Sites\radius.center\gemacrypt
```

**Windows (PowerShell):**
```powershell
$env:GEMACRYPT_PHP_PATH="F:\Daniel\My Web Sites\radius.center\gemacrypt"
```

**macOS/Linux:**
```bash
export GEMACRYPT_PHP_PATH=~/Sites/gemacrypt
```

To make this permanent:

**Windows:** Add to System Environment Variables  
**macOS/Linux:** Add to `~/.bashrc`, `~/.zshrc`, or `~/.profile`

### Installing Project Dependencies

After copying the project to your target platform:

```bash
cd /path/to/gemacrypt/tauri
npm install
```

---

## Building on Windows

### Quick Build (Recommended)

1. Double-click `quick-build.bat`
2. Follow the prompts
3. Find your installer in `src-tauri\target\release\bundle\`

### Manual Build

```cmd
# Set PHP path (if not already set)
set GEMACRYPT_PHP_PATH=F:\Daniel\My Web Sites\radius.center\gemacrypt

# Install dependencies
npm install

# Optional: Bundle PHP
npm run package:php

# Build
npm run build:windows
```

### Output Files

- **MSI Installer:** `src-tauri\target\release\bundle\msi\gemacrypt_0.0.1_x64_en-US.msi`
- **NSIS Installer:** `src-tauri\target\release\bundle\nsis\gemacrypt_0.0.1_x64-setup.exe`
- **Executable:** `src-tauri\target\release\gemacrypt.exe`

---

## Building on macOS

### Quick Build (Recommended)

1. Make the script executable:
   ```bash
   chmod +x quick-build.sh
   ```
2. Run the script:
   ```bash
   ./quick-build.sh
   ```
3. Find your app in `src-tauri/target/release/bundle/`

### Manual Build

```bash
# Set PHP path (if not already set)
export GEMACRYPT_PHP_PATH=~/Sites/gemacrypt

# Install dependencies
npm install

# Optional: Bundle PHP
npm run package:php

# Build for Apple Silicon (M1/M2/M3)
npm run build:mac

# Or build for Intel Macs
npm run build:mac-intel
```

### Output Files

- **DMG Installer:** `src-tauri/target/release/bundle/dmg/GemaCrypt_0.0.1_aarch64.dmg`
- **App Bundle:** `src-tauri/target/release/bundle/macos/GemaCrypt.app`

### Code Signing (Optional)

For distribution outside the App Store, you'll need to sign your app:

```bash
# Sign the app
codesign --force --deep --sign "Developer ID Application: Your Name" \
  src-tauri/target/release/bundle/macos/GemaCrypt.app

# Verify signature
codesign --verify --verbose src-tauri/target/release/bundle/macos/GemaCrypt.app
```

---

## Building on Linux (Ubuntu/Debian)

### Quick Build (Recommended)

1. Make the script executable:
   ```bash
   chmod +x quick-build.sh
   ```
2. Run the script:
   ```bash
   ./quick-build.sh
   ```
3. Find your package in `src-tauri/target/release/bundle/`

### Manual Build

```bash
# Set PHP path (if not already set)
export GEMACRYPT_PHP_PATH=~/www/gemacrypt

# Install dependencies
npm install

# Build DEB package
npm run build:linux-deb

# Or build AppImage
npm run build:linux-appimage

# Or build both
npm run build:linux
```

### Output Files

- **DEB Package:** `src-tauri/target/release/bundle/deb/gemacrypt_0.0.1_amd64.deb`
- **AppImage:** `src-tauri/target/release/bundle/appimage/gemacrypt_0.0.1_amd64.AppImage`

### Installing the DEB Package

```bash
sudo dpkg -i src-tauri/target/release/bundle/deb/gemacrypt_0.0.1_amd64.deb
```

---

## Building on Fedora/RHEL (RPM)

### Quick Build (Recommended)

1. Make the script executable:
   ```bash
   chmod +x quick-build.sh
   ```
2. Run the script:
   ```bash
   ./quick-build.sh
   ```
3. The script will detect Fedora and build RPM automatically
4. Find your package in `src-tauri/target/release/bundle/`

### Manual Build

```bash
# Set PHP path (if not already set)
export GEMACRYPT_PHP_PATH=~/www/gemacrypt

# Install dependencies
npm install

# Build RPM package
npm run build:linux-rpm

# Or build RPM + AppImage
npm run build:fedora
```

### Output Files

- **RPM Package:** `src-tauri/target/release/bundle/rpm/gemacrypt-0.0.1-1.x86_64.rpm`
- **AppImage:** `src-tauri/target/release/bundle/appimage/gemacrypt_0.0.1_amd64.AppImage`

### Installing the RPM Package

```bash
sudo dnf install src-tauri/target/release/bundle/rpm/gemacrypt-0.0.1-1.x86_64.rpm
```

Or using rpm directly:

```bash
sudo rpm -i src-tauri/target/release/bundle/rpm/gemacrypt-0.0.1-1.x86_64.rpm
```

---

## Cross-Platform Development

### Development Mode

**Windows:**
```cmd
quick-dev.bat
```
Or:
```cmd
npm run dev:windows
```

**macOS/Linux:**
```bash
chmod +x quick-dev.sh
./quick-dev.sh
```
Or:
```bash
npm run dev:mac    # macOS
npm run dev:linux  # Linux
```

### Platform Detection

Check your current platform configuration:

```bash
npm run platform:info
```

This will display:
- Detected platform
- PHP executable name
- Default PHP project path
- Bundled PHP directory name
- Icon paths
- Bundle targets

---

## Bundling PHP

By default, GemaCrypt requires PHP to be installed on the target system. You can optionally bundle PHP to create a fully self-contained application.

### Bundling PHP on Windows

1. Download PHP for Windows (Thread Safe, x64):
   - https://windows.php.net/download/

2. Extract the ZIP to `php-win-src/` in your project root

3. Run the bundling script:
   ```cmd
   npm run package:php
   ```

4. Build normally - PHP will be included automatically

### Bundling PHP on macOS

1. PHP is pre-installed on macOS, but you can bundle a specific version:
   ```bash
   # Install PHP via Homebrew
   brew install php
   
   # Copy PHP binaries to php-mac-src/
   # (This requires additional setup)
   ```

2. Run the bundling script:
   ```bash
   npm run package:php
   ```

**Note:** Bundling PHP on macOS may require code signing.

### Bundling PHP on Linux

Most Linux users prefer system-installed PHP, but you can bundle it:

1. Copy PHP binaries to `php-linux-src/`

2. Run the bundling script:
   ```bash
   npm run package:php
   ```

### Bundle Size Impact

Bundling PHP increases installer size:
- **Windows:** +30-50 MB
- **macOS:** +20-40 MB
- **Linux:** +20-40 MB

---

## Troubleshooting

### Build Fails with "cargo not found"

**Solution:** Install Rust from https://rustup.rs/

```bash
# Update Rust
rustup update
```

### Build Fails with Missing System Dependencies

**Ubuntu/Debian:**
```bash
sudo apt install libwebkit2gtk-4.1-dev build-essential
```

**Fedora:**
```bash
sudo dnf install webkit2gtk4.1-devel gcc
```

### PHP Not Found During Development

**Solution:** Set the `GEMACRYPT_PHP_PATH` environment variable (see [Environment Setup](#environment-setup))

Or install PHP:
- **Windows:** https://www.php.net/downloads
- **macOS:** `brew install php`
- **Ubuntu:** `sudo apt install php`
- **Fedora:** `sudo dnf install php`

### "WebView2 not found" on Windows

**Solution:** Install WebView2 Runtime:
- Download from: https://developer.microsoft.com/microsoft-edge/webview2/

### Build is Very Slow

First builds are slow due to Rust compilation (10-30 minutes). Subsequent builds are much faster (1-5 minutes) due to caching.

**Tips:**
- Don't delete the `target/` directory between builds
- Use `npm run dev` for development (faster iteration)
- Only use `npm run build` for final releases

### Permission Denied on Shell Scripts (macOS/Linux)

**Solution:** Make scripts executable:
```bash
chmod +x quick-dev.sh quick-build.sh
```

### RPM Build Fails on Fedora

**Solution:** Install rpm-build:
```bash
sudo dnf install rpm-build
```

---

## Platform-Specific Notes

### Windows

- MSI installers require administrator privileges to install
- NSIS installers are more flexible but require additional configuration
- WebView2 is required on Windows 10 (pre-installed on Windows 11)

### macOS

- Apps must be signed for distribution outside the App Store
- Notarization is required for macOS 10.15+
- Universal binaries (Intel + Apple Silicon) require building twice and using `lipo`

### Linux

- DEB packages work on Debian, Ubuntu, Linux Mint, etc.
- RPM packages work on Fedora, RHEL, CentOS, openSUSE, etc.
- AppImage works on most Linux distributions without installation
- Users need to install PHP separately unless bundled

---

## Next Steps

1. **Test on Target Platform:** Always test builds on the actual target platform
2. **Create Release Notes:** Document changes for each version
3. **Sign Your Applications:** Required for macOS, recommended for Windows
4. **Set Up CI/CD:** Automate builds using GitHub Actions or similar

---

## Additional Resources

- [Tauri Documentation](https://tauri.app/)
- [Tauri Building Guide](https://tauri.app/v1/guides/building/)
- [Rust Documentation](https://doc.rust-lang.org/)
- [PHP Documentation](https://www.php.net/docs.php)

---

**Need Help?** Check [PLATFORM_SETUP.md](PLATFORM_SETUP.md) for detailed platform-specific setup instructions.
