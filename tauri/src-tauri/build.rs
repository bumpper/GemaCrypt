fn main() {
  // Run tauri-build to generate the required context and assets.
  // tauri_build::build() returns (), and will panic on unrecoverable errors.
  tauri_build::build();
}
