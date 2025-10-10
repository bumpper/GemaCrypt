@echo off
REM ============================================================================
REM GemaCrypt - Quick Build Script (Windows)
REM Builds the production version of GemaCrypt
REM ============================================================================

echo ==========================================
echo   GemaCrypt - Production Build
echo ==========================================
echo.

echo Detected Platform: Windows
echo.

REM Check if Node.js is installed
where node >nul 2>nul
if %ERRORLEVEL% NEQ 0 (
    echo ERROR: Node.js is not installed
    echo Please install Node.js from: https://nodejs.org/
    pause
    exit /b 1
)

REM Check if npm dependencies are installed
if not exist "node_modules" (
    echo Installing dependencies...
    call npm install
    echo.
)

REM Check if Rust is installed
where cargo >nul 2>nul
if %ERRORLEVEL% NEQ 0 (
    echo ERROR: Rust is not installed
    echo Please install Rust from: https://rustup.rs/
    pause
    exit /b 1
)

echo All prerequisites found
echo.

REM Ask about PHP bundling
echo Do you want to bundle PHP with the application?
echo   (This makes the app self-contained but increases size)
echo.
set /p BUNDLE_PHP="Bundle PHP? (y/N): "

if /i "%BUNDLE_PHP%"=="y" (
    echo.
    echo Bundling PHP runtime...
    call npm run package:php
    echo.
)

REM Show build information
echo Building GemaCrypt for Windows...
echo   Build command: npm run build:windows
echo.
echo This may take several minutes...
echo.

REM Run the build
call npm run build:windows

if %ERRORLEVEL% EQU 0 (
    echo.
    echo ==========================================
    echo   Build Successful!
    echo ==========================================
    echo.
    echo Output location: src-tauri\target\release\bundle\
    echo.
    echo Built files:
    echo   - MSI: src-tauri\target\release\bundle\msi\
    echo   - NSIS: src-tauri\target\release\bundle\nsis\
    echo.
) else (
    echo.
    echo ==========================================
    echo   Build Failed
    echo ==========================================
    echo.
    echo Please check the error messages above.
    echo.
)

pause
