==============================================
GemaCrypt - Hebrew & Greek Gematria Calculator
==============================================

Thank you for downloading GemaCrypt! 

GemaCrypt is a powerful web application for exploring the hidden meanings in Hebrew and Greek texts through gematria calculations.  
With this app, you can decode Hebrew words to find their numerical values, discover words with matching gematria that are considered 
spiritual synonyms, and use various Hebrew encryption algorithms like AL-BaM, AT-BaSh, ACh-BI, AYiK-BeCheR, and others to uncover hidden 
meanings.  The application supports multiple gematria systems including Ragil, Katan, HaKlali, Kolel, HaKadmi, HaPerati, and Miluy, making 
it an essential tool for biblical research, Kabbalah study, and Hebrew cryptography.


=========================
Installation Instructions
=========================

This README provides step-by-step instructions for installing GemaCrypt on various web server operating systems.

## Installation Instructions


################### For Linux Systems (Debian, Ubuntu, CentOS, Red Hat) ###################

1. **Access your server via SSH:**
   ssh username@your-server-ip

2. **Download the installation script:**
   wget https://raw.githubusercontent.com/bumpper/GemaCrypt/main/install.sh
   *OR if you have the file locally, upload it to your server*

3. **Make the script executable:**
   chmod +x install.sh

4. **Run the installation script with sudo privileges:**
   sudo bash install.sh

5. **Follow the interactive prompts:**
   - Answer y/n for package updates
   - Enter your domain name when prompted
   - Enter your admin email address when prompted
   - Choose whether to run mysql_secure_installation


################### For macOS Systems ###################

1. **Install Homebrew (if not already installed):**
   /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

2. **Open Terminal application:**
   - Press Cmd + Space, type "Terminal", press Enter
   - OR go to Applications > Utilities > Terminal

3. **Download the installation script:**
   curl -O https://raw.githubusercontent.com/bumpper/GemaCrypt/main/install.sh

4. **Make the script executable:**
   chmod +x install.sh

5. **Run the installation script:**
   sudo bash install.sh


################### For FreeBSD Systems ###################

1. **Access your server console or SSH:**
   ssh username@your-server-ip

2. **Download the installation script:**
   fetch https://raw.githubusercontent.com/bumpper/GemaCrypt/main/install.sh

3. **Make the script executable:**
   chmod +x install.sh

4. **Run the installation script as root:**
   su -
   bash install.sh


################### For OpenBSD Systems ###################

1. **Access your server console or SSH:**
   ssh username@your-server-ip

2. **Download the installation script:**
   ftp https://raw.githubusercontent.com/bumpper/GemaCrypt/main/install.sh

3. **Make the script executable:**
   chmod +x install.sh

4. **Run the installation script as root:**
   doas bash install.sh


################### For Solaris Systems ###################

1. **Access your server console or SSH:**
   ssh username@your-server-ip

2. **Download the installation script:**
   wget https://raw.githubusercontent.com/bumpper/GemaCrypt/main/install.sh

3. **Make the script executable:**
   chmod +x install.sh

4. **Run the installation script with appropriate privileges:**
   pfexec bash install.sh


################### For Windows Systems ###################

**Note:** This script is designed for Unix-like systems. For Windows servers:

1. **Install XAMPP:**
   - Download from https://www.apachefriends.org/
   - Run the installer as Administrator
   - Start Apache and MySQL services

2. **Manual GemaCrypt setup:**
   - Download GemaCrypt from https://github.com/bumpper/GemaCrypt
   - Extract to C:\xampp\htdocs\gemacrypt\
   - Configure database connection in insert.php manually


## What the Script Does Automatically:

- Detects your operating system
- Installs all required dependencies (MySQL, PHP extensions, Apache modules)
- Downloads and deploys GemaCrypt application
- Configures domain and email settings
- Creates secure database with random password
- Sets up CORS support for proper functionality

## Required Dependencies:

The script will install these packages based on your operating system:

### Core Components:
- MySQL server and client
- PHP with MySQL extensions (mysql, mysqli, pdo, pdo-mysql)
- Apache web server with headers and rewrite modules
- Git (for downloading GemaCrypt)

### Additional PHP Extensions:
- php-curl (for external API calls)
- php-json (for JSON processing)
- php-mbstring (for multi-byte string handling)
- php-xml (for XML processing)
- php-zip (for file compression)
- php-gd (for image processing)
- php-fileinfo (for file type detection)
- php-openssl (for encryption/security)

### CORS Support:
- Apache headers module
- Apache rewrite module
- Custom CORS configuration for cross-origin requests

## After Installation:

Access your GemaCrypt application at: http://radius.center/gemacrypt/

### Application Components:
- **app1.php** - Main gematria calculator with Hebrew keyboard
- **app2.php** - Biblical text analyzer with multiple translations
- **insert.php** - Database operations (configured automatically)

### Database Information:
- Database: gematriaDB
- Username: DBuser
- Password: (randomly generated 16-character password)
- Host: localhost

## Troubleshooting:

### Common Issues:
1. **Permission denied:** Make sure to run with sudo/root privileges
2. **MySQL connection failed:** Run mysql_secure_installation to set root password
3. **Apache not starting:** Check for port conflicts (port 80/443)
4. **File not found errors:** Ensure proper file permissions on gemacrypt directory

### Manual Configuration:
If automatic configuration fails, you may need to manually:
- Edit PHP configuration files for upload limits
- Configure SSL certificates for HTTPS
- Set up firewall rules for web access
- Import existing gematria database data

## Support:

For issues or questions about GemaCrypt functionality, visit:
https://github.com/bumpper/GemaCrypt

For a better understanding of Gematria and Hebrew encryption please see the help at http://radius.center/gemacrypt/help.html

The installation script supports automatic deployment on all major web server operating systems with intelligent OS detection and appropriate package management.
