# Project Summary - GemaCrypt

## Overview

**GemaCrypt** is a desktop application that wraps a PHP-based gematria and cryptography tool in a native Tauri application. It provides a seamless desktop experience for the web-based GemaCrypt application, combining the power of PHP with the performance and security of a native desktop app.

## Project Information

- **Name**: GemaCrypt
- **Version**: 0.0.1
- **Type**: Tauri Desktop Application (PHP Wrapper)
- **Platform**: Windows (primary), with potential for macOS/Linux
- **License**: Not specified
- **Repository**: Local development

## Technology Stack

### Frontend
- **HTML5**: Loading screen and PHP detection
- **JavaScript**: Client-side logic and redirection
- **CSS**: Minimal styling for loading screen

### Backend
- **Rust**: Tauri backend and native functionality
- **Tauri 2.0**: Desktop application framework
- **PHP**: Core application logic (external)
- **PHP Built-in Server**: Development server

### Build Tools
- **Node.js**: Package management and build scripts
- **npm**: Dependency management
- **Cargo**: Rust package manager
- **Tauri CLI**: Build and development tools

## Architecture

### Application Structure

```
┌─────────────────────────────────────┐
│   Tauri Desktop Window              │
│  ┌───────────────────────────────┐  │
│  │  WebView (Loading Screen)     │  │
│  │  - PHP Detection              │  │
│  │  - Auto-redirect              │  │
│  └───────────────────────────────┘  │
│              ↓                       │
│  ┌───────────────────────────────┐  │
│  │  PHP Application              │  │
│  │  (http://127.0.0.1:8000)      │  │
│  │  - Gematria calculations      │  │
│  │  - Cryptography tools         │  │
│  └───────────────────────────────┘  │
└─────────────────────────────────────┘
         ↓
┌─────────────────────────────────────┐
│   PHP Built-in Server               │
│   Serving: F:/Daniel/My Web Sites/  │
│            radius.center/gemacrypt  │
└─────────────────────────────────────┘
```

### Component Interaction

1. **Tauri Window**: Native desktop window container
2. **Loading Screen**: Initial HTML page with PHP detection
3. **PHP Server**: Runs in background serving the PHP application
4. **PHP Application**: The actual GemaCrypt functionality
5. **Auto-redirect**: Seamlessly transitions from loading to app

## Key Features

### Current Features
- ✅ Native desktop window
- ✅ PHP server integration
- ✅ Automatic PHP detection
- ✅ Loading screen with error handling
- ✅ Auto-redirect to PHP application
- ✅ Windows installer support
- ✅ Development mode with hot-reload

### Planned Features
- ⏳ Bundled PHP runtime (optional)
- ⏳ Offline mode support
- ⏳ Custom window controls
- ⏳ System tray integration
- ⏳ Auto-update functionality

## File Structure

```
gemacrypt/
├── src/                          # Frontend wrapper
│   └── index.html               # Loading screen
├── src-tauri/                   # Tauri backend
│   ├── src/
│   │   ├── main.rs             # Entry point
│   │   └── lib.rs              # Core logic
│   ├── icons/                  # Application icons
│   ├── capabilities/           # Permissions
│   ├── Cargo.toml              # Rust dependencies
│   ├── tauri.conf.json         # Tauri config
│   └── build.rs                # Build script
├── scripts/
│   └── copy-php.js             # PHP bundling script
├── package.json                # npm configuration
├── quick-dev.bat               # Development launcher
├── quick-build.bat             # Build launcher
└── [Documentation files]       # MD files
```

## Development Workflow

### Development Mode
1. Start PHP server at `http://127.0.0.1:8000`
2. Launch Tauri development window
3. Application loads PHP interface
4. Hot-reload enabled for changes

### Build Process
1. Compile Rust code with Cargo
2. Bundle frontend assets
3. Create platform-specific installer
4. Optional: Bundle PHP runtime

## Dependencies

### Runtime Dependencies
- **PHP**: 7.4+ (required on target machine)
- **WebView2**: Windows only (usually pre-installed)

### Development Dependencies
- **Node.js**: 16+
- **Rust**: Latest stable
- **Tauri CLI**: 2.0+
- **npm**: 8+

### Rust Crates
- `tauri`: Desktop application framework
- `serde`: Serialization/deserialization
- `serde_json`: JSON handling

## Configuration

### Tauri Configuration (`tauri.conf.json`)
- **Product Name**: gemacrypt
- **Version**: 0.0.1
- **Identifier**: com.gemacrypt.app
- **Window**: Default size and settings
- **Bundle**: MSI installer configuration

### Build Configuration
- **Optimization**: Size-optimized release builds
- **LTO**: Enabled for smaller binaries
- **Strip**: Debug symbols removed in release

## Security

### Tauri Security Features
- **CSP**: Content Security Policy enabled
- **Permissions**: Minimal required permissions
- **IPC**: Secure inter-process communication
- **Sandboxing**: WebView sandboxing enabled

### PHP Security Considerations
- Development server (not for production)
- Local-only access (127.0.0.1)
- No external network exposure
- User should implement PHP security best practices

## Performance

### Application Size
- **Executable**: ~8-12 MB (without PHP)
- **Installer**: ~10-15 MB (without PHP)
- **With PHP**: +30-50 MB (if bundled)

### Resource Usage
- **Memory**: ~50-100 MB typical
- **CPU**: Minimal when idle
- **Startup**: <3 seconds typical

### Optimization
- Rust compiled with size optimization
- Minimal frontend assets
- Efficient PHP server integration

## Build Targets

### Windows
- **MSI Installer**: Primary distribution method
- **NSIS Installer**: Alternative option
- **Portable EXE**: Standalone executable

### Future Platforms
- **macOS**: DMG installer
- **Linux**: AppImage, DEB, RPM

## Development Guidelines

### Code Style
- **Rust**: Follow Rust conventions
- **JavaScript**: ES6+ syntax
- **HTML**: Semantic HTML5
- **PHP**: PSR standards (in PHP app)

### Testing
- Manual testing in development mode
- Build verification checklist
- Cross-platform testing (when applicable)

### Version Control
- Git recommended
- Exclude `node_modules/`, `target/`
- Include documentation files

## Known Limitations

1. **PHP Dependency**: Requires PHP on target machine (unless bundled)
2. **Port Conflict**: Port 8000 must be available
3. **Platform**: Currently Windows-focused
4. **PHP Version**: Requires PHP 7.4+

## Future Enhancements

### Short Term
- [ ] Improve error messages
- [ ] Add PHP version detection
- [ ] Better loading screen design
- [ ] Configuration file support

### Long Term
- [ ] Bundle PHP runtime option
- [ ] Multi-platform support
- [ ] Auto-update mechanism
- [ ] System tray integration
- [ ] Custom PHP configuration
- [ ] Offline mode

## Documentation

### Available Documentation
- **START_HERE.md**: Quick start guide
- **BUILD_INSTRUCTIONS.md**: Build guide
- **SETUP.md**: Environment setup
- **PROJECT_SUMMARY.md**: This file
- **CHECKLIST.md**: Development checklist
- **DIRECTORY_STRUCTURE.md**: File structure
- **BUILD_STATUS.md**: Build tracking
- **README.md**: Project overview

## Support and Resources

### Official Resources
- [Tauri Documentation](https://tauri.app/)
- [Rust Documentation](https://doc.rust-lang.org/)
- [PHP Documentation](https://www.php.net/docs.php)

### Project Resources
- Documentation files in project root
- Inline code comments
- Build scripts with explanations

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

## License

License not specified. Please add appropriate license file if distributing.

## Contact

Project maintained locally. For issues or questions, refer to documentation files.

---

**Last Updated**: 2025-01-XX
**Project Status**: Active Development
**Current Version**: 0.0.1
