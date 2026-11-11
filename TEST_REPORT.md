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
