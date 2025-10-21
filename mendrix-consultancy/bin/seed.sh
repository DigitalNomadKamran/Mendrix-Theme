#!/usr/bin/env bash
# Seed script for Mendrix Consultancy theme demo content using WP-CLI.
# Usage: ./bin/seed.sh

set -euo pipefail

if ! command -v wp >/dev/null 2>&1; then
  echo "wp (WP-CLI) is required to run this script." >&2
  exit 1
fi

wp post create --post_type=page --post_title='Home' --post_name=home --post_status=publish --post_content='<!-- wp:pattern {"slug":"mendrix-consultancy/hero-cover"} /--><!-- wp:pattern {"slug":"mendrix-consultancy/services-grid"} /--><!-- wp:pattern {"slug":"mendrix-consultancy/process-steps"} /--><!-- wp:pattern {"slug":"mendrix-consultancy/stats-row"} /--><!-- wp:pattern {"slug":"mendrix-consultancy/testimonials-grid"} /--><!-- wp:pattern {"slug":"mendrix-consultancy/logo-bar"} /--><!-- wp:pattern {"slug":"mendrix-consultancy/faq-group"} /--><!-- wp:pattern {"slug":"mendrix-consultancy/cta-banner"} /-->' --porcelain | read HOME_ID

wp option update show_on_front page
wp option update page_on_front "$HOME_ID"

# Additional pages can be created in a similar fashion if desired.

echo "Seed complete."
