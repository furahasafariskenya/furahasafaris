# Furaha Adventures Kenya - Phase 5 (single SVG icon system, alignment and responsive audit)

Built on the Phase 4 four-language archive. Site files are in `p/` (same structure as before).

## Install (cPanel)
1. Back up the live site in cPanel first.
2. Extract this ZIP. Upload the CONTENTS of `p/` into the folder that serves the domain (usually `public_html`). Do not create `public_html/p/`.
3. Keep the existing hosting mail setup and `.htaccess`. No database changes are required.
4. Test on staging first: homepage form, email delivery, WhatsApp links, language switching, mobile menu.

## Local test
`cd p && php -S localhost:8000`, then open http://localhost:8000/.

Before uploading, run `./preflight.sh` from the project root. It fails on unresolved merge-conflict markers, a page that does not load the icon sprite, or a PHP syntax error (requires `php` on PATH).

## What changed in Phase 5
- **One icon system for the whole site.** `p/includes/icons.php` is a single inline SVG sprite (41 symbols, 24x24 grid, 2px stroke, `currentColor`) required just after `<body>` on all 23 pages. Every icon is now `<svg class="icon"><use href="#i-name"></use></svg>`.
- **All emoji interface icons removed** (55 of them): About traits, Other Services, excursion highlight tiles, admin sidebar/toolbar, language-picker glyph, mobile-menu close, nav chevrons, success tick and review stars.
- **All Font Awesome icons removed** (225 of them: WhatsApp, check-circle, phone, envelope, map-marker, paper-plane, Facebook, Instagram) together with the Font Awesome CDN stylesheet on all 21 pages that loaded it. No icon font or icon CDN is needed any more, so icons no longer depend on a third-party host.
- **Authentic brand marks** for WhatsApp, Facebook and Instagram in the same sprite; social links keep their existing URLs and accessible labels, with 44px targets and AA-contrast colour.
- **Icon alignment/sizing in CSS** (appended to `css/style.css`): consistent base size, optical alignment with text, per-context sizes for nav, buttons, trait/service tiles, highlight tiles, contact rows, booking inclusions, review stars and the floating WhatsApp button.
- **Admin**: emoji icon map replaced with sprite ids; admin page now loads the sprite and has its own `.icon` rules.

Nothing else was touched: PHP logic, booking form, email code, WhatsApp destinations, all content, all four languages, page URLs, images, `.htaccess` and the logo are unchanged.

## Still needs live testing
PHP execution and `mail()` delivery, form submission and anti-spam check, admin area (password, upload, image swap), real fonts from the Google Fonts CDN, real-device touch behaviour. See TEST_REPORT.md for exactly what was and was not verified.
