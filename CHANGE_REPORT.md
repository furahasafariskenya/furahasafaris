# Change report - Phase 4

## Language selector
- Emoji flags removed (they were inside a native <select>, where images are impossible and Windows shows letters instead of flags).
- New accessible picker with inline SVG flags (EN, IT, FR, DE): button + listbox, 24x16 flags, 44px controls, keyboard support (Arrow keys, Home/End, Enter/Space, Esc, Tab), outside-click close, desktop dropdown and inline mobile list.
- The original <select> stays (hidden) so the existing language, cookie/localStorage, metadata and WhatsApp-text logic is unchanged.

## Navigation
- Glass bar (blur 12px, ivory 88%, border + soft shadow) with solid fallback when backdrop-filter is unsupported; dark readable links.
- Burger menu from 1140px down (the desktop menu overflowed at 844px landscape and would collide with the logo in German below ~1140px).
- Mobile menu: opaque, scrolls from the top (no clipped items), 44px tap targets, closes after any link or language choice; page scroll is locked while open.
- Logo kept circular (border-radius 50%, 1:1). Logo file untouched.
- Dropdowns also open on keyboard focus.

## Overflow
- Homepage booking section forced the page to 419px wide on phones (single grid column could not shrink). Fixed with minmax(0,1fr) on booking, safari and excursion layouts; buttons wrap.

## Contrast (WCAG 2.2 AA)
- Gold text (2.7-3.1:1) now uses --gold-ink #7D5A17 (5.3-6.3:1) on eyebrows, badges, stats, links, day labels, review text and footer titles.
- White on gold buttons/pills (3.1:1) now #8A6420 (5.35:1). White on WhatsApp green (2.6:1) now #0F7D3E (5.2:1).
- Muted grey text #68736B (4.3:1 on beige) now #5A645D (5.4:1).
- "Send an email" button on the call-to-action photo was dark text on a dark photo: now white.
- Mobile "Book" link and the desktop "Book" link had inline colours that failed over the nav/hero: fixed.

## Forms
- Fields 16px / 48px min height (prevents iOS zoom), visible 3:1 borders, placeholder 4.5:1, 3px focus ring, full-width submit on phones. Markup, PHP and endpoints untouched.

## Other
- Fluid heading sizes; focus-visible outlines; reduced-motion support; 44px footer/social/card-link targets; lazy-loading for below-the-fold images.

## Not changed (needs your decision)
- "xxxxxxxx" form text: not found in any PHP/JS/CSS file or in the rendered text of any page; could not be reproduced. If you still see it, tell me the page and the browser.
- Anti-spam check: the expected answer is sent in a hidden field and checked against itself, so bots can bypass it. Suggest storing it in the session (PHP change, needs live testing).
- Form error/success messages from PHP are in Italian only.
- Language SEO: other languages are applied in the browser, not as separate URLs (documented in PHASE3-README.txt).
- escursioni/marafa.php (old duplicate) and escursioni/sardegna-due.php (duplicate of safari-blu-2.php) kept.

---

# Change report - Phase 5 (icon system + alignment)

## One icon system, no emoji, no icon CDN
- New `p/includes/icons.php`: a single inline SVG sprite, 41 symbols. UI icons use a 24x24 viewBox, 2px stroke, round caps/joins and `currentColor`, so they inherit text colour, hover/focus states and sharpness at any size. WhatsApp, Facebook and Instagram use their authentic brand marks inside the same sprite.
- The sprite is required immediately after `<body>` on all 23 pages (22 public pages + admin), so it is always defined before the first `<use>`.
- Replaced 225 Font Awesome `<i>` elements across 21 pages: WhatsApp (87), check-circle (91), envelope (22), phone (20), map-marker (2), paper-plane (1), Facebook (1), Instagram (1).
- Removed the Font Awesome 6.5.0 CDN stylesheet from all 21 pages that loaded it. The site no longer needs an icon font; only Google Fonts and AOS remain external.
- Removed 55 emoji interface icons: 4 About traits (compass, tag, languages, shield-check), 4 Other Services (plane, bed, home, fish), 35 excursion highlight tiles (sailboat, fish, utensils, waves, landmark, anchor, palette, mountain, route, sun, camera, shell, leaf, clock, tree, paw, search, star, umbrella), 14 admin icons, the `◎` language glyph, the `&times;` close button, the `&#9660;` nav chevrons, the `&#10003;` success tick and 30 text stars in review ratings.
- Review ratings are now five SVG stars in a `role="img"` container labelled "5 out of 5 stars".
- The floating WhatsApp button (all 22 pages) now uses the sprite instead of its own private copy of the brand path.

## Alignment / sizing
- Appended a Phase 5 layer to `css/style.css` (nothing above it edited): shared `.icon` base (1em, `vertical-align`, `flex: none`, `pointer-events: none`), plus context sizes for nav links and chevrons, nav CTA, buttons, About trait tiles, service cards, excursion highlight tiles, booking-form contact icons, footer contact rows, booking inclusions, review stars, form success tick and the WhatsApp float.
- Icon-only controls keep their accessible names (`aria-label` on the social links, WhatsApp float, burger and mobile close) and the icons themselves are `aria-hidden` + `focusable="false"`, so screen readers announce the label once.
- Social marks moved to `--gold-ink` (5.3:1 on white) and keep 44px targets; `.footer-socials` wraps instead of overflowing on very narrow screens.
- `.review-stars` switched from letter-spacing on text to a flex row with 2px gaps, so rating width is identical in every language.
- Admin: emoji map converted to sprite ids, sprite + `.icon` rules added to its own stylesheet, page title/heading/toolbar icons all SVG.

## Deliberately unchanged
- Typographic arrows (`→`, `←`) inside translated link labels stay as text: the four-language catalog in `js/translations.js` is keyed on strings such as `Learn more →` and `← Back to Home`, so converting them to SVG would break FR/DE translation lookup.
- Safari/destination photography, the round logo and all decorative imagery are untouched.
- No PHP logic, form handler, mail code, WhatsApp URL, content string, page URL, image or `.htaccess` rule was changed.
