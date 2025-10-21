#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
THEME_DIR="$ROOT_DIR/mendrix-consultancy"
DIST_DIR="$ROOT_DIR/dist"
ZIP_NAME="mendrix-consultancy.zip"
ZIP_PATH="$DIST_DIR/$ZIP_NAME"

if [ ! -d "$THEME_DIR" ]; then
  echo "Error: Theme directory '$THEME_DIR' not found." >&2
  exit 1
fi

if [ ! -f "$THEME_DIR/style.css" ]; then
  echo "Error: style.css not found in theme directory. Ensure the theme is complete before packaging." >&2
  exit 1
fi

mkdir -p "$DIST_DIR"
rm -f "$ZIP_PATH"

(
  cd "$ROOT_DIR"
  zip -rq "$ZIP_PATH" "mendrix-consultancy" -x '*.DS_Store'
)

echo "Created package: $ZIP_PATH"
