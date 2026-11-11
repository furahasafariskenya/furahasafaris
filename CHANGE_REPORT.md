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
