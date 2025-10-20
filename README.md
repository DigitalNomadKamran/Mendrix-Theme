# Mendrix Consultancy WordPress Theme

Mendrix Consultancy is a premium Full Site Editing (FSE) WordPress theme tailored for Malaysian study visa, immigration, and business expansion consultants. It ships with 20+ bespoke block patterns, demo content, and one-click demo import support to deliver a polished onboarding experience.

## Features

- WordPress 6.5+ block theme compatible with full-site editing.
- Brand-ready design system with Inter and Playfair Display typography.
- 21 reusable block patterns including hero, services, pricing, testimonials, FAQs, timeline, slider, and contact layouts.
- Accessibility-conscious navigation with skip link, focus states, and WCAG AA color contrast.
- Local bundles of Google Fonts (via display=swap), lightweight AOS scroll animations, and custom Swiper slider.
- One Click Demo Import (OCDI) integration with bundled demo content (`/demo`).
- Optional WP-CLI seeding script for rapid local bootstrapping.
- Translations for `en_US`, `en_GB`, `ms_MY`, and `ar`.

## Getting Started

1. **Download the theme**
   - Build the distributable archive: `zip -r dist/mendrix-consultancy.zip mendrix-consultancy`
   - Upload `dist/mendrix-consultancy.zip` via **Appearance → Themes → Add New → Upload**.
2. **Activate** the “Mendrix Consultancy” theme.
3. **Install recommended plugins**
   - [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) for contact form blocks used in demo content.
   - [One Click Demo Import](https://wordpress.org/plugins/one-click-demo-import/).

## Demo Import Instructions

1. After activating the theme, install and activate the One Click Demo Import plugin.
2. Navigate to **Appearance → Import Demo Data**.
3. Select the bundled demo files automatically detected from the theme package (`/demo/content.xml`, `/demo/widgets.json`, `/demo/customizer.dat`).
4. Run the import. On completion the script will:
   - Assign “Primary Menu” and “Footer Menu”.
   - Set “Home” as the front page and “Blog” as the posts page.
   - Retain Contact Form 7 placeholders for quick form setup.

## Optional: WP-CLI Seeder

For local development you can seed the core homepage layout using:

```bash
chmod +x mendrix-consultancy/bin/seed.sh
./mendrix-consultancy/bin/seed.sh
```

Ensure WP-CLI is installed and configured to target your site.

## Assets

All theme imagery is bundled under `mendrix-consultancy/assets/images/` and includes optimized PNG placeholders for hero banners, CTAs, service icons, testimonial headshots, partner logos, team portraits, and blog cards.

## Development Notes

- Global styles and tokens are managed in `mendrix-consultancy/theme.json`.
- Navigation header and footer are stored in `parts/header.html` and `parts/footer.html`.
- Templates reside in `templates/`, while reusable block patterns live in `patterns/`.
- JavaScript enhancements:
  - `assets/js/aos.js` — lightweight scroll reveal implementation.
  - `assets/js/swiper.js` — minimal slider engine powering testimonial carousel patterns.
  - `assets/js/theme.js` — bootstraps animations and utilities.
- Stylesheets for the front-end/editor are in `styles/` with helper CSS under `assets/css/`.

## Licensing

The theme is released under the [GNU General Public License v2.0](LICENSE).
