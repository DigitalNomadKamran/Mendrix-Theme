#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
THEME_DIR="$ROOT_DIR/mendrix-consultancy"
DIST_DIR="$ROOT_DIR/dist"
DEFAULT_SLUG="mendrix-consultancy"
OUTPUT_SLUG="$DEFAULT_SLUG"

usage() {
  cat <<USAGE
Usage: ./build-zip.sh [--name <folder-name>]

Options:
  --name <folder-name>  Optional name for the folder inside the ZIP (defaults to '$DEFAULT_SLUG').
                        Useful when you need a branded archive name such as
                        'Mendrix-Theme-codex-build-mendrix-consultancy-wordpress-theme'.
USAGE
}

while [[ $# -gt 0 ]]; do
  case "$1" in
    --name)
      shift
      if [[ $# -eq 0 ]]; then
        echo "Error: --name requires a value." >&2
        usage
        exit 1
      fi
      OUTPUT_SLUG="$1"
      ;;
    -h|--help)
      usage
      exit 0
      ;;
    *)
      echo "Error: Unknown argument '$1'" >&2
      usage
      exit 1
      ;;
  esac
  shift
done

if [ ! -d "$THEME_DIR" ]; then
  echo "Error: Theme directory '$THEME_DIR' not found." >&2
  exit 1
fi

if [ ! -f "$THEME_DIR/style.css" ]; then
  echo "Error: style.css not found in theme directory. Ensure the theme is complete before packaging." >&2
  exit 1
fi

mkdir -p "$DIST_DIR"
ZIP_NAME="$OUTPUT_SLUG.zip"
ZIP_PATH="$DIST_DIR/$ZIP_NAME"
STAGING_DIR="$DIST_DIR/$OUTPUT_SLUG"

rm -f "$ZIP_PATH"
rm -rf "$STAGING_DIR"

rsync -a "$THEME_DIR/" "$STAGING_DIR/" --exclude='.DS_Store'

(
  cd "$DIST_DIR"
  zip -rq "$ZIP_NAME" "$OUTPUT_SLUG"
)

rm -rf "$STAGING_DIR"

echo "Created package: $ZIP_PATH"
