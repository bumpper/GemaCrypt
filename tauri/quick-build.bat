@echo off
echo Building GemaCrypt Application...
echo.
echo This will create an optimized production build.
echo The process may take several minutes on first build.
echo.
npm run build
echo.
echo Build complete!
echo.
echo Executable location: src-tauri\target\release\gemacrypt.exe
echo Installer location: src-tauri\target\release\bundle\
echo.
pause
