# Platform-Specific Setup Guide

This guide provides detailed setup instructions for each supported platform.

## Table of Contents

- [Windows Setup](#windows-setup)
- [macOS Setup](#macos-setup)
- [Linux Setup (Ubuntu/Debian)](#linux-setup-ubuntudebian)
- [Fedora/RHEL Setup](#fedorarhel-setup)
- [Transferring Project Between Platforms](#transferring-project-between-platforms)
- [Common Issues](#common-issues)

---

## Windows Setup

### Step 1: Install Prerequisites

#### 1.1 Install Node.js

1. Download Node.js LTS from: https://nodejs.org/
2. Run the installer
3. Verify installation:
   ```cmd
   node --version
   npm --version
   ```

#### 1.2 Install Rust

1. Download from: https://rustup.rs/
2. Run `rustup-init.exe`
3. Follow the prompts (default options are fine)
4. Restart your terminal
5. Verify installation:
   ```cmd
   rustc --version
   cargo --version
   ```

#### 1.3 Install Visual Studio Build Tools

1. Download from: https://visualstudio.microsoft.com/downloads/
2. Select "Build Tools for Visual Studio 2022"
3. In the installer, select:
   - ✅ Desktop development with C++
   - ✅ MSVC v143 - VS 2022 C++ x64/x86 build tools
   - ✅ Windows 10/11 SDK
4. Install (this may take 30+ minutes)

#### 1.4 Install PHP

1. Download PHP for Windows from: https://windows.php.net/download/
   - Choose: **Thread Safe, x64, ZIP**
2. Extract to `C:\php`
3. Add to PATH:
   - Open System Properties → Environment Variables
   - Edit "Path" under System Variables
   - Add: `C:\php`
4. Verify installation:
   ```cmd
   php --version
   ```

#### 1.5 Install WebView2 (if needed)

- Pre-installed on Windows 11
- For Windows 10, download from: https://developer.microsoft.com/microsoft-edge/webview2/

### Step 2: Set Up Project

1. Copy the project folder to your Windows machine
2. Open Command Prompt or PowerShell
3. Navigate to the project:
   ```cmd
   cd "F:\Daniel\My Web Sites\radius.center\gemacrypt\tauri"
   ```
4. Install dependencies:
   ```cmd
   npm install
   ```

### Step 3: Configure PHP Path

Set the environment variable to point to your PHP project:

**Option A: Temporary (current session only)**
```cmd
set GEMACRYPT_PHP_PATH=F:\Daniel\My Web Sites\radius.center\gemacrypt
```

**Option B: Permanent (recommended)**
1. Open System Properties → Environment Variables
2. Under "User variables", click "New"
3. Variable name: `GEMACRYPT_PHP_PATH`
4. Variable value: `F:\Daniel\My Web Sites\radius.center\gemacrypt`
5. Click OK

### Step 4: Test Development Mode

```cmd
quick-dev.bat
```

Or:
```cmd
npm run dev:windows
```

### Step 5: Build Production Version

```cmd
quick-build.bat
```

Or:
```cmd
npm run build:windows
```

---

## macOS Setup

### Step 1: Install Prerequisites

#### 1.1 Install Xcode Command Line Tools

```bash
xcode-select --install
```

#### 1.2 Install Homebrew

```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

Follow the post-installation instructions to add Homebrew to your PATH.

#### 1.3 Install Node.js

```bash
brew install node
```

Verify:
```bash
node --version
npm --version
```

#### 1.4 Install Rust

```bash
curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh
```

Follow the prompts, then:
```bash
source $HOME/.cargo/env
```

Verify:
```bash
rustc --version
cargo --version
```

#### 1.5 Install PHP

```bash
brew install php
```

Verify:
```bash
php --version
```

### Step 2: Set Up Project

1. Copy the project folder to your Mac
2. Open Terminal
3. Navigate to the project:
   ```bash
   cd ~/path/to/gemacrypt/tauri
   ```
4. Make scripts executable:
   ```bash
   chmod +x quick-dev.sh quick-build.sh
   ```
5. Install dependencies:
   ```bash
   npm install
   ```

### Step 3: Configure PHP Path

Add to your shell configuration file (`~/.zshrc` for zsh or `~/.bash_profile` for bash):

```bash
export GEMACRYPT_PHP_PATH=~/Sites/gemacrypt
```

Then reload:
```bash
source ~/.zshrc  # or source ~/.bash_profile
```

### Step 4: Test Development Mode

```bash
./quick-dev.sh
```

Or:
```bash
npm run dev:mac
```

### Step 5: Build Production Version

```bash
./quick-build.sh
```

Or:
```bash
npm run build:mac
```

### Step 6: Code Signing (Optional, for distribution)

1. Get a Developer ID certificate from Apple
2. Sign your app:
   ```bash
   codesign --force --deep --sign "Developer ID Application: Your Name" \
     src-tauri/target/release/bundle/macos/GemaCrypt.app
   ```
3. Verify:
   ```bash
   codesign --verify --verbose src-tauri/target/release/bundle/macos/GemaCrypt.app
   ```

---

## Linux Setup (Ubuntu/Debian)

### Step 1: Install Prerequisites

#### 1.1 Update System

```bash
sudo apt update
sudo apt upgrade -y
```

#### 1.2 Install System Dependencies

```bash
sudo apt install -y \
  libwebkit2gtk-4.1-dev \
  build-essential \
  curl \
  wget \
  file \
  libssl-dev \
  libayatana-appindicator3-dev \
  librsvg2-dev \
  php \
  nodejs \
  npm
```

#### 1.3 Install Rust

```bash
curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh
```

Follow the prompts, then:
```bash
source $HOME/.cargo/env
```

Verify:
```bash
rustc --version
cargo --version
```

#### 1.4 Update Node.js (if needed)

If your Node.js version is too old:

```bash
# Install Node Version Manager
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash

# Reload shell
source ~/.bashrc

# Install latest LTS
nvm install --lts
nvm use --lts
```

### Step 2: Set Up Project

1. Copy the project folder to your Linux machine
2. Open Terminal
3. Navigate to the project:
   ```bash
   cd ~/path/to/gemacrypt/tauri
   ```
4. Make scripts executable:
   ```bash
   chmod +x quick-dev.sh quick-build.sh
   ```
5. Install dependencies:
   ```bash
   npm install
   ```

### Step 3: Configure PHP Path

Add to `~/.bashrc`:

```bash
export GEMACRYPT_PHP_PATH=~/www/gemacrypt
```

Then reload:
```bash
source ~/.bashrc
```

### Step 4: Test Development Mode

```bash
./quick-dev.sh
```

Or:
```bash
npm run dev:linux
```

### Step 5: Build Production Version

```bash
./quick-build.sh
```

Or:
```bash
npm run build:linux-deb
```

### Step 6: Install the DEB Package

```bash
sudo dpkg -i src-tauri/target/release/bundle/deb/gemacrypt_0.0.1_amd64.deb
```

---

## Fedora/RHEL Setup

### Step 1: Install Prerequisites

#### 1.1 Update System

```bash
sudo dnf update -y
```

#### 1.2 Install System Dependencies

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
  nodejs \
  npm \
  rpm-build
```

#### 1.3 Install Rust

```bash
curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh
```

Follow the prompts, then:
```bash
source $HOME/.cargo/env
```

Verify:
```bash
rustc --version
cargo --version
```

### Step 2: Set Up Project

1. Copy the project folder to your Fedora machine
2. Open Terminal
3. Navigate to the project:
   ```bash
   cd ~/path/to/gemacrypt/tauri
   ```
4. Make scripts executable:
   ```bash
   chmod +x quick-dev.sh quick-build.sh
   ```
5. Install dependencies:
   ```bash
   npm install
   ```

### Step 3: Configure PHP Path

Add to `~/.bashrc`:

```bash
export GEMACRYPT_PHP_PATH=~/www/gemacrypt
```

Then reload:
```bash
source ~/.bashrc
```

### Step 4: Test Development Mode

```bash
./quick-dev.sh
```

Or:
```bash
npm run dev:linux
```

### Step 5: Build Production Version

```bash
./quick-build.sh
```

The script will automatically detect Fedora and build RPM packages.

Or manually:
```bash
npm run build:fedora
```

### Step 6: Install the RPM Package

```bash
sudo dnf install src-tauri/target/release/bundle/rpm/gemacrypt-0.0.1-1.x86_64.rpm
```

Or using rpm:
```bash
sudo rpm -i src-tauri/target/release/bundle/rpm/gemacrypt-0.0.1-1.x86_64.rpm
```

---

## Transferring Project Between Platforms

### What to Copy

✅ **Copy these:**
- All source files (`src/`, `src-tauri/src/`)
- Configuration files (`package.json`, `tauri.conf.json`, `Cargo.toml`)
- Scripts (`scripts/`, `*.sh`, `*.bat`)
- Documentation (`*.md`)
- Icons (`src-tauri/icons/`)

❌ **Don't copy these:**
- `node_modules/` (reinstall with `npm install`)
- `src-tauri/target/` (build artifacts)
- Platform-specific builds

### Transfer Methods

#### Option 1: USB Drive / External Storage

1. Copy the project folder (excluding `node_modules` and `target`)
2. Transfer to the target machine
3. Run `npm install` on the target machine

#### Option 2: Git Repository

```bash
# On source machine
git init
git add .
git commit -m "Initial commit"
git remote add origin <your-repo-url>
git push -u origin main

# On target machine
git clone <your-repo-url>
cd gemacrypt/tauri
npm install
```

#### Option 3: Network Transfer

**Using scp (Linux/macOS to Linux/macOS):**
```bash
scp -r gemacrypt/ user@target-machine:~/
```

**Using rsync:**
```bash
rsync -av --exclude 'node_modules' --exclude 'target' \
  gemacrypt/ user@target-machine:~/gemacrypt/
```

### After Transfer

1. Install dependencies:
   ```bash
   npm install
   ```

2. Set the PHP path for the new platform:
   ```bash
   # Windows
   set GEMACRYPT_PHP_PATH=C:\path\to\gemacrypt
   
   # macOS/Linux
   export GEMACRYPT_PHP_PATH=~/path/to/gemacrypt
   ```

3. Make scripts executable (macOS/Linux):
   ```bash
   chmod +x quick-dev.sh quick-build.sh
   ```

4. Test:
   ```bash
   npm run platform:info
   ```

---

## Common Issues

### Issue: "command not found" errors

**Solution:** Make sure all prerequisites are installed and in your PATH.

Verify:
```bash
node --version
npm --version
cargo --version
php --version
```

### Issue: Permission denied on scripts (macOS/Linux)

**Solution:**
```bash
chmod +x quick-dev.sh quick-build.sh
```

### Issue: Build fails with "linker not found"

**Windows:** Install Visual Studio Build Tools  
**macOS:** Install Xcode Command Line Tools  
**Linux:** Install build-essential or development tools

### Issue: PHP project not found

**Solution:** Set the `GEMACRYPT_PHP_PATH` environment variable to point to your PHP files.

### Issue: Port 8000 already in use

**Solution:** Stop any other PHP servers or applications using port 8000.

```bash
# Find process using port 8000
# Windows
netstat -ano | findstr :8000

# macOS/Linux
lsof -i :8000

# Kill the process
# Windows
taskkill /PID <pid> /F

# macOS/Linux
kill <pid>
```

### Issue: Slow build times

**Normal:** First builds take 10-30 minutes due to Rust compilation.  
**Subsequent builds:** 1-5 minutes (cached).

**Tips:**
- Don't delete `target/` directory
- Use `npm run dev` for development
- Only use `npm run build` for releases

---

## Platform-Specific Tips

### Windows

- Use PowerShell or Command Prompt (not Git Bash for Tauri commands)
- Run as Administrator if you encounter permission issues
- Disable antivirus temporarily if builds are very slow

### macOS

- Use Terminal or iTerm2
- Grant necessary permissions when prompted
- For M1/M2/M3 Macs, use `npm run build:mac`
- For Intel Macs, use `npm run build:mac-intel`

### Linux

- Use your distribution's native terminal
- Install all system dependencies before building
- AppImage works on most distributions without installation
- DEB for Debian-based, RPM for Red Hat-based

---

## Next Steps

After setup is complete:

1. ✅ Test development mode
2. ✅ Verify PHP integration works
3. ✅ Build a test version
4. ✅ Test the built application
5. ✅ Read [BUILD_INSTRUCTIONS_CROSS_PLATFORM.md](BUILD_INSTRUCTIONS_CROSS_PLATFORM.md)

---

**Need more help?** Check the [Troubleshooting](#common-issues) section or refer to the main documentation.
