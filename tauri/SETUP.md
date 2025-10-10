# Setup Guide - GemaCrypt

Complete environment setup instructions for the GemaCrypt desktop application.

## System Requirements

### Minimum Requirements
- **OS**: Windows 10/11, macOS 10.13+, or Linux
- **RAM**: 4GB
- **Disk Space**: 2GB free space
- **Internet**: Required for initial setup
- **PHP**: 7.4 or higher

### Recommended Requirements
- **OS**: Windows 11, macOS 12+, or Ubuntu 20.04+
- **RAM**: 8GB or more
- **Disk Space**: 5GB free space
- **Internet**: Broadband connection
- **PHP**: 8.1 or higher

---

## Prerequisites Installation

### 1. Install Node.js

**Windows**:
1. Download from https://nodejs.org/
2. Run the installer (LTS version recommended)
3. Verify installation:
   ```bash
   node --version
   npm --version
   ```

**macOS**:
```bash
brew install node
```

**Linux**:
```bash
curl -fsSL https://deb.nodesource.com/setup_lts.x | sudo -E bash -
sudo apt-get install -y nodejs
```

### 2. Install Rust

**All Platforms**:
1. Visit https://rustup.rs/
2. Follow the installation instructions
3. Restart your terminal
4. Verify installation:
   ```bash
   rustc --version
   cargo --version
   ```

**Windows Additional Steps**:
- Install Visual Studio Build Tools
- Or install Visual Studio Community with C++ development tools

### 3. Install PHP

**Windows**:
1. Download from https://windows.php.net/download/
2. Choose thread-safe version (x64)
3. Extract to a folder (e.g., `C:\php`)
4. Add PHP to system PATH:
   - Open System Properties → Environment Variables
   - Edit PATH variable
   - Add PHP directory path
5. Verify: `php --version`

**macOS**:
```bash
brew install php
```

**Linux (Ubuntu/Debian)**:
```bash
sudo apt update
sudo apt install php php-cli php-common
```

**Linux (Fedora)**:
```bash
sudo dnf install php php-cli
```

### 4. Install System Dependencies

**Windows**:
- WebView2 (usually pre-installed on Windows 11)
- Visual Studio Build Tools

**macOS**:
```bash
xcode-select --install
```

**Linux (Ubuntu/Debian)**:
```bash
sudo apt update
sudo apt install libwebkit2gtk-4.0-dev \
    build-essential \
    curl \
    wget \
    libssl-dev \
    libgtk-3-dev \
    libayatana-appindicator3-dev \
    librsvg2-dev
```

**Linux (Fedora)**:
```bash
sudo dnf install webkit2gtk3-devel \
    openssl-devel \
    curl \
    wget \
    libappindicator-gtk3 \
    librsvg2-devel
sudo dnf group install "C Development Tools and Libraries"
```

---

## Project Setup

### 1. Navigate to Project Directory

```bash
cd C:\Users\Dan Neiderhiser\Desktop\gemacrypt
```

### 2. Install Project Dependencies

```bash
npm install
```

This will install:
- Tauri CLI (@tauri-apps/cli)
- All required npm packages

**Expected Output**:
```
added XX packages in XXs
```

### 3. Verify Tauri Installation

```bash
npm run tauri --version
```

Should display Tauri CLI version 2.0.0 or higher.

### 4. Verify PHP Application Path

Ensure the PHP application exists at:
```
F:/Daniel/My Web Sites/radius.center/gemacrypt
```

If your PHP application is in a different location, update the path in `package.json`:
```json
"scripts": {
  "start:php": "php -S 127.0.0.1:8000 -t \"YOUR_PATH_HERE\""
}
```

---

## Development Environment Setup

### IDE/Editor Setup

**Visual Studio Code** (Recommended):
1. Install VS Code from https://code.visualstudio.com/
2. Install recommended extensions:
   - rust-analyzer
   - Tauri
   - ESLint
   - PHP Intelephense
   - PHP Debug

**Other Editors**:
- Any text editor works
- Syntax highlighting for Rust, JavaScript, and PHP recommended

### Terminal Setup

**Windows**:
- PowerShell (recommended)
- Command Prompt
- Windows Terminal
- Git Bash

**macOS/Linux**:
- Default terminal
- iTerm2 (macOS)
- Any modern terminal emulator

---

## Configuration

### Environment Variables

No special environment variables required for basic setup, but ensure:
- PHP is in your system PATH
- Node.js is in your system PATH
- Rust/Cargo is in your system PATH

### Tauri Configuration

Main configuration file: `src-tauri/tauri.conf.json`

Key settings:
```json
{
  "productName": "gemacrypt",
  "version": "0.0.1",
  "identifier": "com.gemacrypt.app"
}
```

### Rust Configuration

Cargo configuration: `src-tauri/Cargo.toml`

Optimized for:
- Small binary size
- Fast compilation
- Release builds

### PHP Configuration

The application uses PHP's built-in development server. No special PHP configuration is required, but ensure:
- PHP CLI is available
- Port 8000 is not blocked by firewall
- PHP extensions required by your application are enabled

---

## Verification Steps

### 1. Check Node.js
```bash
node --version  # Should be v16.0.0 or higher
npm --version   # Should be 8.0.0 or higher
```

### 2. Check Rust
```bash
rustc --version  # Should be 1.70.0 or higher
cargo --version  # Should be 1.70.0 or higher
```

### 3. Check PHP
```bash
php --version  # Should be 7.4.0 or higher
```

### 4. Check Tauri CLI
```bash
npm run tauri --version  # Should be 2.0.0 or higher
```

### 5. Test PHP Server
```bash
cd "F:/Daniel/My Web Sites/radius.center/gemacrypt"
php -S 127.0.0.1:8000
```
Open browser to http://127.0.0.1:8000 to verify PHP app works.

### 6. Test Development Build
```bash
cd "C:/Users/Dan Neiderhiser/Desktop/gemacrypt"
npm run dev
```

Expected result:
- PHP server starts
- Tauri window opens
- Application loads GemaCrypt interface
- No console errors

---

## Troubleshooting

### Node.js Issues

**Problem**: `node: command not found`
**Solution**: 
- Restart terminal after installation
- Add Node.js to PATH manually
- Reinstall Node.js

**Problem**: Permission errors on Linux/macOS
**Solution**:
```bash
sudo chown -R $USER:$USER ~/.npm
sudo chown -R $USER:$USER ~/.config
```

### Rust Issues

**Problem**: `rustc: command not found`
**Solution**:
- Restart terminal
- Run: `source $HOME/.cargo/env`
- Reinstall Rust

**Problem**: Compilation errors
**Solution**:
```bash
rustup update
cargo clean
```

### PHP Issues

**Problem**: `php: command not found`
**Solution**:
- Install PHP (see instructions above)
- Add PHP to system PATH
- Restart terminal

**Problem**: Port 8000 already in use
**Solution**:
- Stop other services using port 8000
- Or change port in `package.json` (update both PHP command and Tauri config)

**Problem**: PHP extensions missing
**Solution**:
- Check which extensions your app needs
- Enable them in `php.ini`
- Restart PHP server

### Tauri Issues

**Problem**: `tauri: command not found`
**Solution**:
```bash
npm install
npm run tauri --version
```

**Problem**: WebView2 missing (Windows)
**Solution**:
- Download from Microsoft
- Usually pre-installed on Windows 11

### Build Issues

**Problem**: Build fails with dependency errors
**Solution**:
```bash
rm -rf node_modules
npm cache clean --force
npm install
```

**Problem**: Rust compilation fails
**Solution**:
```bash
cd src-tauri
cargo clean
cargo update
cd ..
npm run dev
```

---

## Platform-Specific Notes

### Windows
- Ensure Visual Studio Build Tools are installed
- WebView2 is required (pre-installed on Windows 11)
- Use PowerShell or Command Prompt
- PHP thread-safe version recommended

### macOS
- Xcode Command Line Tools required
- May need to allow app in Security & Privacy settings
- Code signing required for distribution
- PHP usually pre-installed, but may need updating

### Linux
- Install all system dependencies listed above
- May need to install additional libraries
- AppImage format recommended for distribution
- PHP usually available in package managers

---

## Next Steps

After successful setup:

1. ✅ Read [START_HERE.md](START_HERE.md)
2. ✅ Review [BUILD_INSTRUCTIONS.md](BUILD_INSTRUCTIONS.md)
3. ✅ Check [CHECKLIST.md](CHECKLIST.md)
4. ✅ Run `npm run dev` to start development

---

## Additional Resources

- [Tauri Documentation](https://tauri.app/)
- [Rust Book](https://doc.rust-lang.org/book/)
- [Node.js Documentation](https://nodejs.org/docs/)
- [PHP Documentation](https://www.php.net/docs.php)
- [Cargo Book](https://doc.rust-lang.org/cargo/)

---

## Support

If you encounter issues not covered here:
1. Check [BUILD_STATUS.md](BUILD_STATUS.md)
2. Review Tauri troubleshooting guide
3. Check system requirements
4. Verify all prerequisites are installed

---

**Setup Complete?** Run `npm run dev` to start the application!
