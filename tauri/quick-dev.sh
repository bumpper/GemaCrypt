#!/bin/bash

###############################################################################
# GemaCrypt - Quick Development Script (macOS/Linux)
# Starts the PHP server and Tauri development environment
###############################################################################

echo "=========================================="
echo "  GemaCrypt - Development Mode"
echo "=========================================="
echo ""

# Check if Node.js is installed
if ! command -v node &> /dev/null; then
    echo "❌ Error: Node.js is not installed"
    echo "   Please install Node.js from: https://nodejs.org/"
    exit 1
fi

# Check if npm dependencies are installed
if [ ! -d "node_modules" ]; then
    echo "📦 Installing dependencies..."
    npm install
    echo ""
fi

# Check if PHP is installed
if ! command -v php &> /dev/null; then
    echo "⚠️  Warning: PHP is not installed or not in PATH"
    echo "   The application may not work correctly without PHP"
    echo ""
    echo "   Install PHP:"
    if [[ "$OSTYPE" == "darwin"* ]]; then
        echo "   macOS: brew install php"
    else
        echo "   Ubuntu/Debian: sudo apt install php"
        echo "   Fedora: sudo dnf install php"
    fi
    echo ""
    read -p "Continue anyway? (y/N) " -n 1 -r
    echo ""
    if [[ ! $REPLY =~ ^[Yy]$ ]]; then
        exit 1
    fi
fi

# Check if Rust is installed
if ! command -v cargo &> /dev/null; then
    echo "❌ Error: Rust is not installed"
    echo "   Please install Rust from: https://rustup.rs/"
    exit 1
fi

echo "✓ All prerequisites found"
echo ""
echo "Starting development environment..."
echo "  - PHP Server: http://127.0.0.1:8000"
echo "  - Tauri Dev Window will open shortly"
echo ""
echo "Press Ctrl+C to stop"
echo ""

# Start development mode
npm run dev:mac
