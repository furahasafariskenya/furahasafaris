<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3 Giorni - Maasai Mara - Furaha Adventures Kenya</title>
  <meta name="description" content="3 Giorni - Maasai Mara - Furaha Adventures Kenya. Contattaci su WhatsApp.">
  <link rel="icon" type="image/x-icon" href="../favicon.ico">
  <link rel="apple-touch-icon" href="../apple-touch-icon.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
<?php require __DIR__ . '/./../includes/icons.php'; ?>

<nav class="site-nav" id="site-nav">
  <div class="nav-inner">
    <a href="../index.php" class="nav-logo">
      <img src="../images/logo.png" alt="Furaha Adventures Kenya">
    </a>
    <ul class="nav-menu">
      <li><a href="../index.php" class="nav-link" data-it="Home" data-en="Home">Home</a></li>
      <li><a href="../index.php#chi-sono" class="nav-link" data-it="Chi Sono" data-en="About">Chi Sono</a></li>
      <li>
        <a href="../index.php#safari" class="nav-link">
          <span data-it="Safari" data-en="Safari">Safari</span><span class="chev"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-chevron-down"></use></svg></span>
        </a>
        <div class="dropdown">
          <a href="1-gg-tsavo-est.php">1 GG Tsavo Est</a>
          <a href="2-gg-tsavo-est.php">2 GG Tsavo Est</a>
          <a href="2-gg-maasai-mara.php">2 GG Maasai Mara</a>
          <a href="3-gg-amboseli-e-tsavo-est.php">3 GG Amboseli e Tsavo Est</a>
          <a href="3-gg-maasai-mara.php">3 GG Maasai Mara</a>
          <a href="4-gg-maasai-mara-e-lago-nakuru.php">4 GG Maasai Mara e Lago Nakuru</a>
          <a href="5-gg-amboseli-taita-tsavo.php">5 GG Amboseli, Taita Hills, Tsavo</a>
          <a href="5-gg-mara-amboseli-tsavo-est.php">5 GG Mara, Amboseli, Tsavo Est</a>
          <a href="6-gg-mara-nakuru-amboseli-tsavo.php">6 GG Grand Tour</a>
          <a href="7-gg-grand-tour-kenya.php">7 GG Grand Tour Kenya</a>
        </div>
      </li>
      <li>
        <a href="../index.php#escursioni" class="nav-link">
          <span data-it="Escursioni" data-en="Excursions">Escursioni</span><span class="chev"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-chevron-down"></use></svg></span>
        </a>
        <div class="dropdown">
          <a href="../escursioni/safari-blu.php">Safari Blu</a>
          <a href="../escursioni/safari-blu-2.php">Safari Blu (Sardegna 2)</a>
          <a href="../escursioni/crab-shack.php">Crab Shack</a>
          <a href="../escursioni/canyon-marafa.php">Canyon di Marafa</a>
          <a href="../escursioni/isola-robinson.php">Isola di Robinson</a>
          <a href="../escursioni/che-shale.php">Che Shale</a>
          <a href="../escursioni/giro-malindi.php">Giro di Malindi</a>
          <a href="../escursioni/rovine-gedi.php">Rovine di Gedi</a>
          <a href="../escursioni/arabuko-sokoke.php">Arabuko Sokoke</a>
        </div>
      </li>
      <li><a href="../index.php#recensioni" class="nav-link" data-it="Recensioni" data-en="Reviews">Recensioni</a></li>
      <li><a href="../index.php#prenota" class="nav-link" data-it="Prenota" data-en="Book" style="color:var(--dust);">Prenota</a></li>
      <li><label class="language-picker" aria-label="Select website language">
          <span class="language-picker-icon" aria-hidden="true"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-globe"></use></svg></span>
          <select class="language-select" aria-label="Select website language">
            <option value="en">English</option>
            <option value="it">Italiano</option>
            <option value="fr">Français</option>
            <option value="de">Deutsch</option>
          </select>
        </label></li>
      <li>
        <a href="https://wa.me/254714434430" class="nav-cta" target="_blank" rel="noopener">
          <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg> WhatsApp
        </a>
      </li>
    </ul>
    <button class="nav-burger" id="nav-burger" aria-label="Menu" data-aria-en="Menu" data-aria-it="Menu" data-aria-fr="Menu" data-aria-de="Menü">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>
<div class="mobile-nav" id="mobile-nav">
  <button class="mobile-close" id="mobile-close"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-close"></use></svg></button>
  <a href="../index.php" class="mobile-nav-title">Home</a>
  <a href="../index.php#safari" class="mobile-nav-title">Safari</a>
  <a href="../index.php#escursioni" class="mobile-nav-title">Escursioni</a>
  <a href="https://wa.me/254714434430" class="btn btn-wa" target="_blank" rel="noopener" style="margin-top:0.5rem;">
    <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg> WhatsApp
  </a>
  <label class="language-picker language-picker-mobile" aria-label="Select website language">
    <span class="language-picker-icon" aria-hidden="true"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-globe"></use></svg></span>
    <select class="language-select" aria-label="Select website language">
      <option value="en">English</option>
      <option value="it">Italiano</option>
      <option value="fr">Français</option>
      <option value="de">Deutsch</option>
    </select>
  </label>
</div>

<section class="page-hero">
  <img class="page-hero-bg" src="../images/img51.jpg" alt="3 Giorni - Maasai Mara">
  <div class="page-hero-content">
    <span class="eyebrow" data-it="Safari - 3 Giorni" data-en="Safari - 3 Giorni">Safari &mdash; 3 Giorni</span>
    <h1 class="page-title">
      <span data-it="3 Giorni - Maasai Mara" data-en="3 Days - Maasai Mara">3 Giorni - Maasai Mara</span>
    </h1>
  </div>
</section>

<div class="page-body">
  <div class="safari-layout">

    <div class="safari-main">
      <h2 data-it="Informazioni" data-en="About">Informazioni</h2>
      <div data-it="" data-en="">
        <p data-it="Con le sue praterie ondulate, il Masai Mara ospita tutti e cinque i Big Five. Tra luglio e settembre è teatro della grande migrazione di erbivori dal Serengeti. Il parco offre safari in mongolfiera, visita al Rhino Sanctuary e al tipico villaggio Masai. Assieme ad Amboseli è uno dei pochi parchi dove si vede il leone con la criniera lunga e folta." data-en="The Maasai Mara’s rolling grasslands are home to all five Big Five species. From July to September, the great migration of herbivores moves in from the Serengeti. Visitors can enjoy balloon safaris and visits to the Rhino Sanctuary and a traditional Maasai village. Along with Amboseli, it is one of the few parks where lions with long, thick manes are often seen." data-fr="Les prairies vallonnées du Maasai Mara abritent les cinq animaux du Big Five. De juillet à septembre, la grande migration des herbivores venue du Serengeti traverse la région. Le parc propose des safaris en montgolfière ainsi que des visites du sanctuaire des rhinocéros et d’un village masaï traditionnel. Avec Amboseli, il fait partie des rares parcs où l’on peut voir des lions à la crinière longue et épaisse." data-de="Die sanften Graslandschaften der Maasai Mara beherbergen alle fünf Big-Five-Arten. Von Juli bis September zieht die große Wanderung der Pflanzenfresser aus der Serengeti durch das Gebiet. Angeboten werden Ballonsafaris sowie Besuche im Rhino Sanctuary und in einem traditionellen Maasai-Dorf. Zusammen mit Amboseli zählt der Park zu den wenigen Orten, an denen Löwen mit langer, dichter Mähne zu sehen sind.">Con le sue praterie ondulate, il Masai Mara ospita tutti e cinque i Big Five. Tra luglio e settembre è teatro della grande migrazione di erbivori dal Serengeti. Il parco offre safari in mongolfiera, visita al Rhino Sanctuary e al tipico villaggio Masai. Assieme ad Amboseli è uno dei pochi parchi dove si vede il leone con la criniera lunga e folta.</p>
      </div>
      <p data-it="Tre giorni immersi nella natura più selvaggia del Kenya. Il Maasai Mara è la terra dei Masai e dei Big Five, il palcoscenico della grande migrazione, il parco dei sogni di ogni viaggiatore. Raggiungibile con volo interno da Malindi." data-en="Three days immersed in Kenya's wildest nature. The Maasai Mara is land of the Masai and the Big Five, stage of the Great Migration, the dream park of every traveller. Reachable by internal flight from Malindi.">Tre giorni immersi nella natura più selvaggia del Kenya. Il Maasai Mara è la terra dei Masai e dei Big Five, il palcoscenico della grande migrazione, il parco dei sogni di ogni viaggiatore. Raggiungibile con volo interno da Malindi.</p>

      <div class="safari-imgs" data-aos="fade-up">
        <img loading="lazy" decoding="async" src="../images/img51.jpg" alt="3 Giorni - Maasai Mara">
        <img loading="lazy" decoding="async" src="../images/img46.jpg" alt="3 Giorni - Maasai Mara">
        <img loading="lazy" decoding="async" src="../images/img53.jpg" alt="3 Giorni - Maasai Mara">
        <img loading="lazy" decoding="async" src="../images/img44.jpg" alt="3 Giorni - Maasai Mara">
        <img loading="lazy" decoding="async" src="../images/img12.jpg" alt="3 Giorni - Maasai Mara">
        <img loading="lazy" decoding="async" src="../images/img55.jpg" alt="3 Giorni - Maasai Mara">
      </div>

      <h2 data-it="Programma" data-en="Itinerary">Programma</h2>
      <div class="itinerary">
  <div class="itin-day" data-aos="fade-up" data-aos-delay="0">
    <div class="day-num">01</div>
    <div>
      <div class="day-lbl" data-it="Giorno 1 — Volo &amp; Primo Game Drive" data-en="Day 1 — Flight and first game drive" data-fr="Jour 1 — Vol et premier safari en 4x4" data-de="Tag 1 — Flug und erste Pirschfahrt">Giorno 1 — Volo & Primo Game Drive</div>
      <div class="day-desc" data-it="Ore 7.00 — Partenza per l&#x27;aeroporto di Malindi. Ore 8.30 — Volo interno (2 ore). Ore 10.30 — Atterraggio in savana, check-in al lodge. Ore 11.00 — Primo game drive fino al pranzo. Ore 15.30 — Secondo game drive fino al tramonto. Ore 18.00 — Cena e pernottamento." data-en="7:00 a.m. — Depart for Malindi Airport. 8:30 a.m. — Two-hour domestic flight. 10:30 a.m. — Land in the savannah and check in at the lodge. 11:00 a.m. — First game drive until lunch. 3:30 p.m. — Second game drive until sunset. 6:00 p.m. — Dinner and overnight stay." data-fr="7 h — Départ vers l’aéroport de Malindi. 8 h 30 — Vol intérieur de deux heures. 10 h 30 — Arrivée dans la savane et installation au lodge. 11 h — Premier safari jusqu’au déjeuner. 15 h 30 — Deuxième safari jusqu’au coucher du soleil. 18 h — Dîner et nuit sur place." data-de="7:00 Uhr — Abfahrt zum Flughafen Malindi. 8:30 Uhr — Zweistündiger Inlandsflug. 10:30 Uhr — Landung in der Savanne und Check-in in der Lodge. 11:00 Uhr — Erste Pirschfahrt bis zum Mittagessen. 15:30 Uhr — Zweite Pirschfahrt bis zum Sonnenuntergang. 18:00 Uhr — Abendessen und Übernachtung.">Ore 7.00 — Partenza per l'aeroporto di Malindi. Ore 8.30 — Volo interno (2 ore). Ore 10.30 — Atterraggio in savana, check-in al lodge. Ore 11.00 — Primo game drive fino al pranzo. Ore 15.30 — Secondo game drive fino al tramonto. Ore 18.00 — Cena e pernottamento.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="60">
    <div class="day-num">02</div>
    <div>
      <div class="day-lbl" data-it="Giorno 2 — Giorno Completo in Savana" data-en="Day 2 — Full day on the savannah" data-fr="Jour 2 — Journée complète dans la savane" data-de="Tag 2 — Ganzer Tag in der Savanne">Giorno 2 — Giorno Completo in Savana</div>
      <div class="day-desc" data-it="Ore 6.00 — Sveglia e colazione. Ore 6.30 — Game drive mattutino con alba sulla savana. Su richiesta: Rhino Sanctuary o mongolfiera. Ore 9.30 — Colazione (o in savana su richiesta). Ore 10.00 — Altro game drive. Ore 12.30 — Pranzo al lodge. Ore 15.30 — Game drive al tramonto con visita al fiume Mara e, su richiesta, villaggio Masai. Ore 18.00 — Cena e pernottamento." data-en="6:00 a.m. — Wake up and breakfast. 6:30 a.m. — Morning game drive at sunrise. Optional visit to the Rhino Sanctuary or a balloon safari. 9:30 a.m. — Breakfast (or in the savannah on request). 10:00 a.m. — Further game drive. 12:30 p.m. — Lunch at the lodge. 3:30 p.m. — Afternoon game drive towards sunset, with a visit to the Mara River and, on request, a Maasai village. 6:00 p.m. — Dinner and overnight stay." data-fr="6 h — Réveil et petit-déjeuner. 6 h 30 — Safari matinal au lever du soleil. En option : sanctuaire des rhinocéros ou safari en montgolfière. 9 h 30 — Petit-déjeuner (dans la savane sur demande). 10 h — Nouveau safari. 12 h 30 — Déjeuner au lodge. 15 h 30 — Safari de l’après-midi vers le coucher du soleil, avec visite de la rivière Mara et, sur demande, d’un village masaï. 18 h — Dîner et nuit sur place." data-de="6:00 Uhr — Aufstehen und Frühstück. 6:30 Uhr — Morgenpirschfahrt bei Sonnenaufgang. Optionaler Besuch des Rhino Sanctuary oder Ballonsafari. 9:30 Uhr — Frühstück (auf Wunsch in der Savanne). 10:00 Uhr — Weitere Pirschfahrt. 12:30 Uhr — Mittagessen in der Lodge. 15:30 Uhr — Nachmittags-Pirschfahrt bis zum Sonnenuntergang mit Besuch des Mara-Flusses und auf Wunsch eines Maasai-Dorfes. 18:00 Uhr — Abendessen und Übernachtung.">Ore 6.00 — Sveglia e colazione. Ore 6.30 — Game drive mattutino con alba sulla savana. Su richiesta: Rhino Sanctuary o mongolfiera. Ore 9.30 — Colazione (o in savana su richiesta). Ore 10.00 — Altro game drive. Ore 12.30 — Pranzo al lodge. Ore 15.30 — Game drive al tramonto con visita al fiume Mara e, su richiesta, villaggio Masai. Ore 18.00 — Cena e pernottamento.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="120">
    <div class="day-num">03</div>
    <div>
      <div class="day-lbl" data-it="Giorno 3 — Ultimo Game Drive e Volo di Rientro" data-en="Day 3 — Last game drive and return flight" data-fr="Jour 3 — Dernier safari et vol retour" data-de="Tag 3 — Letzte Pirschfahrt und Rückflug">Giorno 3 — Ultimo Game Drive e Volo di Rientro</div>
      <div class="day-desc" data-it="Ore 6.00 — Sveglia e colazione. Ore 6.30 — Ultimo game drive (su richiesta: mongolfiera all&#x27;alba). Ore 12.00 — Pranzo al lodge. Ore 13.30 — Trasferimento alla pista. Ore 14.00 — Volo di rientro. Ore 16.00 — Arrivo a Malindi/Mombasa." data-en="6:00 a.m. — Wake up and breakfast. 6:30 a.m. — Final game drive (sunrise balloon safari on request). 12:00 p.m. — Lunch at the lodge. 1:30 p.m. — Transfer to the airstrip. 2:00 p.m. — Return flight. 4:00 p.m. — Arrival in Malindi or Mombasa." data-fr="6 h — Réveil et petit-déjeuner. 6 h 30 — Dernier safari (montgolfière au lever du soleil sur demande). 12 h — Déjeuner au lodge. 13 h 30 — Transfert vers la piste. 14 h — Vol retour. 16 h — Arrivée à Malindi ou Mombasa." data-de="6:00 Uhr — Aufstehen und Frühstück. 6:30 Uhr — Letzte Pirschfahrt (Ballonfahrt bei Sonnenaufgang auf Anfrage). 12:00 Uhr — Mittagessen in der Lodge. 13:30 Uhr — Transfer zum Flugplatz. 14:00 Uhr — Rückflug. 16:00 Uhr — Ankunft in Malindi oder Mombasa.">Ore 6.00 — Sveglia e colazione. Ore 6.30 — Ultimo game drive (su richiesta: mongolfiera all'alba). Ore 12.00 — Pranzo al lodge. Ore 13.30 — Trasferimento alla pista. Ore 14.00 — Volo di rientro. Ore 16.00 — Arrivo a Malindi/Mombasa.</div>
    </div>
  </div>
</div>


      <div style="margin-top:2.5rem;">
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20al%20safari%203%20Giorni%20Maasai%20Mara." class="btn btn-wa" target="_blank" rel="noopener">
          <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg>
          <span data-it="Prenota questo Safari" data-en="Book this Safari">Prenota questo Safari</span>
        </a>
      </div>
    </div>

    <aside>
      <div class="booking-box" data-aos="fade-left">
        <div class="booking-title" data-it="Vuoi Prenotare?" data-en="Ready to Book?">Vuoi Prenotare?</div>
        <p class="booking-sub" data-it="Contattaci su WhatsApp per un preventivo gratuito." data-en="Contact us on WhatsApp for a free quote.">Contattaci su WhatsApp per un preventivo gratuito.</p>
        <div class="booking-includes">
          <div class="footer-col-title" style="margin-bottom:0.75rem;" data-it="Cosa include:" data-en="What's included:">Cosa include:</div>
          <div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Volo interno Malindi/Mombasa ↔ Maasai Mara" data-en="Domestic flight from Malindi/Mombasa to the Maasai Mara and back" data-fr="Vol intérieur aller-retour entre Malindi/Mombasa et le Maasai Mara" data-de="Inlandsflug von Malindi/Mombasa zur Maasai Mara und zurück">Volo interno Malindi/Mombasa ↔ Maasai Mara</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Trasporto in jeep 4x4" data-en="Transport in a 4x4 safari jeep" data-fr="Transport en 4x4 de safari" data-de="Transport im 4x4-Safari-Jeep">Trasporto in jeep 4x4</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Ingressi alla riserva inclusi" data-en="Reserve entrance fees included" data-fr="Droits d’entrée dans la réserve inclus" data-de="Eintritt in das Schutzgebiet inklusive">Ingressi alla riserva inclusi</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Acqua durante il tour" data-en="Drinking water during the tour" data-fr="Eau potable pendant le circuit" data-de="Trinkwasser während der Tour">Acqua durante il tour</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="2 pernottamenti in lodge o campo tendato" data-en="2 nights in a lodge or tented camp" data-fr="2 nuits en lodge ou camp de tentes" data-de="2 Übernachtungen in einer Lodge oder einem Zeltcamp">2 pernottamenti in lodge o campo tendato</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Tutti i pasti inclusi" data-en="All meals included" data-fr="Tous les repas inclus" data-de="Alle Mahlzeiten inklusive">Tutti i pasti inclusi</span></div>

        </div>
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20al%20safari%203%20Giorni%20Maasai%20Mara." class="btn btn-wa" target="_blank" rel="noopener">
          <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg>
          <span data-it="Chiedi Preventivo" data-en="Request Quote">Chiedi Preventivo</span>
        </a>
        <div style="margin-top:1.25rem;padding-top:1.25rem;border-top:1px solid var(--bark);">
          <div class="footer-contact-row">
            <span class="fci"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-phone"></use></svg></span>
            <div class="fct"><a href="tel:+254714434430">+254 714 434 430</a></div>
          </div>
          <div class="footer-contact-row">
            <span class="fci"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-mail"></use></svg></span>
            <div class="fct"><a href="mailto:furahasafariskenya@gmail.com">furahasafariskenya@gmail.com</a></div>
          </div>
        </div>
      </div>
    </aside>

  </div>
</div>

<footer class="site-footer">
  <div class="container">
    <div class="footer-bottom" style="border-top:none; padding:2rem 0;">
      <p class="footer-copy">
        &copy; <?php echo date('Y'); ?> Furaha Adventures Kenya.
        <span data-it="Tutti i diritti riservati." data-en="All rights reserved.">Tutti i diritti riservati.</span>
        | <span data-it="Progettato da" data-en="Designed by">Progettato da</span>
        <a href="https://wa.me/254707412795" target="_blank" rel="noopener">Mega Designers KE</a>
      </p>
      <a href="../index.php" class="btn btn-outline" style="font-size:0.75rem;padding:0.45rem 1.1rem;"
         data-it="&#8592; Torna alla Home" data-en="&#8592; Back to Home">&#8592; Torna alla Home</a>
    </div>
  </div>
</footer>
<a href="https://wa.me/254714434430" class="wa-float" target="_blank" rel="noopener" aria-label="WhatsApp">
  <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="../js/translations.js"></script>
<script src="../js/main.js"></script>
</body>
</html>