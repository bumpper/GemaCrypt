# Directory Structure - GemaCrypt

Complete overview of the project's file organization and structure.

## Root Directory

```
gemacrypt/
├── src/                          # Frontend wrapper files
├── src-tauri/                    # Tauri backend (Rust)
├── scripts/                      # Build and utility scripts
├── node_modules/                 # npm dependencies (generated)
├── package.json                  # npm configuration
├── package-lock.json            # npm lock file (generated)
├── .gitignore                   # Git exclusions
├── README.md                    # Project overview
├── START_HERE.md                # Quick start guide
├── BUILD_INSTRUCTIONS.md        # Build guide
├── SETUP.md                     # Environment setup
├── PROJECT_SUMMARY.md           # Project details
├── CHECKLIST.md                 # Development checklist
├── DIRECTORY_STRUCTURE.md       # This file
├── BUILD_STATUS.md              # Build status tracking
├── quick-dev.bat                # Windows dev script
└── quick-build.bat              # Windows build script
```

## Frontend Directory (`src/`)

```
src/
└── index.html                   # Loading screen and PHP detection
```

### Frontend File Descriptions

**index.html**
- Loading screen interface
- PHP detection logic
- Auto-redirect to PHP application
- Error banner for missing PHP
- Minimal styling

## Backend Directory (`src-tauri/`)

```
src-tauri/
├── src/                         # Rust source code
│   ├── main.rs                  # Application entry point
│   └── lib.rs                   # Core application logic
├── icons/                       # Application icons
│   ├── 32x32.png               # Small icon
│   ├── 128x128.png             # Medium icon
│   ├── 128x128@2x.png          # Retina icon
│   ├── icon.png                # Base icon
│   ├── icon.ico                # Windows icon
│   ├── icon.icns               # macOS icon
│   └── [Windows Store icons]   # Various sizes
├── capabilities/                # Permission definitions
│   └── default.json            # Default capabilities
├── gen/                         # Generated files (auto-created)
├── target/                      # Build output (generated)
│   ├── debug/                  # Debug builds
│   └── release/                # Release builds
├── Cargo.toml                   # Rust dependencies
├── Cargo.lock                   # Rust lock file (generated)
├── tauri.conf.json             # Tauri configuration
├── build.rs                     # Build script
└── .gitignore                  # Rust-specific exclusions
```

### Backend File Descriptions

**src/main.rs**
- Application entry point
- Calls lib.rs run function
- Windows subsystem configuration

**src/lib.rs**
- Tauri builder setup
- Plugin initialization
- Window configuration
- DevTools setup (debug mode)

**Cargo.toml**
- Rust package metadata
- Dependencies (tauri, serde, etc.)
- Build features
- Optimization settings

**tauri.conf.json**
- Application metadata
- Window configuration
- Bundle settings
- Security policies
- Build commands

**build.rs**
- Pre-build script
- Tauri build integration

**capabilities/default.json**
- Permission definitions
- Security capabilities
- Shell access permissions

## Scripts Directory (`scripts/`)

```
scripts/
└── copy-php.js                  # PHP bundling script (optional)
```

### Scripts File Descriptions

**copy-php.js**
- Node.js script for bundling PHP runtime
- Copies PHP files to build directory
- Optional feature for self-contained builds

## Generated Directories

### node_modules/
```
node_modules/
├── @tauri-apps/              # Tauri npm packages
│   └── cli/                  # Tauri CLI
└── [other dependencies]      # npm packages (if any)
```

### target/ (Rust Build Output)
```
target/
├── debug/                    # Debug builds
│   ├── gemacrypt.exe        # Debug executable
│   └── [build artifacts]    # Intermediate files
└── release/                  # Release builds
    ├── gemacrypt.exe        # Optimized executable
    └── bundle/              # Installers
        ├── msi/             # MSI installer
        └── nsis/            # NSIS installer (if configured)
```

## Configuration Files

### Root Level
- **package.json**: npm scripts, dependencies, metadata
- **package-lock.json**: Locked dependency versions
- **.gitignore**: Files to exclude from Git

### Tauri Level
- **Cargo.toml**: Rust package configuration
- **Cargo.lock**: Locked Rust dependencies
- **tauri.conf.json**: Application configuration
- **build.rs**: Build-time script

## Documentation Files

### User Documentation
- **README.md**: Project overview and quick start
- **START_HERE.md**: Beginner's guide
- **SETUP.md**: Environment setup instructions

### Developer Documentation
- **BUILD_INSTRUCTIONS.md**: Detailed build guide
- **PROJECT_SUMMARY.md**: Technical overview
- **CHECKLIST.md**: Development tasks
- **DIRECTORY_STRUCTURE.md**: This file
- **BUILD_STATUS.md**: Build status tracking

## Build Scripts

### Windows Batch Files
- **quick-dev.bat**: Start development server
- **quick-build.bat**: Build production version

## External Dependencies

### PHP Application
```
F:/Daniel/My Web Sites/radius.center/gemacrypt/
├── [PHP files]              # GemaCrypt PHP application
├── [Assets]                 # Images, CSS, JS
└── [Configuration]          # PHP config files
```

**Note**: The PHP application is external to this Tauri wrapper and must be present at the specified path.

## File Sizes (Approximate)

### Source Files
- `index.html`: ~2 KB
- `main.rs`: ~1 KB
- `lib.rs`: ~2 KB
- Other config files: <10 KB each

### Build Output
- Debug executable: ~15-20 MB
- Release executable: ~8-12 MB
- MSI installer: ~10-15 MB
- With bundled PHP: +30-50 MB

## Important Paths

### Development
```
Tauri Project: C:/Users/Dan Neiderhiser/Desktop/gemacrypt
PHP Application: F:/Daniel/My Web Sites/radius.center/gemacrypt
Frontend Source: ./src/
Backend Source: ./src-tauri/src/
Configuration: ./src-tauri/tauri.conf.json
```

### Build Output
```
Debug Build: ./src-tauri/target/debug/
Release Build: ./src-tauri/target/release/
Installers: ./src-tauri/target/release/bundle/
```

### Runtime
```
PHP Server: http://127.0.0.1:8000
PHP Root: F:/Daniel/My Web Sites/radius.center/gemacrypt
```

## File Permissions

### Executable Files
- `*.bat`: Windows batch scripts
- `gemacrypt.exe`: Application executable
- `*.msi`: Windows installer

### Configuration Files
- `*.json`: JSON configuration
- `*.toml`: TOML configuration
- `*.rs`: Rust source code
- `*.js`: JavaScript files

### Assets
- `*.html`: HTML files
- `*.png`, `*.ico`, `*.icns`: Icons

## Excluded Files (.gitignore)

### Node.js
- `node_modules/`
- `*.log`
- `dist/`
- `dist-ssr/`

### Rust
- `target/`
- `Cargo.lock` (sometimes)

### Tauri
- `src-tauri/gen/`
- `src-tauri/target/`

### IDE
- `.vscode/` (except extensions.json)
- `.idea/`
- `*.suo`

### OS
- `.DS_Store` (macOS)
- `Thumbs.db` (Windows)

## Navigation Guide

### To Find...

**Main Application Code**:
- Frontend: `src/index.html`
- Backend: `src-tauri/src/lib.rs`
- Entry Point: `src-tauri/src/main.rs`

**Configuration**:
- npm: `package.json`
- Tauri: `src-tauri/tauri.conf.json`
- Rust: `src-tauri/Cargo.toml`

**Documentation**:
- Start: `START_HERE.md`
- Build: `BUILD_INSTRUCTIONS.md`
- Setup: `SETUP.md`

**Assets**:
- Icons: `src-tauri/icons/`

**Build Output**:
- Executable: `src-tauri/target/release/gemacrypt.exe`
- Installers: `src-tauri/target/release/bundle/`

**Scripts**:
- PHP Bundling: `scripts/copy-php.js`
- Quick Dev: `quick-dev.bat`
- Quick Build: `quick-build.bat`

## Directory Best Practices

### Do's
- ✅ Keep source files in `src/`
- ✅ Keep Rust code in `src-tauri/src/`
- ✅ Use relative paths in code
- ✅ Document new files
- ✅ Follow naming conventions
- ✅ Keep PHP app separate

### Don'ts
- ❌ Don't commit `node_modules/`
- ❌ Don't commit `target/`
- ❌ Don't modify generated files
- ❌ Don't use absolute paths (except for PHP app path)
- ❌ Don't mix Tauri and PHP code

## Maintenance

### Regular Cleanup
```bash
# Clean Rust build cache
cd src-tauri
cargo clean

# Clean npm cache
npm cache clean --force

# Remove node_modules
rm -rf node_modules
npm install
```

### Backup Important Files
- `src/` directory (frontend files)
- `src-tauri/src/` (Rust source)
- `src-tauri/tauri.conf.json`
- `package.json`
- `scripts/` directory
- Documentation files

### Not to Backup
- `node_modules/` (regenerate with npm install)
- `target/` (regenerate with build)
- `src-tauri/gen/` (auto-generated)

## Project Organization

### Separation of Concerns

**Tauri Wrapper** (This Project):
- Desktop window management
- PHP server integration
- Loading screen
- Error handling
- Build and distribution

**PHP Application** (External):
- GemaCrypt functionality
- Gematria calculations
- Cryptography tools
- User interface
- Business logic

### Integration Points

1. **PHP Server**: Started by Tauri, serves PHP app
2. **WebView**: Displays PHP application
3. **Port 8000**: Communication channel
4. **File System**: PHP app files accessed by server

## Scalability

### Adding Features

**To Tauri Wrapper**:
- Add files to `src/` or `src-tauri/src/`
- Update configuration in `tauri.conf.json`
- Modify build scripts if needed

**To PHP Application**:
- Modify files in PHP app directory
- No changes needed to Tauri wrapper
- Restart dev server to see changes

### Future Structure

If bundling PHP:
```
gemacrypt/
├── src-tauri/
│   ├── php-runtime/         # Bundled PHP (future)
│   │   ├── php.exe
│   │   ├── php.ini
│   │   └── [extensions]
│   └── php-app/             # Bundled PHP app (future)
│       └── [GemaCrypt files]
```

---

## Quick Reference

### Key Directories
- **Source**: `src/`, `src-tauri/src/`
- **Config**: `src-tauri/tauri.conf.json`, `package.json`
- **Build**: `src-tauri/target/release/`
- **Docs**: Root directory (*.md files)

### Key Files
- **Entry**: `src-tauri/src/main.rs`
- **Core**: `src-tauri/src/lib.rs`
- **UI**: `src/index.html`
- **Config**: `src-tauri/tauri.conf.json`

### External Paths
- **PHP App**: `F:/Daniel/My Web Sites/radius.center/gemacrypt`
- **PHP Server**: `http://127.0.0.1:8000`

---

**Last Updated**: 2025-01-XX
**Total Files**: ~15 source files + dependencies
**Total Size**: ~50 KB source + ~200 MB dependencies
