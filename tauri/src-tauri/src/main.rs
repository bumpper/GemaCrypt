#![cfg_attr(not(debug_assertions), windows_subsystem = "windows")]

use std::process::{Child, Command};
use std::path::{Path, PathBuf};
use anyhow::Context;
use tauri::{Manager, Emitter};

fn find_bundled_php() -> Option<PathBuf> {
  // Look next to the running executable for a `php-win/php.exe` bundle
  if let Ok(exe) = std::env::current_exe() {
    if let Some(dir) = exe.parent() {
      let candidate = dir.join("php-win").join("php.exe");
      if candidate.exists() {
        return Some(candidate);
      }
      // Also check resources folder
      let candidate2 = dir.join("resources").join("php-win").join("php.exe");
      if candidate2.exists() {
        return Some(candidate2);
      }
    }
  }
  None
}

fn spawn_php_server(project_dir: &Path) -> anyhow::Result<Child> {
  let php_cmd = if let Some(p) = find_bundled_php() {
    p
  } else {
    // fallback to system php
    PathBuf::from("php")
  };

  let mut cmd = Command::new(php_cmd);
  cmd.arg("-S").arg("127.0.0.1:8000").arg("-t").arg(project_dir);
  let child = cmd.spawn().context("failed to spawn php process; ensure php is installed and on PATH or bundled in php-win")?;
  Ok(child)
}

fn main() {
  let mut maybe_php: Option<Child> = None;

  #[cfg(debug_assertions)]
  {
    let project_dir = Path::new(r"F:\Daniel\My Web Sites\radius.center\gemacrypt");
    if project_dir.exists() {
      match spawn_php_server(project_dir) {
        Ok(child) => {
          println!("Spawned PHP dev server (pid={})", child.id());
          maybe_php = Some(child);
        }
        Err(e) => {
          eprintln!("Could not start PHP dev server: {}", e);
        }
      }
    } else {
      eprintln!("Project dir not found: {}", project_dir.display());
    }
  }

  let php_available = which::which("php").is_ok();

  let builder = tauri::Builder::default().setup(move |app| {
    if !php_available {
      if let Some(w) = app.get_webview_window("main") {
        // Emit a frontend event so the web UI can show a banner/modal instead of running eval
        let _ = w.emit("php-missing", true);
      }
    }
    Ok(())
  });

  let result = builder.run(tauri::generate_context!());

  if let Some(mut child) = maybe_php {
    let _ = child.kill();
    let _ = child.wait();
  }

  result.expect("error while running tauri application");
}

