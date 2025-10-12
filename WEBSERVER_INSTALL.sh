#!/bin/bash

# GemaCrypt Installation Script
# This script installs all required packages for app1.php and app2.php on multiple operating systems
# and deploys the GemaCrypt application from GitHub

echo "=========================================="
echo "GemaCrypt Installation Script"
echo "=========================================="
echo ""

# Detect operating system
detect_os() {
    if [[ "$OSTYPE" == "linux-gnu"* ]]; then
        if [ -f /etc/debian_version ]; then
            if grep -q "Ubuntu" /etc/os-release; then
                OS="ubuntu"
                echo "Detected: Ubuntu Linux"
            else
                OS="debian"
                echo "Detected: Debian Linux"
            fi
        elif [ -f /etc/redhat-release ]; then
            if grep -q "CentOS" /etc/redhat-release; then
                OS="centos"
                echo "Detected: CentOS Linux"
            elif grep -q "Red Hat" /etc/redhat-release; then
                OS="redhat"
                echo "Detected: Red Hat Enterprise Linux"
            else
                OS="redhat"
                echo "Detected: Red Hat-based Linux"
            fi
        else
            OS="linux"
            echo "Detected: Generic Linux"
        fi
    elif [[ "$OSTYPE" == "darwin"* ]]; then
        OS="macos"
        echo "Detected: macOS"
    elif [[ "$OSTYPE" == "freebsd"* ]]; then
        OS="freebsd"
        echo "Detected: FreeBSD"
    elif [[ "$OSTYPE" == "openbsd"* ]]; then
        OS="openbsd"
        echo "Detected: OpenBSD"
    elif [[ "$OSTYPE" == "solaris"* ]]; then
        OS="solaris"
        echo "Detected: Solaris"
    elif [[ "$OSTYPE" == "msys" ]] || [[ "$OSTYPE" == "cygwin" ]]; then
        OS="windows"
        echo "Detected: Windows (with MSYS/Cygwin)"
    else
        OS="unknown"
        echo "Unknown operating system: $OSTYPE"
        echo "This script may not work correctly on your system."
        read -p "Do you want to continue anyway? (y/n): " -n 1 -r
        echo ""
        if [[ ! $REPLY =~ ^[Yy]$ ]]; then
            exit 1
        fi
    fi
}

# Set OS-specific variables
set_os_variables() {
    case $OS in
        "debian"|"ubuntu")
            PKG_MANAGER="apt"
            PKG_UPDATE="apt update"
            PKG_INSTALL="apt install -y"
            PKG_UPGRADE="apt install --only-upgrade -y"
            PKG_CHECK="dpkg -l | grep -q \"^ii  \$1 \""
            WEB_ROOT="/var/www/html"
            WEB_USER="www-data"
            WEB_GROUP="www-data"
            APACHE_SERVICE="apache2"
            MYSQL_SERVICE="mysql"
            APACHE_MODS_DIR="/etc/apache2/mods-available"
            APACHE_CONF_DIR="/etc/apache2/conf-available"
            MYSQL_PACKAGES=("mysql-server" "mysql-client")
            PHP_MYSQL_PACKAGES=("php-mysql" "php-mysqli" "php-pdo" "php-pdo-mysql")
            PHP_ADDITIONAL_PACKAGES=("php-curl" "php-json" "php-mbstring" "php-xml" "php-zip" "php-gd" "php-fileinfo" "php-openssl")
            APACHE_ENABLE_MOD="a2enmod"
            APACHE_ENABLE_CONF="a2enconf"
            ;;
        "centos"|"redhat")
            PKG_MANAGER="yum"
            PKG_UPDATE="yum update -y"
            PKG_INSTALL="yum install -y"
            PKG_UPGRADE="yum update -y"
            PKG_CHECK="rpm -q \$1 >/dev/null 2>&1"
            WEB_ROOT="/var/www/html"
            WEB_USER="apache"
            WEB_GROUP="apache"
            APACHE_SERVICE="httpd"
            MYSQL_SERVICE="mysqld"
            APACHE_MODS_DIR="/etc/httpd/conf.modules.d"
            APACHE_CONF_DIR="/etc/httpd/conf.d"
            MYSQL_PACKAGES=("mysql-server" "mysql")
            PHP_MYSQL_PACKAGES=("php-mysql" "php-mysqli" "php-pdo" "php-pdo_mysql")
            PHP_ADDITIONAL_PACKAGES=("php-curl" "php-json" "php-mbstring" "php-xml" "php-zip" "php-gd" "php-fileinfo" "php-openssl")
            APACHE_ENABLE_MOD="echo"
            APACHE_ENABLE_CONF="echo"
            ;;
        "macos")
            PKG_MANAGER="brew"
            PKG_UPDATE="brew update"
            PKG_INSTALL="brew install"
            PKG_UPGRADE="brew upgrade"
            PKG_CHECK="brew list \$1 >/dev/null 2>&1"
            WEB_ROOT="/usr/local/var/www"
            WEB_USER="$(whoami)"
            WEB_GROUP="staff"
            APACHE_SERVICE="httpd"
            MYSQL_SERVICE="mysql"
            APACHE_MODS_DIR="/usr/local/etc/httpd/conf"
            APACHE_CONF_DIR="/usr/local/etc/httpd/conf"
            MYSQL_PACKAGES=("mysql")
            PHP_MYSQL_PACKAGES=("php")
            PHP_ADDITIONAL_PACKAGES=()
            APACHE_ENABLE_MOD="echo"
            APACHE_ENABLE_CONF="echo"
            ;;
        "freebsd")
            PKG_MANAGER="pkg"
            PKG_UPDATE="pkg update"
            PKG_INSTALL="pkg install -y"
            PKG_UPGRADE="pkg upgrade -y"
            PKG_CHECK="pkg info \$1 >/dev/null 2>&1"
            WEB_ROOT="/usr/local/www/apache24/data"
            WEB_USER="www"
            WEB_GROUP="www"
            APACHE_SERVICE="apache24"
            MYSQL_SERVICE="mysql-server"
            APACHE_MODS_DIR="/usr/local/etc/apache24/modules.d"
            APACHE_CONF_DIR="/usr/local/etc/apache24/Includes"
            MYSQL_PACKAGES=("mysql80-server" "mysql80-client")
            PHP_MYSQL_PACKAGES=("php81-mysqli" "php81-pdo" "php81-pdo_mysql")
            PHP_ADDITIONAL_PACKAGES=("php81-curl" "php81-json" "php81-mbstring" "php81-xml" "php81-zip" "php81-gd" "php81-fileinfo" "php81-openssl")
            APACHE_ENABLE_MOD="echo"
            APACHE_ENABLE_CONF="echo"
            ;;
        "openbsd")
            PKG_MANAGER="pkg_add"
            PKG_UPDATE="pkg_add -u"
            PKG_INSTALL="pkg_add"
            PKG_UPGRADE="pkg_add -u"
            PKG_CHECK="pkg_info -e \$1 >/dev/null 2>&1"
            WEB_ROOT="/var/www/htdocs"
            WEB_USER="www"
            WEB_GROUP="www"
            APACHE_SERVICE="httpd"
            MYSQL_SERVICE="mysqld"
            APACHE_MODS_DIR="/etc/apache2"
            APACHE_CONF_DIR="/etc/apache2"
            MYSQL_PACKAGES=("mysql-server" "mysql-client")
            PHP_MYSQL_PACKAGES=("php-mysql" "php-mysqli" "php-pdo" "php-pdo_mysql")
            PHP_ADDITIONAL_PACKAGES=("php-curl" "php-json" "php-mbstring" "php-xml" "php-zip" "php-gd" "php-openssl")
            APACHE_ENABLE_MOD="echo"
            APACHE_ENABLE_CONF="echo"
            ;;
        "solaris")
            PKG_MANAGER="pkg"
            PKG_UPDATE="pkg refresh"
            PKG_INSTALL="pkg install"
            PKG_UPGRADE="pkg update"
            PKG_CHECK="pkg list \$1 >/dev/null 2>&1"
            WEB_ROOT="/var/apache2/2.4/htdocs"
            WEB_USER="webservd"
            WEB_GROUP="webservd"
            APACHE_SERVICE="apache24"
            MYSQL_SERVICE="mysql"
            APACHE_MODS_DIR="/etc/apache2/2.4/conf.d"
            APACHE_CONF_DIR="/etc/apache2/2.4/conf.d"
            MYSQL_PACKAGES=("database/mysql-80")
            PHP_MYSQL_PACKAGES=("web/php-81/extension/php-mysql")
            PHP_ADDITIONAL_PACKAGES=("web/php-81/extension/php-curl" "web/php-81/extension/php-mbstring" "web/php-81/extension/php-gd")
            APACHE_ENABLE_MOD="echo"
            APACHE_ENABLE_CONF="echo"
            ;;
        *)
            echo "Unsupported operating system. Defaulting to Debian/Ubuntu commands."
            OS="debian"
            set_os_variables
            ;;
    esac
}

# Function to check if a package is installed (OS-specific)
check_package_installed() {
    case $OS in
        "debian"|"ubuntu")
            dpkg -l | grep -q "^ii  $1 "
            ;;
        "centos"|"redhat")
            rpm -q "$1" >/dev/null 2>&1
            ;;
        "macos")
            brew list "$1" >/dev/null 2>&1
            ;;
        "freebsd")
            pkg info "$1" >/dev/null 2>&1
            ;;
        "openbsd")
            pkg_info -e "$1" >/dev/null 2>&1
            ;;
        "solaris")
            pkg list "$1" >/dev/null 2>&1
            ;;
        *)
            return 1
            ;;
    esac
}

# Function to check if an Apache module is enabled
check_apache_module() {
    case $OS in
        "debian"|"ubuntu")
            apache2ctl -M 2>/dev/null | grep -q "$1"
            ;;
        "centos"|"redhat")
            httpd -M 2>/dev/null | grep -q "$1"
            ;;
        "macos")
            httpd -M 2>/dev/null | grep -q "$1"
            ;;
        *)
            return 1
            ;;
    esac
}

# Function to start/restart services
manage_service() {
    local action=$1
    local service=$2
    
    case $OS in
        "debian"|"ubuntu"|"centos"|"redhat")
            systemctl $action $service
            ;;
        "macos")
            if [ "$action" == "restart" ]; then
                brew services restart $service
            else
                brew services start $service
            fi
            ;;
        "freebsd")
            service $service $action
            ;;
        "openbsd")
            rcctl $action $service
            ;;
        "solaris")
            svcadm $action $service
            ;;
    esac
}

# Check if running with appropriate privileges
check_privileges() {
    case $OS in
        "macos")
            if ! command -v brew &> /dev/null; then
                echo "Homebrew is not installed."
                read -p "Would you like to install Homebrew? (y/n): " -n 1 -r
                echo ""
                if [[ $REPLY =~ ^[Yy]$ ]]; then
                    echo "Installing Homebrew..."
                    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
                    if [ $? -eq 0 ]; then
                        echo "✓ Homebrew installed successfully"
                        # Add Homebrew to PATH for the current session
                        eval "$(/opt/homebrew/bin/brew shellenv 2>/dev/null || /usr/local/bin/brew shellenv)"
                    else
                        echo "✗ Failed to install Homebrew"
                        exit 1
                    fi
                else
                    echo "Homebrew is required for macOS installation."
                    exit 1
                fi
            fi
            ;;
        *)
            if [[ $EUID -ne 0 ]]; then
                echo "This script must be run as root or with sudo privileges"
                echo "Usage: sudo bash install.sh"
                exit 1
            fi
            ;;
    esac
}

# Detect OS and set variables
detect_os

# Handle Windows WSL
if [[ "$OS" == "windows" ]]; then
    if command -v wsl >/dev/null 2>&1; then
        echo "WSL detected. Entering WSL to perform installation..."
        SCRIPT_PATH=$(realpath "$0")
        wsl bash "$SCRIPT_PATH"
        exit $?
    else
        echo "WSL not detected. Windows Subsystem for Linux (WSL) is required to proceed."
        echo ""
        echo "To install WSL automatically (requires administrator privileges):"
        echo "Run the following command in PowerShell or Command Prompt as administrator:"
        echo "wsl --install"
        echo ""
        echo "This will install WSL with Ubuntu by default. After installation, restart your computer if prompted, then re-run this script."
        echo ""
        echo "Manual installation instructions:"
        echo "1. Open PowerShell or Command Prompt as administrator"
        echo "2. Run: dism.exe /online /enable-feature /featurename:Microsoft-Windows-Subsystem-Linux /all /norestart"
        echo "3. Run: dism.exe /online /enable-feature /featurename:VirtualMachinePlatform /all /norestart"
        echo "4. Restart your computer"
        echo "5. Download and install a Linux distribution from the Microsoft Store (e.g., Ubuntu)"
        echo "6. Launch the distribution and set up a username/password"
        echo "7. Re-run this script"
        echo ""
        echo "For more information, visit: https://docs.microsoft.com/en-us/windows/wsl/install"
        exit 1
    fi
fi

set_os_variables
check_privileges

echo "Starting GemaCrypt dependencies check and installation..."
echo ""

# Update package list
echo "Step 1: Updating package list..."
case $OS in
    "debian"|"ubuntu")
        apt update
        ;;
    "centos"|"redhat")
        yum update -y
        ;;
    "macos")
        brew update
        ;;
    "freebsd")
        pkg update
        ;;
    "openbsd")
        pkg_add -u
        ;;
    "solaris")
        pkg refresh
        ;;
esac

if [ $? -eq 0 ]; then
    echo "✓ Package list updated successfully"
else
    echo "✗ Failed to update package list"
    exit 1
fi
echo ""

# Install git first (needed for cloning)
echo "Step 2: Checking git installation..."
if check_package_installed "git"; then
    echo "✓ git is already installed"
    read -p "Would you like to update git? (y/n): " -n 1 -r
    echo ""
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        case $OS in
            "debian"|"ubuntu") apt install --only-upgrade -y git ;;
            "centos"|"redhat") yum update -y git ;;
            "macos") brew upgrade git ;;
            "freebsd") pkg upgrade -y git ;;
            "openbsd") pkg_add -u git ;;
            "solaris") pkg update git ;;
        esac
        echo "✓ git updated"
    else
        echo "→ Skipping git update"
    fi
else
    echo "Installing git..."
    case $OS in
        "debian"|"ubuntu") apt install -y git ;;
        "centos"|"redhat") yum install -y git ;;
        "macos") brew install git ;;
        "freebsd") pkg install -y git ;;
        "openbsd") pkg_add git ;;
        "solaris") pkg install git ;;
    esac
    if [ $? -eq 0 ]; then
        echo "✓ git installed successfully"
    else
        echo "✗ Failed to install git"
        exit 1
    fi
fi
echo ""

# Check and install MySQL Server and Client
echo "Step 3: Checking MySQL server and client..."
for package in "${MYSQL_PACKAGES[@]}"; do
    if check_package_installed "$package"; then
        echo "✓ $package is already installed"
        read -p "Would you like to update $package? (y/n): " -n 1 -r
        echo ""
        if [[ $REPLY =~ ^[Yy]$ ]]; then
            case $OS in
                "debian"|"ubuntu") apt install --only-upgrade -y "$package" ;;
                "centos"|"redhat") yum update -y "$package" ;;
                "macos") brew upgrade mysql ;;
                "freebsd") pkg upgrade -y "$package" ;;
                "openbsd") pkg_add -u "$package" ;;
                "solaris") pkg update "$package" ;;
            esac
            echo "✓ $package updated"
        else
            echo "→ Skipping $package update"
        fi
    else
        echo "Installing $package..."
        case $OS in
            "debian"|"ubuntu") apt install -y "$package" ;;
            "centos"|"redhat") yum install -y "$package" ;;
            "macos") brew install mysql ;;
            "freebsd") pkg install -y "$package" ;;
            "openbsd") pkg_add "$package" ;;
            "solaris") pkg install "$package" ;;
        esac
        if [ $? -eq 0 ]; then
            echo "✓ $package installed successfully"
        else
            echo "✗ Failed to install $package"
            exit 1
        fi
    fi
done
echo ""

# Check and install essential PHP MySQL extensions
echo "Step 4: Checking essential PHP MySQL extensions..."
for package in "${PHP_MYSQL_PACKAGES[@]}"; do
    if check_package_installed "$package"; then
        echo "✓ $package is already installed"
        read -p "Would you like to update $package? (y/n): " -n 1 -r
        echo ""
        if [[ $REPLY =~ ^[Yy]$ ]]; then
            case $OS in
                "debian"|"ubuntu") apt install --only-upgrade -y "$package" ;;
                "centos"|"redhat") yum update -y "$package" ;;
                "macos") echo "→ PHP extensions managed with main PHP package" ;;
                "freebsd") pkg upgrade -y "$package" ;;
                "openbsd") pkg_add -u "$package" ;;
                "solaris") pkg update "$package" ;;
            esac
            echo "✓ $package updated"
        else
            echo "→ Skipping $package update"
        fi
    else
        echo "Installing $package..."
        case $OS in
            "debian"|"ubuntu") apt install -y "$package" ;;
            "centos"|"redhat") yum install -y "$package" ;;
            "macos") echo "→ PHP extensions included with main PHP package" ;;
            "freebsd") pkg install -y "$package" ;;
            "openbsd") pkg_add "$package" ;;
            "solaris") pkg install "$package" ;;
        esac
        if [ $? -eq 0 ]; then
            echo "✓ $package installed successfully"
        else
            echo "✗ Failed to install $package"
            exit 1
        fi
    fi
done
echo ""

# Check and install additional recommended PHP extensions
echo "Step 5: Checking additional PHP extensions..."
for package in "${PHP_ADDITIONAL_PACKAGES[@]}"; do
    if check_package_installed "$package"; then
        echo "✓ $package is already installed"
        read -p "Would you like to update $package? (y/n): " -n 1 -r
        echo ""
        if [[ $REPLY =~ ^[Yy]$ ]]; then
            case $OS in
                "debian"|"ubuntu") apt install --only-upgrade -y "$package" ;;
                "centos"|"redhat") yum update -y "$package" ;;
                "macos") echo "→ PHP extensions managed with main PHP package" ;;
                "freebsd") pkg upgrade -y "$package" ;;
                "openbsd") pkg_add -u "$package" ;;
                "solaris") pkg update "$package" ;;
            esac
            echo "✓ $package updated"
        else
            echo "→ Skipping $package update"
        fi
    else
        echo "Installing $package..."
        case $OS in
            "debian"|"ubuntu") apt install -y "$package" ;;
            "centos"|"redhat") yum install -y "$package" ;;
            "macos") echo "→ PHP extensions included with main PHP package" ;;
            "freebsd") pkg install -y "$package" ;;
            "openbsd") pkg_add "$package" ;;
            "solaris") pkg install "$package" ;;
        esac
        if [ $? -eq 0 ]; then
            echo "✓ $package installed successfully"
        else
            echo "✗ Failed to install $package"
            exit 1
        fi
    fi
done
echo ""

# Enable Apache modules for CORS support
echo "Step 6: Checking Apache modules for CORS support..."
if check_apache_module "headers"; then
    echo "✓ Apache headers module is already enabled"
else
    echo "Enabling Apache headers module..."
    case $OS in
        "debian"|"ubuntu")
            a2enmod headers
            ;;
        "centos"|"redhat")
            echo "LoadModule headers_module modules/mod_headers.so" >> /etc/httpd/conf.modules.d/00-base.conf
            ;;
        "macos")
            sed -i '' 's/#LoadModule headers_module/LoadModule headers_module/' /usr/local/etc/httpd/httpd.conf
            ;;
        "freebsd")
            echo 'LoadModule headers_module libexec/apache24/mod_headers.so' >> /usr/local/etc/apache24/httpd.conf
            ;;
        *)
            echo "→ Manual Apache module configuration may be required"
            ;;
    esac
    echo "✓ Apache headers module enabled"
fi

if check_apache_module "rewrite"; then
    echo "✓ Apache rewrite module is already enabled"
else
    echo "Enabling Apache rewrite module..."
    case $OS in
        "debian"|"ubuntu")
            a2enmod rewrite
            ;;
        "centos"|"redhat")
            echo "LoadModule rewrite_module modules/mod_rewrite.so" >> /etc/httpd/conf.modules.d/00-base.conf
            ;;
        "macos")
            sed -i '' 's/#LoadModule rewrite_module/LoadModule rewrite_module/' /usr/local/etc/httpd/httpd.conf
            ;;
        "freebsd")
            echo 'LoadModule rewrite_module libexec/apache24/mod_rewrite.so' >> /usr/local/etc/apache24/httpd.conf
            ;;
        *)
            echo "→ Manual Apache module configuration may be required"
            ;;
    esac
    echo "✓ Apache rewrite module enabled"
fi
echo ""

# Create CORS configuration file
echo "Step 7: Creating CORS configuration..."
CORS_CONFIG="$APACHE_CONF_DIR/gemacrypt-cors.conf"
if [ -f "$CORS_CONFIG" ]; then
    echo "✓ CORS configuration already exists"
else
    mkdir -p "$APACHE_CONF_DIR"
    cat > "$CORS_CONFIG" << 'EOF'
# CORS Configuration for GemaCrypt
<IfModule mod_headers.c>
    Header always set Access-Control-Allow-Origin "*"
    Header always set Access-Control-Allow-Methods "GET, POST, OPTIONS"
    Header always set Access-Control-Allow-Headers "Content-Type"
</IfModule>
EOF
    echo "✓ CORS configuration created"
fi

# Enable the CORS configuration (Debian/Ubuntu only)
if [[ "$OS" == "debian" || "$OS" == "ubuntu" ]]; then
    a2enconf gemacrypt-cors >/dev/null 2>&1
fi
echo ""

# Restart services
echo "Step 8: Restarting services..."
manage_service restart $APACHE_SERVICE
if [ $? -eq 0 ]; then
    echo "✓ Apache restarted successfully"
else
    echo "✗ Failed to restart Apache"
fi

manage_service restart $MYSQL_SERVICE
if [ $? -eq 0 ]; then
    echo "✓ MySQL restarted successfully"
else
    echo "✗ Failed to restart MySQL"
fi
echo ""

# Clone GemaCrypt repository
echo "Step 9: Downloading GemaCrypt from GitHub..."
GEMACRYPT_DIR="$WEB_ROOT/gemacrypt"

if [ -d "$GEMACRYPT_DIR" ]; then
    echo "GemaCrypt directory already exists at $GEMACRYPT_DIR"
    echo "→ Skipping GemaCrypt download"
    SKIP_CLONE=true
else
    echo "Cloning GemaCrypt repository..."
    cd "$WEB_ROOT"
    git clone https://github.com/bumpper/GemaCrypt.git gemacrypt
    if [ $? -eq 0 ]; then
        echo "✓ GemaCrypt repository cloned successfully"
        
        # Set proper permissions
        chown -R $WEB_USER:$WEB_GROUP "$GEMACRYPT_DIR"
        chmod -R 755 "$GEMACRYPT_DIR"
        echo "✓ Permissions set for GemaCrypt directory"
    else
        echo "✗ Failed to clone GemaCrypt repository"
        exit 1
    fi
fi
echo ""

# Domain and email configuration
echo "Step 10: Domain and email configuration..."
if [ -d "$GEMACRYPT_DIR" ]; then
    read -p "Enter your domain name (e.g., yourdomain.com): " DOMAIN_NAME
    
    if [ -n "$DOMAIN_NAME" ]; then
        echo "Replacing radius.center with $DOMAIN_NAME in configuration files..."
        
        # Files to update for domain
        FILES_TO_UPDATE=("insert.php" "app1.php" "app2.php")
        
        for file in "${FILES_TO_UPDATE[@]}"; do
            if [ -f "$GEMACRYPT_DIR/$file" ]; then
                # Replace radius.center with the new domain
                sed -i.tmp "s/radius\.center/$DOMAIN_NAME/g" "$GEMACRYPT_DIR/$file" && rm "$GEMACRYPT_DIR/$file.tmp"
                
                if [ $? -eq 0 ]; then
                    echo "✓ Updated $file with domain"
                else
                    echo "✗ Failed to update $file with domain"
                fi
            else
                echo "⚠ Warning: $file not found in GemaCrypt directory"
            fi
        done
        
        # Handle README.html separately (no backup file creation)
        if [ -f "$GEMACRYPT_DIR/README.html" ]; then
            # Replace radius.center with the new domain in README.html without creating backup
            sed -i "s/radius\.center/$DOMAIN_NAME/g" "$GEMACRYPT_DIR/README.html"
            
            if [ $? -eq 0 ]; then
                echo "✓ Updated README.html with domain"
            else
                echo "✗ Failed to update README.html with domain"
            fi
        else
            echo "⚠ Warning: README.html not found in GemaCrypt directory"
        fi
        
        echo "✓ Domain configuration completed"
    else
        echo "⚠ No domain name provided, skipping domain replacement"
    fi
    
    # Email configuration
    read -p "Enter your web admin email address: " ADMIN_EMAIL
    
    if [ -n "$ADMIN_EMAIL" ]; then
        echo "Replacing radius1thousand@gmail.com with $ADMIN_EMAIL in insert.php..."
        
        if [ -f "$GEMACRYPT_DIR/insert.php" ]; then
            # Replace email address
            sed -i.tmp "s/radius1thousand@gmail\.com/$ADMIN_EMAIL/g" "$GEMACRYPT_DIR/insert.php" && rm "$GEMACRYPT_DIR/insert.php.tmp"
            
            if [ $? -eq 0 ]; then
                echo "✓ Updated insert.php with admin email"
            else
                echo "✗ Failed to update insert.php with admin email"
            fi
        else
            echo "⚠ Warning: insert.php not found in GemaCrypt directory"
        fi
    else
        echo "⚠ No admin email provided, skipping email replacement"
    fi
else
    echo "⚠ GemaCrypt directory not found, skipping domain and email configuration"
fi
echo ""

# Database setup
echo "Step 11: Database setup..."
echo ""
echo "Choose database setup option:"
echo "1) Create a new empty personal database (gematriaDB)"
echo "2) Import existing database from https://radius.center/gemacrypt/files/gematriaDB.sql"
echo ""
read -p "Enter your choice (1 or 2): " DB_CHOICE

# Generate random 16-character password for DBuser (same for both options)
DB_PASSWORD=$(openssl rand -base64 16 | tr -d "=+/" | cut -c1-16)

# Create database user (same for both options)
echo "Creating database user 'DBuser'..."
mysql -u root << EOF
CREATE DATABASE IF NOT EXISTS gematriaDB;
CREATE USER IF NOT EXISTS 'DBuser'@'localhost' IDENTIFIED BY '$DB_PASSWORD';
GRANT ALL PRIVILEGES ON gematriaDB.* TO 'DBuser'@'localhost';
FLUSH PRIVILEGES;
EOF

if [ $? -eq 0 ]; then
    echo "✓ Database 'gematriaDB' created successfully"
    echo "✓ User 'DBuser' created with password: $DB_PASSWORD"
    
    # Handle database content based on user choice
    if [ "$DB_CHOICE" = "2" ]; then
        echo "Downloading and importing database from https://radius.center/gemacrypt/files/gematriaDB.sql..."
        
        # Try to download the SQL file using wget first, then curl as fallback
        if command -v wget >/dev/null 2>&1; then
            wget -O /tmp/gematriaDB.sql https://radius.center/gemacrypt/files/gematriaDB.sql
            DOWNLOAD_SUCCESS=$?
        elif command -v curl >/dev/null 2>&1; then
            curl -o /tmp/gematriaDB.sql https://radius.center/gemacrypt/files/gematriaDB.sql
            DOWNLOAD_SUCCESS=$?
        else
            echo "✗ Neither wget nor curl found. Cannot download database file."
            echo "⚠ Please install wget or curl and try again, or choose option 1 for empty database."
            DOWNLOAD_SUCCESS=1
        fi
        
        if [ $DOWNLOAD_SUCCESS -eq 0 ]; then
            echo "✓ Database file downloaded successfully"
            echo "Importing database..."
            
            # Import the SQL file into the database
            mysql -u root gematriaDB < /tmp/gematriaDB.sql
            
            if [ $? -eq 0 ]; then
                echo "✓ Database imported successfully"
                # Clean up temporary file
                rm -f /tmp/gematriaDB.sql
            else
                echo "✗ Failed to import database"
                echo "⚠ Database 'gematriaDB' was created but is empty"
                # Clean up temporary file even on failure
                rm -f /tmp/gematriaDB.sql
            fi
        else
            echo "✗ Failed to download database file"
            echo "⚠ Database 'gematriaDB' was created but is empty"
        fi
    else
        echo "✓ Empty database 'gematriaDB' created successfully"
    fi
    
    # Update insert.php with the generated password (same for both options)
    if [ -f "$GEMACRYPT_DIR/insert.php" ]; then
        # Replace the password variable in insert.php
        sed -i.tmp "s/\$password = \".*\";/\$password = \"$DB_PASSWORD\";/g" "$GEMACRYPT_DIR/insert.php" && rm "$GEMACRYPT_DIR/insert.php.tmp"
        
        if [ $? -eq 0 ]; then
            echo "✓ Updated insert.php with database password"
        else
            echo "✗ Failed to update insert.php with database password"
        fi
    else
        echo "⚠ Warning: insert.php not found for password update"
    fi
else
    echo "✗ Failed to create database or user"
    echo "⚠ You may need to set up MySQL root password first"
fi
echo ""

# Secure MySQL installation prompt
echo "Step 12: MySQL Security Setup"
echo "It is recommended to run mysql_secure_installation to secure your MySQL installation."
echo "This will:"
echo "- Set root password"
echo "- Remove anonymous users"
echo "- Disable remote root login"
echo "- Remove test database"
echo ""
read -p "Would you like to run mysql_secure_installation now? (y/n): " -n 1 -r
echo ""
if [[ $REPLY =~ ^[Yy]$ ]]; then
    mysql_secure_installation
fi
echo ""

# Display installation summary
echo "=========================================="
echo "Installation Summary"
echo "=========================================="
echo "Operating System: $OS"
echo "Web Root: $WEB_ROOT"
echo "✓ MySQL server and client"
echo "✓ PHP MySQL extensions"
echo "✓ Additional PHP extensions"
echo "✓ Apache modules enabled (headers, rewrite)"
echo "✓ CORS configuration created"
echo "✓ Services restarted"
if [ "$SKIP_CLONE" != true ]; then
    echo "✓ GemaCrypt application deployed to $GEMACRYPT_DIR"
    if [ -n "$DOMAIN_NAME" ]; then
        echo "✓ Domain configuration updated to $DOMAIN_NAME"
    fi
    if [ -n "$ADMIN_EMAIL" ]; then
        echo "✓ Admin email configuration updated to $ADMIN_EMAIL"
    fi
    if [ -n "$DB_PASSWORD" ]; then
        echo "✓ Database 'gematriaDB' created with user 'DBuser'"
        echo "✓ Database password configured in insert.php"
    fi
fi
echo ""

echo "Next Steps:"
echo "1. Import any existing gematria data into the gematriaDB database"
if [ -d "$GEMACRYPT_DIR" ]; then
    echo "2. Access your GemaCrypt application at: http://$DOMAIN_NAME/gemacrypt/"
    echo "3. Test both app1.php and app2.php functionality"
else
    echo "2. Manually deploy GemaCrypt files if automatic deployment was skipped"
fi
echo ""

echo "Database Information:"
if [ -n "$DB_PASSWORD" ]; then
    echo "- Database: gematriaDB"
    echo "- Username: DBuser"
    echo "- Password: $DB_PASSWORD"
    echo "- Host: localhost"
fi
echo ""

echo "Optional Configuration:"
echo "- Consider setting up SSL certificates for HTTPS"
echo "- Configure firewall rules if needed"
echo ""

echo "Installation completed successfully!"
echo "=========================================="
