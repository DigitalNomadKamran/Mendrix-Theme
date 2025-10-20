# Restoring and Pushing Mendrix Consultancy Assets

The premium Mendrix Consultancy theme already exists in full on disk, including images, demo packages, translations, and the ZIP installer. Follow the steps below to restore those binaries to Git tracking and publish them from your machine with Git LFS.

1. **Download the complete project folder** (this repository) and/or the distributable ZIP located at the paths printed in the task summary.
2. Open a terminal (macOS/Linux/Git Bash) or Command Prompt/PowerShell (Windows) inside the project root.
3. Run the helper script for your platform:
   - macOS/Linux/Git Bash: `./PUSH_TO_GITHUB.sh`
   - Windows: `PUSH_TO_GITHUB.bat`
4. When prompted, provide your GitHub HTTPS repository URL (for example `https://github.com/<you>/mendrix-consultancy-theme.git`).
5. The script will ensure Git LFS is installed, initialize the repository if needed, add every file (including binaries), commit with the original message, and push the project to `main` using Git LFS tracking.

Refer to `assets-manifest.json` for a complete list of binary assets that remain on disk but are intentionally ignored in the text-only pull request.
