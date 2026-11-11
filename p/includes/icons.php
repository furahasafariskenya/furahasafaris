<?php
/**
 * Furaha Adventures Kenya - interface icon sprite.
 *
 * One consistent icon system for the whole site: a single inline SVG sprite
 * referenced with <svg class="icon"><use href="#i-name"></use></svg>.
 *
 * - UI icons: 24x24 viewBox, 2px stroke, round caps/joins, colour from the
 *   surrounding text (currentColor), so they stay sharp at any size and
 *   inherit hover/focus colours.
 * - Brand icons (WhatsApp, Facebook, Instagram): authentic filled/outlined
 *   platform marks in the same sprite.
 *
 * No external icon font or CDN is required.
 */
if (!defined('FURAHA_ICONS')) {
    define('FURAHA_ICONS', true);
?>
<svg xmlns="http://www.w3.org/2000/svg" class="icon-sprite" aria-hidden="true" focusable="false" style="position:absolute;width:0;height:0;overflow:hidden">
  <defs>
    <!-- ============ UI ICONS (stroke) ============ -->
    <symbol id="i-chevron-down" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></symbol>
    <symbol id="i-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></symbol>
    <symbol id="i-globe" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3c2.5 2.4 3.8 5.6 3.8 9s-1.3 6.6-3.8 9c-2.5-2.4-3.8-5.6-3.8-9S9.5 5.4 12 3z"/></symbol>
    <symbol id="i-phone" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 1.1 4.2 2 2 0 0 1 3.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L7.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7A2 2 0 0 1 21 16.9z"/></symbol>
    <symbol id="i-mail" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3.5 7 8.5 6 8.5-6"/></symbol>
    <symbol id="i-map-pin" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10.5c0 5.6-8 11.5-8 11.5s-8-5.9-8-11.5a8 8 0 0 1 16 0z"/><circle cx="12" cy="10.5" r="3"/></symbol>
    <symbol id="i-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></symbol>
    <symbol id="i-check-circle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m8.3 12.2 2.6 2.6 5-5.2"/></symbol>
    <symbol id="i-send" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 3 10.5 13.5"/><path d="M21 3l-6.5 18-4-8.5L2 8.5z"/></symbol>
    <symbol id="i-compass" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m15.8 8.2-2.2 5.4-5.4 2.2 2.2-5.4z"/></symbol>
    <symbol id="i-tag" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12.6 2.6A2 2 0 0 0 11.2 2H4a2 2 0 0 0-2 2v7.2a2 2 0 0 0 .6 1.4l8.7 8.7a2.4 2.4 0 0 0 3.4 0l6.6-6.6a2.4 2.4 0 0 0 0-3.4z"/><circle cx="7.5" cy="7.5" r="1.4"/></symbol>
    <symbol id="i-languages" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 5h9"/><path d="M7.5 3v2"/><path d="M10.5 5c0 4-3.5 7-7.5 8"/><path d="M5.5 9.5c1 2 3 3.5 5 4.2"/><path d="m13 21 4-10 4 10"/><path d="M14.4 17h5.2"/></symbol>
    <symbol id="i-shield-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21.5s7.5-3.6 7.5-9.5V5.4L12 2.5 4.5 5.4V12c0 5.9 7.5 9.5 7.5 9.5z"/><path d="m9 11.8 2.2 2.2 4-4.2"/></symbol>
    <symbol id="i-plane" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></symbol>
    <symbol id="i-bed" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 18V7"/><path d="M2 12h16a4 4 0 0 1 4 4v2"/><path d="M22 18H2"/><circle cx="7" cy="9" r="2"/></symbol>
    <symbol id="i-home" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10.5 9-7.5 9 7.5V20a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></symbol>
    <symbol id="i-fish" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.5 12c-2.6 3.6-5.6 5.2-9 5.2-3.2 0-6-2.1-7.5-5.2C5.5 8.9 8.3 6.8 11.5 6.8c3.4 0 6.4 1.6 9 5.2z"/><path d="m20.5 12 2.5-3.5v7z"/><circle cx="7.6" cy="10.6" r=".9" fill="currentColor" stroke="none"/></symbol>
    <symbol id="i-sailboat" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.5V17"/><path d="M12 2.5 6 17h6z"/><path d="M13.5 6.5 18 17h-4.5z"/><path d="M2.5 19.5h19l-2.5 3H5z"/></symbol>
    <symbol id="i-waves" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 1.3 0 1.9-.5 2.5-1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 1.3 0 1.9-.5 2.5-1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 1.3 0 1.9-.5 2.5-1"/></symbol>
    <symbol id="i-shell" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a9 9 0 0 1 9 9H3a9 9 0 0 1 9-9z"/><path d="M12 3v9"/><path d="M8.5 4.2 10 12"/><path d="M15.5 4.2 14 12"/><path d="M3 12h18a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></symbol>
    <symbol id="i-utensils" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2v20"/><path d="M2.5 2v5a3.5 3.5 0 0 0 7 0V2"/><path d="m17 2-2.5 9h5z"/><path d="M17 11v11"/></symbol>
    <symbol id="i-clock" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5.3l3.4 2"/></symbol>
    <symbol id="i-camera" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 8h3l1.6-2.4h6.8L17 8h3a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/><circle cx="12" cy="13" r="3.6"/></symbol>
    <symbol id="i-route" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="19" r="2.5"/><circle cx="18" cy="5" r="2.5"/><path d="M8.5 19H13a3 3 0 0 0 3-3V8.5"/></symbol>
    <symbol id="i-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></symbol>
    <symbol id="i-mountain" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m2.5 20 6.5-13 4.2 8.4L16 11l5.5 9z"/></symbol>
    <symbol id="i-tree" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 6 10h2.5L4.5 16h15L15.5 10H18z"/><path d="M12 16v6"/></symbol>
    <symbol id="i-leaf" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 3C11 3 4.5 9.5 4.5 19.5 14.5 19.5 21 13 21 3z"/><path d="M4.5 19.5 15 9"/></symbol>
    <symbol id="i-umbrella" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a9 9 0 0 1 9 9H3a9 9 0 0 1 9-9z"/><path d="M12 12v6.5a2 2 0 0 0 4 0"/></symbol>
    <symbol id="i-landmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V10"/><path d="M9.5 21V10"/><path d="M14.5 21V10"/><path d="M19 21V10"/><path d="m12 3 9 5H3z"/></symbol>
    <symbol id="i-anchor" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="2.5"/><path d="M12 7.5V21"/><path d="M8.5 11h7"/><path d="M4 15a8 8 0 0 0 16 0"/></symbol>
    <symbol id="i-palette" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a9 9 0 1 0 0 18c1.4 0 2-1 2-2s-.6-2 .6-2H16a4 4 0 0 0 4-4c0-5-3.6-10-8-10z"/><circle cx="8" cy="9.5" r="1.1"/><circle cx="12" cy="7" r="1.1"/><circle cx="16" cy="9.5" r="1.1"/></symbol>
    <symbol id="i-search" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-4.3-4.3"/></symbol>
    <symbol id="i-star" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="m12 3 2.9 5.8 6.4.9-4.6 4.5 1.1 6.3L12 17.6 6.2 20.5l1.1-6.3L2.9 9.7l6.4-.9z"/></symbol>
    <symbol id="i-paw" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="7" cy="7" r="1.9"/><circle cx="12" cy="5.5" r="1.9"/><circle cx="17" cy="7" r="1.9"/><path d="M12 10c-3 0-5.5 2.1-5.5 4.6 0 3 2.6 5.4 5.5 5.4s5.5-2.4 5.5-5.4C17.5 12.1 15 10 12 10z"/></symbol>
    <symbol id="i-upload" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 16V4"/><path d="m7 9 5-5 5 5"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/></symbol>
    <symbol id="i-external-link" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3h7v7"/><path d="M21 3l-9 9"/><path d="M18 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h5"/></symbol>
    <symbol id="i-pointer" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m4 3 6.6 17.2 2.2-6.4 6.4-2.2z"/></symbol>

    <!-- ============ BRAND ICONS ============ -->
    <symbol id="i-whatsapp" viewBox="0 0 32 32" fill="currentColor" stroke="none"><path d="M16 0C7.164 0 0 7.164 0 16c0 2.82.737 5.47 2.027 7.773L0 32l8.418-2.004A15.93 15.93 0 0016 32c8.836 0 16-7.164 16-16S24.836 0 16 0zm8.227 22.773c-.344.965-2.004 1.844-2.762 1.965-.715.113-1.617.16-2.605-.164-.601-.195-1.375-.453-2.364-.887-4.164-1.8-6.883-6.004-7.094-6.285-.211-.281-1.723-2.289-1.723-4.367S8.86 10.5 9.375 9.984c.453-.453.965-.566 1.289-.566.32 0 .641.004.922.016.296.012.695-.113.984.75.3.879 1.02 3.035 1.11 3.258.09.219.148.477.016.765-.137.289-.203.469-.406.719-.203.25-.43.558-.609.75-.203.203-.414.422-.176.828.238.406 1.055 1.742 2.266 2.82 1.555 1.386 2.867 1.816 3.27 2.02.406.203.644.172.882-.102.239-.27 1.02-1.188 1.293-1.594.269-.406.539-.34.91-.203.375.133 2.386 1.126 2.793 1.332.406.203.676.301.777.47.098.167.098.965-.246 1.926z"/></symbol>
    <symbol id="i-facebook" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M13.4 21.9v-8.2h2.8l.42-3.2h-3.22V8.46c0-.93.26-1.56 1.6-1.56h1.72V4.03c-.3-.04-1.32-.13-2.5-.13-2.48 0-4.18 1.51-4.18 4.29v2.4H7.2v3.2h2.84v8.11a10 10 0 0 0 3.36 0z"/></symbol>
    <symbol id="i-instagram" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2.6" y="2.6" width="18.8" height="18.8" rx="5.4"/><circle cx="12" cy="12" r="4.5"/><circle cx="17.2" cy="6.8" r="1.2" fill="currentColor" stroke="none"/></symbol>
  </defs>
</svg>
<?php
}
