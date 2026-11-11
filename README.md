# Furaha Adventures Kenya - Phase 4 (responsive, accessibility and language-picker cleanup)

Built on the Phase 3 four-language archive. Site files are in `p/` (same structure as before).

## Install (cPanel)
1. Back up the live site in cPanel first.
2. Extract this ZIP. Upload the CONTENTS of `p/` into the folder that serves the domain (usually `public_html`). Do not create `public_html/p/`.
3. Keep the existing hosting mail setup and `.htaccess`. No database changes are required.
4. Test on staging first: homepage form, email delivery, WhatsApp links, language switching, mobile menu.

## Local test
`cd p && php -S localhost:8000`, then open http://localhost:8000/.

## What changed
Only `css/style.css` (new rules appended at the end), `js/main.js` (two small blocks appended), and the 22 public PHP pages (flag emoji removed from the language list; `loading="lazy" decoding="async"` added to below-the-fold images). No PHP code block was altered. See CHANGE_REPORT.md and TEST_REPORT.md.

## Still needs live testing
PHP execution and `mail()` delivery, form submission and anti-spam check, admin area, the Marafa server-rendered page (`escursioni/marafa.php`), real fonts/icons from the CDNs, real-device touch behaviour.
