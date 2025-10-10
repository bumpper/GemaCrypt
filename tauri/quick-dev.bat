@echo off
REM ============================================================================
REM GemaCrypt - Quick Development Script (Windows)
REM Starts the PHP server and Tauri development environment
REM ============================================================================

echo ==========================================
echo   GemaCrypt - Development Mode
echo ==========================================
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

REM Check if PHP is installed
where php >nul 2>nul
if %ERRORLEVEL% NEQ 0 (
    echo WARNING: PHP is not installed or not in PATH
    echo The application may not work correctly without PHP
    echo.
    echo Install PHP from: https://www.php.net/downloads
    echo.
    set /p CONTINUE="Continue anyway? (y/N): "
    if /i not "%CONTINUE%"=="y" exit /b 1
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
echo Starting development environment...
echo   - PHP Server: http://127.0.0.1:8000
echo   - Tauri Dev Window will open shortly
echo.
echo Press Ctrl+C to stop
echo.

REM Start development mode
call npm run dev:windows

pause
