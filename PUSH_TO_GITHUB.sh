#!/usr/bin/env bash
set -e
if ! command -v git >/dev/null 2>&1; then
  echo "Git not found. Install: https://git-scm.com/downloads"; exit 1
fi
if ! command -v git-lfs >/dev/null 2>&1; then
  echo "Git LFS not found. Install: https://git-lfs.com/"; exit 1
fi
git lfs install
[ -d .git ] || git init
# Ensure .gitattributes exists (generated earlier)
git add .gitattributes || true
git add .
git commit -m "Initial commit: Mendrix Consultancy premium FSE theme (+demo assets)" || true
read -p "Enter your GitHub HTTPS repo URL (e.g., https://github.com/<you>/mendrix-consultancy-theme.git): " REMOTE
git branch -M main
git remote remove origin 2>/dev/null || true
git remote add origin "$REMOTE"
git push -u origin main
echo "Done. Pushed with Git LFS."
