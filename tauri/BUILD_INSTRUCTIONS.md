# Build Instructions for GemaCrypt

This guide provides detailed instructions for building the GemaCrypt desktop application.

## Prerequisites

Before building, ensure you have the following installed:

1. **Node.js** (v16 or higher)
   - Download from: https://nodejs.org/
   - Verify: `node --version`

2. **Rust** (latest stable)
   - Download from: https://rustup.rs/
   - Verify: `rustc --version`

3. **PHP** (7.4 or higher, 8.x recommended)
   - Download from: https://www.php.net/downloads
   - Verify: `php --version`

4. **Tauri CLI** (installed via npm)
   - Will be installed with `npm install`

## Initial Setup

1. **Navigate to Project Directory**:
   ```bash
   cd C:\Users\Dan Neiderhiser\Desktop\gemacrypt
   ```

2. **Install Dependencies**:
   ```bash
   npm install
   ```
   This installs the Tauri CLI and other required packages.

## Development Build

### Option 1: Using npm Scripts

```bash
npm run dev
```

This will:
- Start the PHP built-in server at `http://127.0.0.1:8000`
- Launch the Tauri development window
- Enable hot-reload for frontend changes
- Open DevTools automatically (in debug mode)

### Option 2: Using Quick Script (Windows)

Double-click `quick-dev.bat` or run:
```bash
quick-dev.bat
```

### Option 3: Manual Two-Step Process

If you prefer to run PHP and Tauri separately:

**Terminal 1 - Start PHP Server**:
```bash
cd "F:/Daniel/My Web Sites/radius.center/gemacrypt"
php -S 127.0.0.1:8000
```

**Terminal 2 - Start Tauri**:
```bash
cd "C:/Users/Dan Neiderhiser/Desktop/gemacrypt"
npm run tauri dev
```

## Production Build

### Option 1: Using npm Scripts

```bash
npm run build
```

This creates optimized production builds for your platform.

### Option 2: Using Quick Script (Windows)

Double-click `quick-build.bat` or run:
```bash
quick-build.bat
```

### Platform-Specific Builds

**Windows**:
```bash
npm run build
```
Creates: `.msi` and `.exe` installers

**Note**: Cross-platform builds from Windows require additional setup.

## Build Output

After building, find your application in:
```
src-tauri/target/release/
```

Installers are located in:
```
src-tauri/target/release/bundle/
```

### Windows Output Files
- `gemacrypt.exe` - Standalone executable
- `msi/gemacrypt_0.0.1_x64_en-US.msi` - MSI installer
- `nsis/gemacrypt_0.0.1_x64-setup.exe` - NSIS installer (if configured)

## Build Configuration

The build is configured in:
- `src-tauri/tauri.conf.json` - Tauri configuration
- `src-tauri/Cargo.toml` - Rust dependencies
- `package.json` - Node.js scripts and dependencies

## PHP Integration

### Development Mode
In development, the PHP server runs separately and the Tauri app connects to `http://127.0.0.1:8000`.

### Production Mode (Current Setup)
The current build **requires PHP to be installed** on the target machine. The application will:
1. Check if PHP is available in the system PATH
2. Display a warning if PHP is not found
3. Require users to install PHP separately

### Bundling PHP (Optional)

To create a fully self-contained application with PHP bundled:

1. **Download Portable PHP**:
   - Get a thread-safe, non-installer PHP zip for Windows
   - Extract to `src-tauri/php-runtime/`

2. **Update Build Script**:
   - The `scripts/copy-php.js` script is provided for this purpose
   - Run: `npm run package:php-windows`

3. **Modify Startup Code**:
   - Update `src-tauri/src/lib.rs` to launch the bundled PHP
   - Point to the bundled PHP executable instead of system PHP

**Note**: Bundling PHP increases the installer size by ~30-50MB but makes the app fully portable.

## Optimization Settings

The release build includes:
- **LTO (Link Time Optimization)**: Enabled
- **Code Stripping**: Enabled
- **Optimization Level**: Size-optimized (`opt-level = "s"`)
- **Panic Strategy**: Abort (smaller binary)

## Troubleshooting

### Build Fails

1. **Clear Cache**:
   ```bash
   cd src-tauri
   cargo clean
   cd ..
   npm run build
   ```

2. **Update Dependencies**:
   ```bash
   npm install
   cd src-tauri
   cargo update
   cd ..
   ```

### Missing Dependencies

If you get errors about missing system dependencies:

**Windows**: Install Visual Studio Build Tools
- Download from: https://visualstudio.microsoft.com/downloads/
- Select "Desktop development with C++"

### PHP Not Found

**During Development**:
- Ensure PHP is installed and in your PATH
- Test: `php --version`
- Add PHP to PATH if needed

**In Built Application**:
- The built app requires PHP on the target machine
- Or bundle PHP using the instructions above

### Slow Build Times

First builds are slow due to Rust compilation. Subsequent builds are much faster due to caching.

To speed up builds:
- Use `npm run dev` for development (faster iteration)
- Only use `npm run build` for final releases
- Keep the `target/` directory (don't delete between builds)

## Testing the Build

1. **Run the executable directly**:
   ```bash
   ./src-tauri/target/release/gemacrypt.exe
   ```

2. **Install and test the installer**:
   - Run the MSI installer
   - Launch from Start Menu
   - Verify all features work
   - Test with and without PHP in PATH

## Build Verification Checklist

- [ ] Application launches successfully
- [ ] PHP server starts (or warning displays if PHP missing)
- [ ] GemaCrypt interface loads correctly
- [ ] All gematria calculations work
- [ ] Window resizes correctly
- [ ] Application icon displays properly
- [ ] Application closes cleanly

## Distribution

### Creating a Release

1. **Update Version Number**:
   - Edit `src-tauri/tauri.conf.json`
   - Edit `package.json`
   - Update `src-tauri/Cargo.toml`

2. **Build for Release**:
   ```bash
   npm run build
   ```

3. **Test the Installer**:
   - Install on a clean system
   - Verify all functionality
   - Test uninstaller

4. **Package for Distribution**:
   - Locate installer in `src-tauri/target/release/bundle/`
   - Create release notes
   - Distribute MSI or NSIS installer

### Installer Options

**MSI Installer** (Recommended for Windows):
- Professional appearance
- Standard Windows installation
- Easy to deploy in enterprise environments

**NSIS Installer** (Alternative):
- More customization options
- Smaller file size
- Requires additional configuration in `tauri.conf.json`

## Next Steps

After successful build:
1. Test the application thoroughly
2. Create installers for distribution
3. Document any platform-specific issues
4. Update version numbers for releases

## Additional Resources

- [Tauri Documentation](https://tauri.app/)
- [Rust Documentation](https://doc.rust-lang.org/)
- [Cargo Book](https://doc.rust-lang.org/cargo/)
- [PHP Documentation](https://www.php.net/docs.php)

---

For more information, see [SETUP.md](SETUP.md) and [PROJECT_SUMMARY.md](PROJECT_SUMMARY.md).
