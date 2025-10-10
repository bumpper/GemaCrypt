# Start Here - GemaCrypt Setup Guide

Welcome to the GemaCrypt project! This guide will help you get started quickly.

## What is GemaCrypt?

GemaCrypt is a desktop application built with Tauri that wraps a PHP-based gematria and cryptography tool. It provides a native desktop experience for the web-based GemaCrypt application located at `F:/Daniel/My Web Sites/radius.center/gemacrypt`.

## Quick Start (3 Steps)

### 1. Install Dependencies

Open a terminal in the project directory and run:
```bash
npm install
```

### 2. Run in Development Mode

**Option A - Command Line**:
```bash
npm run dev
```
This will:
- Start the PHP built-in server at `http://127.0.0.1:8000`
- Launch the Tauri development window
- Enable hot-reload for changes

**Option B - Quick Script (Windows)**:
Double-click `quick-dev.bat`

**Option C - Manual Two-Step** (if you prefer separate terminals):
```bash
# Terminal 1: Start PHP server
cd "F:/Daniel/My Web Sites/radius.center/gemacrypt"
php -S 127.0.0.1:8000

# Terminal 2: Start Tauri
cd "C:/Users/Dan Neiderhiser/Desktop/gemacrypt"
npm run tauri dev
```

### 3. Build for Production (Optional)

**Option A - Command Line**:
```bash
npm run build
```

**Option B - Quick Script (Windows)**:
Double-click `quick-build.bat`

## What You'll See

When you run the application:
1. A Tauri window opens with a loading screen
2. The PHP server starts in the background
3. The application redirects to the GemaCrypt PHP interface
4. You can use all GemaCrypt features in a native desktop window

## Project Structure

```
gemacrypt/
├── src/                    # Frontend wrapper files
│   └── index.html         # Loading screen and PHP detection
├── src-tauri/             # Tauri backend (Rust)
├── scripts/               # Build scripts
│   └── copy-php.js        # PHP bundling script
├── package.json           # Node.js configuration
├── quick-dev.bat          # Quick development script
└── quick-build.bat        # Quick build script
```

## Key Files

- **src/index.html** - Loading screen and PHP server detection
- **src-tauri/tauri.conf.json** - Application configuration
- **src-tauri/src/lib.rs** - Rust backend code
- **scripts/copy-php.js** - Script to bundle PHP runtime (optional)

## Common Tasks

### Development
```bash
npm run dev              # Start PHP server and Tauri dev mode
npm run tauri dev        # Start Tauri only (requires PHP server running)
npm run start:php        # Start PHP server only
```

### Building
```bash
npm run build            # Build for current platform
npm run package:php-windows  # Prepare PHP bundling
```

### Cleaning
```bash
cd src-tauri
cargo clean              # Clean Rust build cache
```

## Prerequisites

Make sure you have installed:
- ✅ Node.js (v16+)
- ✅ Rust (latest stable)
- ✅ PHP (7.4+ or 8.x)
- ✅ npm or yarn

Check versions:
```bash
node --version
rustc --version
php --version
npm --version
```

## Need Help?

1. **Setup Issues**: See [SETUP.md](SETUP.md)
2. **Build Problems**: See [BUILD_INSTRUCTIONS.md](BUILD_INSTRUCTIONS.md)
3. **Project Overview**: See [PROJECT_SUMMARY.md](PROJECT_SUMMARY.md)
4. **Development Checklist**: See [CHECKLIST.md](CHECKLIST.md)

## Features

✨ **Native Desktop App** - Wraps PHP application in Tauri
🔧 **PHP Integration** - Runs PHP built-in server automatically
🚀 **Fast Development** - Hot-reload support
📦 **Easy Distribution** - Build installers for Windows
🔒 **Secure** - Tauri security features
⚡ **Lightweight** - Small binary size

## Next Steps

1. ✅ Run `npm install`
2. ✅ Run `npm run dev` or `quick-dev.bat`
3. ✅ Explore the application
4. ✅ Read [BUILD_INSTRUCTIONS.md](BUILD_INSTRUCTIONS.md) for building
5. ✅ Check [CHECKLIST.md](CHECKLIST.md) for development tasks

## Troubleshooting

**Application won't start?**
- Ensure all dependencies are installed: `npm install`
- Check that PHP is installed: `php --version`
- Check that Rust is installed: `rustc --version`
- Verify PHP path in package.json matches your setup

**PHP server not starting?**
- Verify PHP is in your PATH
- Check that port 8000 is not already in use
- Try starting PHP manually: `php -S 127.0.0.1:8000 -t "F:/Daniel/My Web Sites/radius.center/gemacrypt"`

**Build fails?**
- Update Rust: `rustup update`
- Clear npm cache: `npm cache clean --force`
- Reinstall dependencies: `rm -rf node_modules && npm install`

**PHP not found banner appears?**
- Install PHP from https://www.php.net/downloads
- Add PHP to your system PATH
- Or bundle PHP with the application (see README.md)

## Support

For issues or questions:
1. Check the documentation files
2. Review the [BUILD_STATUS.md](BUILD_STATUS.md)
3. Consult Tauri documentation: https://tauri.app/

## Important Notes

- The PHP application files are located at: `F:/Daniel/My Web Sites/radius.center/gemacrypt`
- The Tauri wrapper is located at: `C:/Users/Dan Neiderhiser/Desktop/gemacrypt`
- Changes to PHP files should be made in the web directory
- Changes to the Tauri wrapper should be made in the desktop directory

---

**Ready to begin?** Run `npm install` and then `npm run dev`!
