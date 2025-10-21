@echo off
setlocal enabledelayedexpansion
where git >nul 2>nul || (echo Git not found. Install: https://git-scm.com/downloads & exit /b 1)
where git-lfs >nul 2>nul || (echo Git LFS not found. Install: https://git-lfs.com/ & exit /b 1)
git lfs install
if not exist .git (git init)
git add .gitattributes
git add .
git commit -m "Initial commit: Mendrix Consultancy premium FSE theme (+demo assets)" || echo Skipping commit if no changes
set /p REMOTE=Enter your GitHub HTTPS repo URL (e.g., https://github.com/<you>/mendrix-consultancy-theme.git):
git branch -M main
git remote remove origin 2>nul
git remote add origin "%REMOTE%"
git push -u origin main
echo Done. Pushed with Git LFS.
