# GemaCrypt - Desktop Application

A desktop wrapper for the GemaCrypt PHP application built with Tauri 2.0.

## Overview

GemaCrypt is a native desktop application that wraps a PHP-based gematria and cryptography tool, providing a seamless desktop experience with the power of Tauri's native performance and security features.

## Quick Start

### Prerequisites
- **Node.js** 16+ ([Download](https://nodejs.org/))
- **Rust** latest stable ([Download](https://rustup.rs/))
- **PHP** 7.4+ ([Download](https://www.php.net/downloads))

### Installation

1. **Install dependencies**:
   ```bash
   npm install
   ```

2. **Run in development mode**:
   ```bash
   npm run dev
   ```
   Or double-click `quick-dev.bat` (Windows)

3. **Build for production**:
   ```bash
   npm run build
   ```
   Or double-click `quick-build.bat` (Windows)

## Documentation

📚 **Complete documentation is available in the following files:**

- **[START_HERE.md](START_HERE.md)** - Quick start guide for new users
- **[BUILD_INSTRUCTIONS.md](BUILD_INSTRUCTIONS.md)** - Detailed build instructions
- **[SETUP.md](SETUP.md)** - Environment setup guide
- **[PROJECT_SUMMARY.md](PROJECT_SUMMARY.md)** - Technical overview
- **[CHECKLIST.md](CHECKLIST.md)** - Development checklist
- **[DIRECTORY_STRUCTURE.md](DIRECTORY_STRUCTURE.md)** - File structure documentation
- **[BUILD_STATUS.md](BUILD_STATUS.md)** - Build status and version tracking

## Features

✨ **Native Desktop App** - Wraps PHP application in Tauri  
🔧 **PHP Integration** - Runs PHP built-in server automatically  
🚀 **Fast Development** - Hot-reload support  
📦 **Easy Distribution** - Build installers for Windows  
🔒 **Secure** - Tauri security features  
⚡ **Lightweight** - Small binary size (~8-12 MB)

## Project Structure

```
gemacrypt/
├── src/                    # Frontend wrapper files
├── src-tauri/             # Tauri backend (Rust)
├── scripts/               # Build scripts
├── quick-dev.bat          # Quick development launcher
├── quick-build.bat        # Quick build launcher
└── [Documentation]        # Comprehensive docs
```

## Development

### Available Scripts

```bash
npm run dev              # Start development mode (PHP + Tauri)
npm run build            # Build production version
npm run tauri            # Run Tauri CLI commands
npm run clean            # Clean build cache
```

### Quick Scripts (Windows)

- **quick-dev.bat** - One-click development mode
- **quick-build.bat** - One-click production build

## PHP Integration

### Current Setup
The application requires PHP to be installed on the target machine. The app will:
1. Check if PHP is available in the system PATH
2. Display a warning if PHP is not found
3. Start PHP built-in server at `http://127.0.0.1:8000`
4. Load the GemaCrypt PHP application

### PHP Application Location
```
F:/Daniel/My Web Sites/radius.center/gemacrypt
```

### Bundling PHP (Optional)

To create a fully self-contained application with PHP bundled:

1. Download a portable PHP runtime for Windows
2. Place it in `src-tauri/php-runtime/`
3. Run: `npm run package:php-windows`
4. Update startup code to use bundled PHP

**Note**: Bundling PHP increases installer size by ~30-50MB but makes the app fully portable.

See [BUILD_INSTRUCTIONS.md](BUILD_INSTRUCTIONS.md) for detailed instructions.

## Building

### Development Build
```bash
npm run dev
```
- Starts PHP server
- Launches Tauri development window
- Enables hot-reload
- Opens DevTools

### Production Build
```bash
npm run build
```
- Creates optimized executable
- Generates MSI installer
- Output: `src-tauri/target/release/`

## System Requirements

### Development
- Windows 10/11, macOS 10.13+, or Linux
- Node.js 16+
- Rust 1.70+
- PHP 7.4+
- 4GB RAM minimum

### Production
- Windows 10/11 (primary platform)
- PHP 7.4+ (required on target machine, unless bundled)
- WebView2 (pre-installed on Windows 11)

## Troubleshooting

### Common Issues

**Application won't start?**
- Ensure PHP is installed: `php --version`
- Check that port 8000 is available
- Run `npm install` to install dependencies

**Build fails?**
- Update Rust: `rustup update`
- Clear cache: `npm run clean`
- Reinstall dependencies: `npm install`

**PHP not found?**
- Install PHP from https://www.php.net/downloads
- Add PHP to your system PATH
- Or bundle PHP with the application

See [SETUP.md](SETUP.md) for detailed troubleshooting.

## Contributing

### Development Setup
1. Install prerequisites (Node.js, Rust, PHP)
2. Clone/download project
3. Run `npm install`
4. Start development with `npm run dev`

### Making Changes
1. Test changes in development mode
2. Update documentation if needed
3. Build and test installer
4. Update version numbers

## Version

- **Current Version**: 0.0.1
- **Status**: Development
- **Tauri Version**: 2.0.x

## License

License not specified. Please add appropriate license file if distributing.

## Support

For issues or questions:
1. Check the documentation files
2. Review [BUILD_STATUS.md](BUILD_STATUS.md)
3. Consult [Tauri documentation](https://tauri.app/)

## Resources

- [Tauri Documentation](https://tauri.app/)
- [Rust Documentation](https://doc.rust-lang.org/)
- [PHP Documentation](https://www.php.net/docs.php)

---

**Ready to start?** Read [START_HERE.md](START_HERE.md) for a quick start guide!

