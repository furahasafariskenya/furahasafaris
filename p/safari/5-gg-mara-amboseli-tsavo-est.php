<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5 Giorni - Mara, Amboseli e Tsavo Est - Furaha Adventures Kenya</title>
  <meta name="description" content="5 Giorni - Mara, Amboseli e Tsavo Est - Furaha Adventures Kenya. Contattaci su WhatsApp.">
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
  <img class="page-hero-bg" src="../images/img53.jpg" alt="5 Giorni - Mara, Amboseli e Tsavo Est">
  <div class="page-hero-content">
    <span class="eyebrow" data-it="Safari - 5 Giorni" data-en="Safari - 5 Giorni">Safari &mdash; 5 Giorni</span>
    <h1 class="page-title">
      <span data-it="5 Giorni - Mara, Amboseli e Tsavo Est" data-en="5 Days - Mara, Amboseli & Tsavo East">5 Giorni - Mara, Amboseli e Tsavo Est</span>
    </h1>
  </div>
</section>

<div class="page-body">
  <div class="safari-layout">

    <div class="safari-main">
      <h2 data-it="Informazioni" data-en="About">Informazioni</h2>
      <div data-it="" data-en="">
        <p data-it="Maasai Mara : il più famoso parco del Kenya, Big Five e Grande Migrazione. Amboseli : elefanti e Kilimanjaro. Tsavo Est : il parco più vasto del continente, terra rossa e fauna incredibile." data-en="Maasai Mara: Kenya’s most famous park, home to the Big Five and the Great Migration. Amboseli: elephants and views of Kilimanjaro. Tsavo East: one of the continent’s largest parks, known for its red earth and remarkable wildlife." data-fr="Maasai Mara : le parc le plus célèbre du Kenya, qui abrite les Big Five et la Grande Migration. Amboseli : éléphants et vues sur le Kilimandjaro. Tsavo Est : l’un des plus grands parcs du continent, célèbre pour sa terre rouge et sa faune remarquable." data-de="Maasai Mara: Kenias berühmtester Park mit den Big Five und der Großen Tierwanderung. Amboseli: Elefanten und Ausblicke auf den Kilimandscharo. Tsavo-Ost: einer der größten Parks des Kontinents, bekannt für seine rote Erde und beeindruckende Tierwelt."><strong>Maasai Mara</strong>: il più famoso parco del Kenya, Big Five e Grande Migrazione. <strong>Amboseli</strong>: elefanti e Kilimanjaro. <strong>Tsavo Est</strong>: il parco più vasto del continente, terra rossa e fauna incredibile.</p>
      </div>
      <p data-it="Il meglio del Kenya in cinque giorni: il Maasai Mara e la Grande Migrazione, il Kilimanjaro da Amboseli e gli elefanti rossi di Tsavo Est. Un'avventura completa tra i tre parchi più rinomati d'Africa." data-en="Kenya's best in five days: the Maasai Mara and the Great Migration, Kilimanjaro from Amboseli, and Tsavo East's red elephants. A complete adventure through Africa's three most famous parks.">Il meglio del Kenya in cinque giorni: il Maasai Mara e la Grande Migrazione, il Kilimanjaro da Amboseli e gli elefanti rossi di Tsavo Est. Un'avventura completa tra i tre parchi più rinomati d'Africa.</p>

      <div class="safari-imgs" data-aos="fade-up">
        <img loading="lazy" decoding="async" src="../images/img53.jpg" alt="5 Giorni - Mara, Amboseli e Tsavo Est">
        <img loading="lazy" decoding="async" src="../images/img06.jpg" alt="5 Giorni - Mara, Amboseli e Tsavo Est">
        <img loading="lazy" decoding="async" src="../images/img46.jpg" alt="5 Giorni - Mara, Amboseli e Tsavo Est">
        <img loading="lazy" decoding="async" src="../images/img12.jpg" alt="5 Giorni - Mara, Amboseli e Tsavo Est">
        <img loading="lazy" decoding="async" src="../images/img04.jpg" alt="5 Giorni - Mara, Amboseli e Tsavo Est">
        <img loading="lazy" decoding="async" src="../images/img57.jpg" alt="5 Giorni - Mara, Amboseli e Tsavo Est">
      </div>

      <h2 data-it="Programma" data-en="Itinerary">Programma</h2>
      <div class="itinerary">
  <div class="itin-day" data-aos="fade-up" data-aos-delay="0">
    <div class="day-num">01</div>
    <div>
      <div class="day-lbl" data-it="Giorno 1 — Volo &amp; Maasai Mara" data-en="Day 1 — Flight and Maasai Mara" data-fr="Jour 1 — Vol et Maasai Mara" data-de="Tag 1 — Flug und Maasai Mara">Giorno 1 — Volo & Maasai Mara</div>
      <div class="day-desc" data-it="Ore 7.00 — Partenza per l&#x27;aeroporto di Malindi. Ore 8.30 — Volo interno verso il Maasai Mara. Check-in al lodge e primo game drive fino al pranzo. Secondo game drive fino al tramonto. Cena e pernottamento." data-en="7:00 a.m. — Depart for Malindi Airport. 8:30 a.m. — Domestic flight to the Maasai Mara. Check in at the lodge and enjoy your first game drive before lunch. A second game drive follows until sunset, then dinner and overnight stay." data-fr="7 h — Départ vers l’aéroport de Malindi. 8 h 30 — Vol intérieur vers le Maasai Mara. Installation au lodge et premier safari avant le déjeuner. Deuxième safari jusqu’au coucher du soleil, puis dîner et nuit sur place." data-de="7:00 Uhr — Abfahrt zum Flughafen Malindi. 8:30 Uhr — Inlandsflug in die Maasai Mara. Check-in in der Lodge und erste Pirschfahrt vor dem Mittagessen. Eine zweite Pirschfahrt folgt bis zum Sonnenuntergang, anschließend Abendessen und Übernachtung.">Ore 7.00 — Partenza per l'aeroporto di Malindi. Ore 8.30 — Volo interno verso il Maasai Mara. Check-in al lodge e primo game drive fino al pranzo. Secondo game drive fino al tramonto. Cena e pernottamento.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="60">
    <div class="day-num">02</div>
    <div>
      <div class="day-lbl" data-it="Giorno 2 — Giorno Completo al Mara" data-en="Day 2 — Full day in the Mara" data-fr="Jour 2 — Journée complète dans le Mara" data-de="Tag 2 — Ganzer Tag in der Mara">Giorno 2 — Giorno Completo al Mara</div>
      <div class="day-desc" data-it="Sveglia e colazione. Game drive mattutino (su richiesta: Rhino Sanctuary o mongolfiera). Secondo game drive nel pomeriggio con visita al fiume Mara. Su richiesta, villaggio Masai. Cena e pernottamento." data-en="Wake up and breakfast. Morning game drive (Rhino Sanctuary visit or balloon safari on request). Enjoy a second game drive in the afternoon, including a visit to the Mara River. A Maasai village visit can be arranged on request. Dinner and overnight stay." data-fr="Réveil et petit-déjeuner. Safari matinal (visite du sanctuaire des rhinocéros ou montgolfière sur demande). Deuxième safari dans l’après-midi, avec visite de la rivière Mara. Visite d’un village masaï possible sur demande. Dîner et nuit sur place." data-de="Aufstehen und Frühstück. Morgenpirschfahrt (Besuch des Rhino Sanctuary oder Ballonsafari auf Anfrage). Am Nachmittag zweite Pirschfahrt mit Besuch des Mara-Flusses. Ein Besuch in einem Maasai-Dorf ist auf Wunsch möglich. Abendessen und Übernachtung.">Sveglia e colazione. Game drive mattutino (su richiesta: Rhino Sanctuary o mongolfiera). Secondo game drive nel pomeriggio con visita al fiume Mara. Su richiesta, villaggio Masai. Cena e pernottamento.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="120">
    <div class="day-num">03</div>
    <div>
      <div class="day-lbl" data-it="Giorno 3 — Mara → Amboseli" data-en="Day 3 — Mara to Amboseli" data-fr="Jour 3 — Du Mara à Amboseli" data-de="Tag 3 — Von der Mara nach Amboseli">Giorno 3 — Mara → Amboseli</div>
      <div class="day-desc" data-it="Sveglia e colazione. Partenza verso l&#x27;Amboseli. Arrivo al lodge per pranzo. Game drive pomeridiano fino al tramonto con vista sul Kilimanjaro e visita al lago Amboseli. Cena e spettacolo Masai." data-en="Wake up and breakfast, then depart for Amboseli. Arrive at the lodge for lunch. Enjoy an afternoon game drive until sunset, with views of Kilimanjaro and a visit to Lake Amboseli. Dinner and a Maasai cultural performance." data-fr="Réveil et petit-déjeuner, puis départ pour Amboseli. Arrivée au lodge pour le déjeuner. Safari dans l’après-midi jusqu’au coucher du soleil, avec vue sur le Kilimandjaro et visite du lac Amboseli. Dîner et spectacle culturel masaï." data-de="Aufstehen und Frühstück, danach Abfahrt nach Amboseli. Ankunft in der Lodge zum Mittagessen. Nachmittags-Pirschfahrt bis zum Sonnenuntergang mit Blick auf den Kilimandscharo und Besuch des Amboseli-Sees. Abendessen und kulturelle Vorführung der Maasai.">Sveglia e colazione. Partenza verso l'Amboseli. Arrivo al lodge per pranzo. Game drive pomeridiano fino al tramonto con vista sul Kilimanjaro e visita al lago Amboseli. Cena e spettacolo Masai.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="180">
    <div class="day-num">04</div>
    <div>
      <div class="day-lbl" data-it="Giorno 4 — Amboseli → Tsavo Est" data-en="Day 4 — Amboseli to Tsavo East" data-fr="Jour 4 — D’Amboseli à Tsavo Est" data-de="Tag 4 — Von Amboseli nach Tsavo-Ost">Giorno 4 — Amboseli → Tsavo Est</div>
      <div class="day-desc" data-it="Sveglia all&#x27;alba con vista sul Kilimanjaro. Colazione e ultimo game drive ad Amboseli. Partenza verso lo Tsavo Est. Primo game drive e arrivo al lodge per pranzo. Game drive pomeridiano fino al tramonto. Cena accanto alla pozza d&#x27;acqua e pernottamento." data-en="Wake at dawn with a view of Kilimanjaro. After breakfast, enjoy a final game drive in Amboseli and depart for Tsavo East. Take a first game drive and arrive at the lodge for lunch. Afternoon game drive until sunset, then dinner beside the waterhole and overnight stay." data-fr="Réveil à l’aube avec vue sur le Kilimandjaro. Après le petit-déjeuner, dernier safari à Amboseli puis départ pour Tsavo Est. Premier safari et arrivée au lodge pour le déjeuner. Safari dans l’après-midi jusqu’au coucher du soleil, puis dîner près du point d’eau et nuit sur place." data-de="Aufwachen im Morgengrauen mit Blick auf den Kilimandscharo. Nach dem Frühstück letzte Pirschfahrt in Amboseli und Abfahrt nach Tsavo-Ost. Erste Pirschfahrt und Ankunft in der Lodge zum Mittagessen. Nachmittags-Pirschfahrt bis zum Sonnenuntergang, anschließend Abendessen am Wasserloch und Übernachtung.">Sveglia all'alba con vista sul Kilimanjaro. Colazione e ultimo game drive ad Amboseli. Partenza verso lo Tsavo Est. Primo game drive e arrivo al lodge per pranzo. Game drive pomeridiano fino al tramonto. Cena accanto alla pozza d'acqua e pernottamento.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="240">
    <div class="day-num">05</div>
    <div>
      <div class="day-lbl" data-it="Giorno 5 — Tsavo Est e Rientro" data-en="Day 5 — Tsavo East and return" data-fr="Jour 5 — Tsavo Est et retour" data-de="Tag 5 — Tsavo Est und Rückreise">Giorno 5 — Tsavo Est e Rientro</div>
      <div class="day-desc" data-it="Sveglia e colazione. Ultimo game drive allo Tsavo Est verso l&#x27;uscita dal parco. Rientro agli alloggi sulla costa (ore 13.30 circa) attraverso il villaggio di Kaloleni, o direttamente all&#x27;aeroporto per il rientro in Italia." data-en="Wake up and breakfast, followed by a final game drive in Tsavo East towards the park exit. Return to your coastal accommodation at around 1:30 p.m., passing through Kaloleni village, or transfer directly to the airport for your international flight." data-fr="Réveil et petit-déjeuner, puis dernier safari à Tsavo Est en direction de la sortie du parc. Retour à votre hébergement sur la côte vers 13 h 30, en passant par le village de Kaloleni, ou transfert direct à l’aéroport pour votre vol international." data-de="Aufstehen und Frühstück, anschließend letzte Pirschfahrt in Tsavo-Ost in Richtung Parkausgang. Rückfahrt zu Ihrer Unterkunft an der Küste gegen 13:30 Uhr über das Dorf Kaloleni oder direkter Transfer zum Flughafen für Ihren internationalen Rückflug.">Sveglia e colazione. Ultimo game drive allo Tsavo Est verso l'uscita dal parco. Rientro agli alloggi sulla costa (ore 13.30 circa) attraverso il villaggio di Kaloleni, o direttamente all'aeroporto per il rientro in Italia.</div>
    </div>
  </div>
</div>


      <div style="margin-top:2.5rem;">
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20al%20safari%205%20Giorni%20Mara%20Amboseli%20e%20Tsavo%20Est." class="btn btn-wa" target="_blank" rel="noopener">
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
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Trasporto in 4x4 con autista/guida" data-en="4x4 transport with driver-guide" data-fr="Transport en 4x4 avec chauffeur-guide" data-de="4x4-Transport mit Fahrer und Guide">Trasporto in 4x4 con autista/guida</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Ingressi a tutti i parchi" data-en="Entrance fees to all parks included" data-fr="Entrées à tous les parcs incluses" data-de="Eintritt in alle Parks inklusive">Ingressi a tutti i parchi</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Acqua durante il tour" data-en="Drinking water during the tour" data-fr="Eau potable pendant le circuit" data-de="Trinkwasser während der Tour">Acqua durante il tour</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="4 pernottamenti in lodge o campo tendato" data-en="4 nights in a lodge or tented camp" data-fr="4 nuits en lodge ou camp de tentes" data-de="4 Übernachtungen in einer Lodge oder einem Zeltcamp">4 pernottamenti in lodge o campo tendato</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Tutti i pasti inclusi" data-en="All meals included" data-fr="Tous les repas inclus" data-de="Alle Mahlzeiten inklusive">Tutti i pasti inclusi</span></div>

        </div>
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20al%20safari%205%20Giorni%20Mara%20Amboseli%20e%20Tsavo%20Est." class="btn btn-wa" target="_blank" rel="noopener">
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