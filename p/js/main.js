/* Furaha Adventures Kenya - main.js | Phase 3 multilingual implementation */
document.addEventListener('DOMContentLoaded', function () {
  var nav = document.querySelector('.site-nav');
  function onScroll() { if (nav) nav.classList.toggle('scrolled', window.scrollY > 60); }
  window.addEventListener('scroll', onScroll, { passive: true }); onScroll();

  var burger = document.querySelector('.nav-burger');
  var mobileNav = document.querySelector('.mobile-nav');
  var mobileClose = document.querySelector('.mobile-close, .close-btn');
  if (burger && mobileNav) burger.addEventListener('click', function () { mobileNav.classList.add('open'); document.body.style.overflow = 'hidden'; });
  if (mobileClose && mobileNav) mobileClose.addEventListener('click', function () { mobileNav.classList.remove('open'); document.body.style.overflow = ''; });

  var supportedLanguages = ['en', 'it', 'fr', 'de'];
  var names = { en: 'English', it: 'Italiano', fr: 'Français', de: 'Deutsch' };
  var catalog = window.FURAHA_TRANSLATIONS || {};
  var langNames = {
    'Home':['Home','Accueil','Startseite'], 'Chi Sono':['About','À propos','Über uns'],
    'Safari':['Safari','Safari','Safari'], 'Escursioni':['Excursions','Excursions','Ausflüge'],
    'Recensioni':['Reviews','Avis','Bewertungen'], 'Servizi':['Services','Services','Leistungen'],
    'Prenota':['Book','Réserver','Buchen'], 'Contatti':['Contact','Contact','Kontakt'],
    'Safari Blu':['Blue Safari','Safari bleu','Blaue Safari'], 'Safari Blu (Sardegna 2)':['Blue Safari (Sardinia 2)','Safari bleu (Sardegna 2)','Blaue Safari (Sardegna 2)'], 'Canyon di Marafa':['Marafa Canyon','Canyon de Marafa','Marafa-Canyon'],
    'Isola di Robinson':['Robinson Island','Île Robinson','Robinson-Insel'], 'Rovine di Gedi':['Gedi Ruins','Ruines de Gedi','Gedi-Ruinen'],
    'Foresta di Arabuko Sokoke':['Arabuko Sokoke Forest','Forêt d’Arabuko-Sokoke','Arabuko-Sokoke-Wald'], 'Che Shale':['Che Shale','Che Shale','Che Shale'],
    'Giro di Malindi':['Malindi Tour','Visite de Malindi','Malindi-Rundfahrt'], 'Crab Shack - Dabaso':['Crab Shack - Dabaso','Crab Shack - Dabaso','Crab Shack - Dabaso']
  };
  function clean(s) { return (s || '').replace(/&nbsp;/g, ' ').replace(/\s+/g, ' ').trim(); }
  function translateEnglish(value, lang) {
    var v = clean(value);
    if (lang === 'en') return value;
    if (lang === 'it') return null;
    var entry = catalog[v];
    if (entry && entry[lang]) return entry[lang];
    var label = langNames[v];
    if (label) return label[lang === 'fr' ? 1 : 2];
    return null;
  }
  function setCookie(name, value) {
    try { document.cookie = name + '=' + encodeURIComponent(value) + '; path=/; max-age=31536000; SameSite=Lax'; } catch (e) {}
  }
  function readStored() {
    try {
      var v = localStorage.getItem('furaha-language');
      if (supportedLanguages.indexOf(v) !== -1) return v;
    } catch (e) {}
    var m = document.cookie.match(/(?:^|; )furaha-language=([^;]+)/);
    if (m) { try { var c = decodeURIComponent(m[1]); if (supportedLanguages.indexOf(c) !== -1) return c; } catch (e) {} }
    return 'en';
  }
  function englishTitleFromPage(lang) {
    var h = document.querySelector('h1.page-title, .exc-detail-title, .hero-title');
    if (!h) return '';
    var span = h.querySelector('[data-en], [data-it]');
    if (span && lang === 'it') return clean(span.getAttribute('data-it') || span.textContent);
    return clean(span ? span.getAttribute('data-en') : h.textContent);
  }
  function updateMetadata(lang) {
    var titleEl = document.querySelector('head title');
    var homeTitle = titleEl && titleEl.getAttribute('data-en');
    var pageTitle = '';
    if (titleEl && titleEl.hasAttribute('data-en')) {
      var enTitle = titleEl.getAttribute('data-en');
      var trTitle = translateEnglish(enTitle, lang);
      if (lang === 'it') titleEl.textContent = titleEl.getAttribute('data-it') || enTitle;
      else titleEl.textContent = trTitle || enTitle;
    } else {
      pageTitle = englishTitleFromPage(lang);
      if (pageTitle) {
        var translatedTitle = lang === 'it' ? pageTitle : translateEnglish(pageTitle, lang);
        titleEl.textContent = (translatedTitle || pageTitle) + ' - Furaha Adventures Kenya';
      }
    }
    var intro = document.querySelector('.hero-sub[data-en], .exc-detail-desc, .safari-main p[data-en], .page-body p[data-en], p[data-en]');
    var description = '';
    if (intro) {
      var enDesc = intro.getAttribute('data-en') || intro.textContent;
      if (lang === 'it') description = intro.getAttribute('data-it') || enDesc;
      else if (lang === 'fr' || lang === 'de') description = intro.getAttribute('data-' + lang) || translateEnglish(enDesc, lang) || enDesc;
      else description = enDesc;
    }
    if (!description) description = 'Authentic safaris and coastal excursions in Kenya with Furaha Adventures Kenya.';
    description = clean(description).slice(0, 300);
    var meta = document.querySelector('meta[name="description"]');
    if (meta) meta.setAttribute('content', description);
    else { meta = document.createElement('meta'); meta.name = 'description'; meta.content = description; document.head.appendChild(meta); }
    var currentTitle = titleEl ? titleEl.textContent : pageTitle;
    [['og:title', currentTitle], ['og:description', description]].forEach(function (item) {
      var node = document.querySelector('meta[property="' + item[0] + '"]');
      if (!node) { node = document.createElement('meta'); node.setAttribute('property', item[0]); document.head.appendChild(node); }
      node.setAttribute('content', item[1]);
    });
    var locale = document.querySelector('meta[property="og:locale"]');
    if (!locale) { locale = document.createElement('meta'); locale.setAttribute('property', 'og:locale'); document.head.appendChild(locale); }
    locale.setAttribute('content', {en:'en_GB',it:'it_IT',fr:'fr_FR',de:'de_DE'}[lang]);
  }
  function translateNavPlain(lang) {
    document.querySelectorAll('.dropdown a, .mobile-nav a, .nav-links a').forEach(function (el) {
      if (el.querySelector('i') || el.classList.contains('btn')) return;
      if (el.hasAttribute('data-it') || el.hasAttribute('data-en')) return;
      var original = clean(el.textContent);
      var mapped = langNames[original];
      if (mapped) el.textContent = lang === 'it' ? original : (lang === 'en' ? mapped[0] : mapped[lang === 'fr' ? 1 : 2]);
    });
  }
  function updateWhatsApp(lang) {
    var messages = {
      en: 'Hello, I would like information about your Kenya safaris and excursions.',
      it: 'Salve, vorrei informazioni sui vostri safari ed escursioni in Kenya.',
      fr: 'Bonjour, je souhaiterais obtenir des informations sur vos safaris et excursions au Kenya.',
      de: 'Guten Tag, ich hätte gerne Informationen zu Ihren Safaris und Ausflügen in Kenia.'
    };
    document.querySelectorAll('a[href*="wa.me/"]').forEach(function (a) {
      try {
        var u = new URL(a.href, window.location.href);
        u.searchParams.set('text', messages[lang]);
        a.href = u.toString();
      } catch (e) {}
    });
  }
  function applyLanguage(lang) {
    if (supportedLanguages.indexOf(lang) === -1) lang = 'en';
    document.documentElement.setAttribute('lang', lang);
    document.querySelectorAll('[data-it], [data-en]').forEach(function (el) {
      var it = el.getAttribute('data-it');
      var en = el.getAttribute('data-en');
      var directTranslation = (lang === 'fr' || lang === 'de') ? el.getAttribute('data-' + lang) : null;
      var value = lang === 'it' ? it : (lang === 'en' ? en : (directTranslation || translateEnglish(en, lang)));
      if ((value === null || value === undefined || value === '') && lang !== 'en') value = en || it;
      if (value !== null && value !== undefined && value !== '') el.innerHTML = value;
    });
    document.querySelectorAll('[data-placeholder-en], [data-placeholder-it]').forEach(function (el) {
      var v = lang === 'it' ? el.getAttribute('data-placeholder-it') :
        (lang === 'en' ? el.getAttribute('data-placeholder-en') : (el.getAttribute('data-placeholder-' + lang) || el.getAttribute('data-placeholder-en')));
      if (v) el.setAttribute('placeholder', v);
    });
    document.querySelectorAll('[data-aria-en], [data-aria-it]').forEach(function (el) {
      var v = lang === 'it' ? el.getAttribute('data-aria-it') : (lang === 'en' ? el.getAttribute('data-aria-en') : (el.getAttribute('data-aria-' + lang) || el.getAttribute('data-aria-en')));
      if (v) el.setAttribute('aria-label', v);
    });
    document.querySelectorAll('.language-select').forEach(function (s) { s.value = lang; });
    try { localStorage.setItem('furaha-language', lang); } catch (e) {}
    setCookie('furaha-language', lang);
    translateNavPlain(lang);
    updateWhatsApp(lang);
    document.querySelectorAll('[data-form-message]').forEach(function (el) {
      var m = clean(el.textContent);
      var map = {
        'Verifica anti-spam non corretta. Riprova.': {fr:'La vérification anti-spam est incorrecte. Veuillez réessayer.',de:'Die Spam-Prüfung ist nicht korrekt. Bitte versuchen Sie es erneut.'},
        'Inserisci nome ed email validi.': {fr:'Veuillez saisir un nom et une adresse e-mail valides.',de:'Bitte geben Sie einen gültigen Namen und eine gültige E-Mail-Adresse ein.'},
        'Si e\' verificato un errore nell\'invio. Contattaci direttamente su WhatsApp.': {fr:'Une erreur est survenue lors de l’envoi. Contactez-nous directement sur WhatsApp.',de:'Beim Senden ist ein Fehler aufgetreten. Kontaktieren Sie uns direkt per WhatsApp.'}
      };
      if (lang === 'fr' || lang === 'de') { if (map[m]) el.textContent = map[m][lang]; else if (m.indexOf('Grazie ') === 0) { var who = m.slice(6).split('!')[0]; el.textContent = (lang === 'fr' ? 'Merci ' : 'Vielen Dank, ') + who + (lang === 'fr' ? ' ! Votre demande a été envoyée. Nous vous répondrons bientôt.' : '! Ihre Anfrage wurde gesendet. Wir melden uns in Kürze.'); } }
      else if (lang === 'en') { if (m.indexOf('Verifica anti-spam') === 0) el.textContent = 'The anti-spam check was incorrect. Please try again.'; else if (m.indexOf('Inserisci nome') === 0) el.textContent = 'Please enter a valid name and email address.'; else if (m.indexOf('Grazie ') === 0) { var whoEn = m.slice(6).split('!')[0]; el.textContent = 'Thank you ' + whoEn + '! Your request has been sent. We will reply shortly.'; } }
    });
    updateMetadata(lang);
    document.dispatchEvent(new CustomEvent('furaha:languagechange', { detail: { language: lang } }));
    return lang;
  }
  document.querySelectorAll('.language-select').forEach(function (select) {
    select.addEventListener('change', function () {
      applyLanguage(select.value);
      if (mobileNav) mobileNav.classList.remove('open');
      document.body.style.overflow = '';
      // The Marafa page uses server-rendered language dictionaries.
      if (/\/escursioni\/marafa\.php$/.test(window.location.pathname)) {
        window.location.href = 'marafa.php?lang=' + encodeURIComponent(select.value);
      }
    });
  });
  applyLanguage(readStored());

  // Hero thumbnail gallery
  var thumbs = document.querySelectorAll('.hero-thumb');
  var heroMain = document.querySelector('.hero-img-side img');
  var heroImages = [];
  thumbs.forEach(function (t) { var img = t.querySelector('img'); if (img) heroImages.push(img.getAttribute('src')); });
  var currentHeroIdx = 0;
  function setHero(idx) {
    currentHeroIdx = idx;
    if (heroMain && heroImages[idx]) heroMain.src = heroImages[idx];
    thumbs.forEach(function (t, i) { t.classList.toggle('active', i === idx); });
  }
  thumbs.forEach(function (t, i) { t.addEventListener('click', function () { setHero(i); }); });
  if (thumbs.length > 0 && heroImages.length > 0) { setHero(0); setInterval(function () { setHero((currentHeroIdx + 1) % heroImages.length); }, 4000); }

  // Preserve working AOS fallback.
  if (typeof AOS === 'undefined') {
    document.querySelectorAll('[data-aos]').forEach(function (el) { el.removeAttribute('data-aos'); el.style.opacity = '1'; el.style.transform = 'none'; });
  } else { AOS.init({ duration: 700, once: true, offset: 60 }); }
});

/* ---- Accessible language picker with real SVG flags (wraps the existing <select>) ---- */
(function () {
  var FLAGS = {
    en: '<svg viewBox="0 0 60 40" aria-hidden="true" focusable="false"><rect width="60" height="40" fill="#012169"/><path d="M0 0L60 40M60 0L0 40" stroke="#fff" stroke-width="8"/><path d="M0 0L60 40M60 0L0 40" stroke="#C8102E" stroke-width="3"/><path d="M30 0V40M0 20H60" stroke="#fff" stroke-width="13"/><path d="M30 0V40M0 20H60" stroke="#C8102E" stroke-width="8"/></svg>',
    it: '<svg viewBox="0 0 60 40" aria-hidden="true" focusable="false"><rect width="20" height="40" fill="#009246"/><rect x="20" width="20" height="40" fill="#fff"/><rect x="40" width="20" height="40" fill="#CE2B37"/></svg>',
    fr: '<svg viewBox="0 0 60 40" aria-hidden="true" focusable="false"><rect width="20" height="40" fill="#002654"/><rect x="20" width="20" height="40" fill="#fff"/><rect x="40" width="20" height="40" fill="#ED2939"/></svg>',
    de: '<svg viewBox="0 0 60 40" aria-hidden="true" focusable="false"><rect width="60" height="14" fill="#000"/><rect y="13" width="60" height="14" fill="#DD0000"/><rect y="26" width="60" height="14" fill="#FFCE00"/></svg>'
  };
  var CARET = '<svg class="lp-caret" viewBox="0 0 10 6" aria-hidden="true" focusable="false"><path d="M1 1l4 4 4-4" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>';

  function build(label) {
    var select = label.querySelector('.language-select');
    if (!select || label.classList.contains('is-enhanced')) return;
    var mobile = label.classList.contains('language-picker-mobile');
    var codes = [], names = {};
    Array.prototype.forEach.call(select.options, function (o) { codes.push(o.value); names[o.value] = o.textContent.trim(); });

    var wrap = document.createElement('div');
    wrap.className = 'lp' + (mobile ? ' lp-mobile' : '');
    var btn = document.createElement('button');
    btn.type = 'button'; btn.className = 'lp-btn';
    btn.setAttribute('aria-haspopup', 'listbox'); btn.setAttribute('aria-expanded', 'false');
    var list = document.createElement('ul');
    list.className = 'lp-list'; list.setAttribute('role', 'listbox'); list.tabIndex = -1;
    codes.forEach(function (c) {
      var li = document.createElement('li');
      li.className = 'lp-opt'; li.setAttribute('role', 'option'); li.setAttribute('data-lang', c); li.tabIndex = -1;
      li.innerHTML = '<span class="lp-flag">' + FLAGS[c] + '</span><span>' + names[c] + '</span>';
      list.appendChild(li);
    });
    wrap.appendChild(btn); wrap.appendChild(list);
    label.parentNode.insertBefore(wrap, label.nextSibling);
    label.classList.add('is-enhanced');

    function opts() { return Array.prototype.slice.call(list.querySelectorAll('.lp-opt')); }
    function refresh() {
      var v = select.value || 'en';
      btn.innerHTML = '<span class="lp-flag">' + FLAGS[v] + '</span><span class="lp-code">' + v.toUpperCase() + '</span>' + CARET;
      btn.setAttribute('aria-label', (select.getAttribute('aria-label') || 'Language') + ': ' + names[v]);
      list.setAttribute('aria-label', select.getAttribute('aria-label') || 'Language');
      opts().forEach(function (o) { o.setAttribute('aria-selected', o.getAttribute('data-lang') === v ? 'true' : 'false'); });
    }
    function open() { list.classList.add('open'); btn.setAttribute('aria-expanded', 'true'); var s = list.querySelector('[aria-selected="true"]') || opts()[0]; if (s) s.focus(); }
    function close(focusBtn) { list.classList.remove('open'); btn.setAttribute('aria-expanded', 'false'); if (focusBtn) btn.focus(); }
    function choose(code) {
      close(true);
      if (select.value !== code) { select.value = code; select.dispatchEvent(new Event('change', { bubbles: true })); }
      refresh();
    }
    btn.addEventListener('click', function () { list.classList.contains('open') ? close(false) : open(); });
    btn.addEventListener('keydown', function (e) { if (e.key === 'ArrowDown' || e.key === 'ArrowUp') { e.preventDefault(); open(); } });
    list.addEventListener('click', function (e) { var o = e.target.closest('.lp-opt'); if (o) choose(o.getAttribute('data-lang')); });
    list.addEventListener('keydown', function (e) {
      var items = opts(), i = items.indexOf(document.activeElement);
      if (e.key === 'ArrowDown') { e.preventDefault(); items[(i + 1) % items.length].focus(); }
      else if (e.key === 'ArrowUp') { e.preventDefault(); items[(i - 1 + items.length) % items.length].focus(); }
      else if (e.key === 'Home') { e.preventDefault(); items[0].focus(); }
      else if (e.key === 'End') { e.preventDefault(); items[items.length - 1].focus(); }
      else if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); if (i > -1) choose(items[i].getAttribute('data-lang')); }
      else if (e.key === 'Escape') { e.preventDefault(); close(true); }
      else if (e.key === 'Tab') { close(false); }
    });
    document.addEventListener('click', function (e) { if (!wrap.contains(e.target)) close(false); });
    document.addEventListener('furaha:languagechange', refresh);
    refresh();
  }
  function init() { document.querySelectorAll('label.language-picker').forEach(build); }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init); else init();
})();

/* ---- Close the mobile menu whenever a destination link is chosen ---- */
(function () {
  var nav = document.getElementById('mobile-nav') || document.querySelector('.mobile-nav');
  if (!nav) return;
  nav.addEventListener('click', function (e) {
    var a = e.target.closest ? e.target.closest('a') : null;
    if (!a) return;
    nav.classList.remove('open');
    document.body.style.overflow = '';
  });
})();
