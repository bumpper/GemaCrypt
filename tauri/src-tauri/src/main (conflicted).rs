#![cfg_attr(not(debug_assertions), windows_subsystem = "windows")]

use std::process::{Child, Command};
use std::path::{Path, PathBuf};
use anyhow::Context;
use tauri::{Manager, Emitter};

/// Find bundled PHP runtime based on the current platform
fn find_bundled_php() -> Option<PathBuf> {
  // Look next to the running executable for platform-specific PHP bundle
  if let Ok(exe) = std::env::current_exe() {
    if let Some(dir) = exe.parent() {
      // Determine platform-specific PHP directory and executable name
      let (php_dir, php_exe) = if cfg!(target_os = "windows") {
        ("php-win", "php.exe")
      } else if cfg!(target_os = "macos") {
        ("php-mac", "php")
      } else if cfg!(target_os = "linux") {
        ("php-linux", "php")
      } else {
        ("php-runtime", "php")
      };

      // Check in the executable directory
      let candidate = dir.join(php_dir).join(php_exe);
      if candidate.exists() {
        return Some(candidate);
      }

      // Also check resources folder (common on macOS)
      let candidate2 = dir.join("resources").join(php_dir).join(php_exe);
      if candidate2.exists() {
        return Some(candidate2);
      }

      // Check in parent directory (for development)
      if let Some(parent) = dir.parent() {
        let candidate3 = parent.join(php_dir).join(php_exe);
        if candidate3.exists() {
          return Some(candidate3);
        }
      }
    }
  }
  None
}

/// Get the default PHP project directory based on platform and environment
fn get_php_project_dir() -> Option<PathBuf> {
  // First, check for environment variable
  if let Ok(path) = std::env::var("GEMACRYPT_PHP_PATH") {
    let project_path = PathBuf::from(path);
    if project_path.exists() {
      return Some(project_path);
    }
  }

  // Platform-specific default paths
  #[cfg(target_os = "windows")]
  {
    let default_path = Path::new(r"F:\Daniel\My Web Sites\radius.center\gemacrypt");
    if default_path.exists() {
      return Some(default_path.to_path_buf());
    }
  }

  #[cfg(target_os = "macos")]
  {
    if let Ok(home) = std::env::var("HOME") {
      let sites_path = Path::new(&home).join("Sites").join("gemacrypt");
      if sites_path.exists() {
        return Some(sites_path);
      }
    }
  }

  #[cfg(target_os = "linux")]
  {
    if let Ok(home) = std::env::var("HOME") {
      let www_path = Path::new(&home).join("www").join("gemacrypt");
      if www_path.exists() {
        return Some(www_path);
      }
      
      // Also try common web server paths
      let var_www = Path::new("/var/www/gemacrypt");
      if var_www.exists() {
        return Some(var_www.to_path_buf());
      }
    }
  }

  None
}

/// Spawn PHP built-in server
fn spawn_php_server(project_dir: &Path) -> anyhow::Result<Child> {
  // Try to find bundled PHP first, then fall back to system PHP
  let php_cmd = if let Some(bundled_php) = find_bundled_php() {
    println!("Using bundled PHP: {}", bundled_php.display());
    bundled_php
  } else {
    println!("Using system PHP");
    PathBuf::from("php")
  };

  let mut cmd = Command::new(&php_cmd);
  cmd.arg("-S")
     .arg("127.0.0.1:8000")
     .arg("-t")
     .arg(project_dir);

  let child = cmd.spawn().context(format!(
    "Failed to spawn PHP process. Ensure PHP is installed and on PATH, or bundle PHP in the appropriate directory.\nTried to use: {}",
    php_cmd.display()
  ))?;

  Ok(child)
}

fn main() {
  let mut maybe_php: Option<Child> = None;

  // In debug mode, try to start PHP server automatically
  #[cfg(debug_assertions)]
  {
    if let Some(project_dir) = get_php_project_dir() {
      println!("Found PHP project directory: {}", project_dir.display());
      match spawn_php_server(&project_dir) {
        Ok(child) => {
          println!("✓ Spawned PHP dev server (pid={})", child.id());
          println!("  Server running at: http://127.0.0.1:8000");
          maybe_php = Some(child);
        }
        Err(e) => {
          eprintln!("❌ Could not start PHP dev server: {}", e);
          eprintln!("\nTo fix this:");
          eprintln!("  1. Install PHP: https://www.php.net/downloads");
          eprintln!("  2. Add PHP to your system PATH");
          eprintln!("  3. Or set GEMACRYPT_PHP_PATH environment variable");
          eprintln!("     Example: export GEMACRYPT_PHP_PATH=/path/to/gemacrypt");
        }
      }
    } else {
      eprintln!("⚠️  PHP project directory not found.");
      eprintln!("\nPlease set the GEMACRYPT_PHP_PATH environment variable:");
      
      #[cfg(target_os = "windows")]
      eprintln!("  set GEMACRYPT_PHP_PATH=C:\\path\\to\\gemacrypt");
      
      #[cfg(target_os = "macos")]
      eprintln!("  export GEMACRYPT_PHP_PATH=~/Sites/gemacrypt");
      
      #[cfg(target_os = "linux")]
      eprintln!("  export GEMACRYPT_PHP_PATH=~/www/gemacrypt");
    }
  }

  // Check if PHP is available in the system
  let php_available = which::which("php").is_ok() || find_bundled_php().is_some();

  let builder = tauri::Builder::default()
    .plugin(tauri_plugin_log::Builder::default().build())
    .setup(move |app| {
      if !php_available {
        if let Some(w) = app.get_webview_window("main") {
          // Emit a frontend event so the web UI can show a warning
          let _ = w.emit("php-missing", true);
        }
      }
      Ok(())
    });

  let result = builder.run(tauri::generate_context!());

  // Clean up PHP server process on exit
  if let Some(mut child) = maybe_php {
    println!("\nShutting down PHP server...");
    let _ = child.kill();
    let _ = child.wait();
  }

  result.expect("error while running tauri application");
}
