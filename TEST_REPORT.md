# Test report - Phase 4

Method: headless Chromium (Playwright), pages rendered from the project with PHP blocks stripped (PHP is not installed in the build environment), served locally, external CDNs blocked.

## Responsive (22 pages x 15 viewports = 330 checks)
Pages: homepage, 10 safaris, 11 excursion files (incl. 2 duplicates).
Viewports: 320x568, 360x800, 375x812, 390x844, 414x896, 430x932, 844x390, 600x960, 768x1024, 1024x768, 1280x720, 1366x768, 1440x900, 1600x900, 1920x1080.
Result after fixes: no horizontal overflow on any page at any size; no JS console/page errors; no repeated "xxxx" text in rendered output.
Before fixes: homepage overflowed (419px) at 320-414px; desktop nav overflowed at 844px.

## Functional (37 checks, 0 failed)
Navigation fits without overlap in EN/IT/FR/DE at 1141, 1180, 1280, 1366px; burger opens/closes; scroll locked; menu closes after link/language choice; flags render (24x16); picker opens by mouse and keyboard (Arrows, Enter, Esc); switching to FR/DE sets <html lang> and button label; language persists on safari and excursion pages; logo 1:1 and circular; key controls >= 44px at 375px.

## Contrast
Automated check of rendered text colours on homepage, 3 other pages: all text on solid backgrounds passes AA. Text over photographs (hero overlay, excursion cards, call-to-action) cannot be measured automatically; checked visually only.

## NOT tested
- PHP syntax (no PHP available): only HTML attributes were edited; a script confirmed no <?php ... ?> block differs from the uploaded Phase 3 files. Please run `php -l` or load on staging.
- Form submission, mail() delivery, admin, marafa.php server rendering, WhatsApp opening, real phone/tablet devices, Safari/Firefox (Chromium only), CDN fonts/icons (blocked), tablets with touch dropdowns.

---

# Test report - Phase 5 (icon system)

Method: the real PHP templates were executed with PHP 8.3.14 CLI (static build, installed in this sandbox) running `php -S`, then every route was fetched with HTTP. A static audit parsed the sprite and every page and checked each `<use>` reference against the defined `<symbol>` ids.

## Results
- **PHP syntax:** `php -l` clean on all 23 PHP files (22 public + admin).
- **Routes:** all 22 public routes return HTTP 200 with no PHP warning, notice, deprecation, parse or fatal output; each response contains the complete 41-symbol sprite.
- **Icon references:** 452 `<use>` references across 23 files, 0 unresolved, 0 unused symbols, 0 pages missing the sprite include.
- **Leftovers:** 0 Font Awesome classes, 0 icon-font stylesheet links, 0 emoji characters and 0 emoji entities in source or in rendered HTML for the emoji set that was removed.
- **Admin:** renders with the sprite and no warnings when the sandbox's missing `GLOB_BRACE` constant is shimmed (see limitation below).
- **CSS:** `css/style.css` parses without errors from the new Phase 5 block (the single parser complaint is the pre-existing `@supports not (... or ...)` rule from Phase 4, which is valid CSS that css-tree's default grammar rejects).

## Browser measurement (headless Chromium, real layout engine)
Chromium was made runnable in this sandbox without root by fetching its system libraries as .deb archives and loading them from a private directory. Result: **22 public pages x 15 viewports = 330 layout checks**.
- **Horizontal overflow: 0px on all 330 checks** (320, 360, 375, 390, 414, 430, 600, 768, 844x390 landscape, 1024, 1280, 1366, 1440, 1600, 1920).
- **Console/page errors: 0.**
- **Icons:** every visible `.icon` paints (no zero-size icon, no unresolved symbol) at every viewport; the only unpainted ones are inside the deliberately hidden closed mobile menu and the hidden native `<select>` fallback.
- **Social icons:** identical size and identical baseline on every page and viewport.
- **Navigation:** desktop menu fits inside the bar and never overlaps the logo; the burger appears below 1140px, and no viewport leaves both hidden.
- **Languages:** switching the homepage to IT/FR/DE updates `<html lang>` and the document title and produces **0px overflow in every language**; hero and nav buttons stay 45-47px high, so translated labels do not break the layout.
- **Touch targets at 375px:** all buttons, selects, inputs and the new icon-only controls are >= 44px. Booking-panel phone/email links were raised from 17px to 44px. The only smaller targets left are inline links inside sentences (footer credit), which WCAG 2.5.8 exempts.
- Screenshots taken for visual review: `artifacts/phase5-desktop.png`, `artifacts/phase5-mobile.png`, `artifacts/phase5-excursion.png`. (Footer icons were checked by measurement rather than by screenshot: identical size and baseline at 390px on every page.)

## Still not verified (needs your hosting / devices)
- The admin page's `GLOB_BRACE` fatal on this static PHP build: that constant is missing from musl static builds but present on normal cPanel PHP, so it is an environment artefact, not a change in this phase. Confirm the admin still loads on your hosting.
- Real icon rendering/hover/focus states, Google Fonts CDN, form submission and `mail()`, WhatsApp handoff, real iOS/Android/Safari/Firefox behaviour.
