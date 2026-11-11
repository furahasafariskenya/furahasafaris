<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5 Giorni - Amboseli, Taita Hills e Tsavo - Furaha Adventures Kenya</title>
  <meta name="description" content="5 Giorni - Amboseli, Taita Hills e Tsavo - Furaha Adventures Kenya. Contattaci su WhatsApp.">
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
  <img class="page-hero-bg" src="../images/img05.jpg" alt="5 Giorni - Amboseli, Taita Hills e Tsavo">
  <div class="page-hero-content">
    <span class="eyebrow" data-it="Safari - 5 Giorni" data-en="Safari - 5 Giorni">Safari &mdash; 5 Giorni</span>
    <h1 class="page-title">
      <span data-it="5 Giorni - Amboseli, Taita Hills e Tsavo" data-en="5 Days - Amboseli, Taita Hills & Tsavo">5 Giorni - Amboseli, Taita Hills e Tsavo</span>
    </h1>
  </div>
</section>

<div class="page-body">
  <div class="safari-layout">

    <div class="safari-main">
      <h2 data-it="Informazioni" data-en="About">Informazioni</h2>
      <div data-it="" data-en="">
        <p data-it="Amboseli : grandi branchi di elefanti con il Kilimanjaro sullo sfondo. Tsavo Ovest : colline rocciose rosse, famiglie di leopardi, baobab secolari e le sorgenti di Mzima con ippopotami e coccodrilli. Tsavo Est : il parco più vasto d&#x27;Africa. Taita Hills : lodge su palafitte e safari notturno esclusivo." data-en="Amboseli: large elephant herds with Mount Kilimanjaro in the background. Tsavo West: red rocky hills, leopard families, ancient baobabs and Mzima Springs, home to hippos and crocodiles. Tsavo East: one of Africa’s largest parks. Taita Hills: a stilted lodge and an exclusive night-safari experience." data-fr="Amboseli : grands troupeaux d’éléphants avec le Kilimandjaro en toile de fond. Tsavo Ouest : collines rocheuses rouges, familles de léopards, baobabs centenaires et sources de Mzima, où vivent hippopotames et crocodiles. Tsavo Est : l’un des plus grands parcs d’Afrique. Taita Hills : lodge sur pilotis et expérience exclusive de safari nocturne." data-de="Amboseli: große Elefantenherden vor der Kulisse des Kilimandscharo. Tsavo-West: rote Felsenhügel, Leopardenfamilien, uralte Baobabs und die Mzima-Quellen mit Flusspferden und Krokodilen. Tsavo-Ost: einer der größten Parks Afrikas. Taita Hills: Lodge auf Stelzen und ein besonderes Nachtsafari-Erlebnis."><strong>Amboseli</strong>: grandi branchi di elefanti con il Kilimanjaro sullo sfondo. <strong>Tsavo Ovest</strong>: colline rocciose rosse, famiglie di leopardi, baobab secolari e le sorgenti di Mzima con ippopotami e coccodrilli. <strong>Tsavo Est</strong>: il parco più vasto d'Africa. <strong>Taita Hills</strong>: lodge su palafitte e safari notturno esclusivo.</p>
      </div>
      <p data-it="Un safari di cinque giorni alla scoperta di quattro parchi straordinari: Amboseli ai piedi del Kilimanjaro, il suggestivo Tsavo Ovest con le sue sorgenti, lo Tsavo Est e la riserva esclusiva delle Taita Hills con safari notturno." data-en="A five-day safari discovering four extraordinary parks: Amboseli at the foot of Kilimanjaro, the spectacular Tsavo West, Tsavo East, and the exclusive Taita Hills reserve with night safari.">Un safari di cinque giorni alla scoperta di quattro parchi straordinari: Amboseli ai piedi del Kilimanjaro, il suggestivo Tsavo Ovest con le sue sorgenti, lo Tsavo Est e la riserva esclusiva delle Taita Hills con safari notturno.</p>

      <div class="safari-imgs" data-aos="fade-up">
        <img loading="lazy" decoding="async" src="../images/img06.jpg" alt="5 Giorni - Amboseli, Taita Hills e Tsavo">
        <img loading="lazy" decoding="async" src="../images/img05.jpg" alt="5 Giorni - Amboseli, Taita Hills e Tsavo">
        <img loading="lazy" decoding="async" src="../images/img04.jpg" alt="5 Giorni - Amboseli, Taita Hills e Tsavo">
        <img loading="lazy" decoding="async" src="../images/img08.jpg" alt="5 Giorni - Amboseli, Taita Hills e Tsavo">
        <img loading="lazy" decoding="async" src="../images/img01.jpg" alt="5 Giorni - Amboseli, Taita Hills e Tsavo">
        <img loading="lazy" decoding="async" src="../images/img13.jpg" alt="5 Giorni - Amboseli, Taita Hills e Tsavo">
      </div>

      <h2 data-it="Programma" data-en="Itinerary">Programma</h2>
      <div class="itinerary">
  <div class="itin-day" data-aos="fade-up" data-aos-delay="0">
    <div class="day-num">01</div>
    <div>
      <div class="day-lbl" data-it="Giorno 1 — Amboseli" data-en="Day 1 — Amboseli" data-fr="Jour 1 — Amboseli" data-de="Tag 1 — Amboseli">Giorno 1 — Amboseli</div>
      <div class="day-desc" data-it="Partenza dagli alloggi verso l&#x27;Amboseli National Park. Arrivo al lodge per pranzo, check-in e relax. Game drive pomeridiano fino al tramonto con vista sul Kilimanjaro e visita al lago Amboseli. Cena e spettacolo Masai intorno al fuoco." data-en="Depart from your accommodation for Amboseli National Park. Arrive at the lodge for lunch, check in and relax. Enjoy an afternoon game drive until sunset, with views of Kilimanjaro and a visit to Lake Amboseli. Dinner and a Maasai performance around the fire." data-fr="Départ de votre hébergement vers le parc national d’Amboseli. Arrivée au lodge pour le déjeuner, installation et détente. Safari dans l’après-midi jusqu’au coucher du soleil, avec vue sur le Kilimandjaro et visite du lac Amboseli. Dîner et spectacle masaï autour du feu." data-de="Abfahrt von Ihrer Unterkunft zum Amboseli-Nationalpark. Ankunft in der Lodge zum Mittagessen, Check-in und Erholung. Nachmittags-Pirschfahrt bis zum Sonnenuntergang mit Blick auf den Kilimandscharo und Besuch des Amboseli-Sees. Abendessen und Maasai-Tanzvorführung am Lagerfeuer.">Partenza dagli alloggi verso l'Amboseli National Park. Arrivo al lodge per pranzo, check-in e relax. Game drive pomeridiano fino al tramonto con vista sul Kilimanjaro e visita al lago Amboseli. Cena e spettacolo Masai intorno al fuoco.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="60">
    <div class="day-num">02</div>
    <div>
      <div class="day-lbl" data-it="Giorno 2 — Amboseli → Tsavo Ovest" data-en="Day 2 — Amboseli to Tsavo West" data-fr="Jour 2 — D’Amboseli à Tsavo Ouest" data-de="Tag 2 — Von Amboseli nach Tsavo-West">Giorno 2 — Amboseli → Tsavo Ovest</div>
      <div class="day-desc" data-it="Sveglia all&#x27;alba con vista sul Kilimanjaro. Colazione, game drive finale ad Amboseli, poi partenza verso lo Tsavo Ovest. Pranzo al lodge. Game drive pomeridiano fino al tramonto (con possibile visita al Ngulia Rhino Sanctuary). Cena e pernottamento." data-en="Wake at dawn with a view of Kilimanjaro. After breakfast, enjoy a final game drive in Amboseli, then depart for Tsavo West. Lunch at the lodge, followed by an afternoon game drive until sunset (with a possible visit to the Ngulia Rhino Sanctuary). Dinner and overnight stay." data-fr="Réveil à l’aube avec vue sur le Kilimandjaro. Après le petit-déjeuner, dernier safari à Amboseli, puis départ pour Tsavo Ouest. Déjeuner au lodge, suivi d’un safari dans l’après-midi jusqu’au coucher du soleil (visite possible du sanctuaire des rhinocéros de Ngulia). Dîner et nuit sur place." data-de="Aufwachen im Morgengrauen mit Blick auf den Kilimandscharo. Nach dem Frühstück letzte Pirschfahrt in Amboseli, anschließend Fahrt nach Tsavo-West. Mittagessen in der Lodge, danach Nachmittags-Pirschfahrt bis zum Sonnenuntergang (ein Besuch im Ngulia Rhino Sanctuary ist eventuell möglich). Abendessen und Übernachtung.">Sveglia all'alba con vista sul Kilimanjaro. Colazione, game drive finale ad Amboseli, poi partenza verso lo Tsavo Ovest. Pranzo al lodge. Game drive pomeridiano fino al tramonto (con possibile visita al Ngulia Rhino Sanctuary). Cena e pernottamento.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="120">
    <div class="day-num">03</div>
    <div>
      <div class="day-lbl" data-it="Giorno 3 — Tsavo Ovest → Tsavo Est" data-en="Day 3 — Tsavo West to Tsavo East" data-fr="Jour 3 — De Tsavo Ouest à Tsavo Est" data-de="Tag 3 — Von Tsavo-West nach Tsavo-Ost">Giorno 3 — Tsavo Ovest → Tsavo Est</div>
      <div class="day-desc" data-it="Sveglia e colazione. Game drive verso le sorgenti di Mzima (ippopotami, coccodrilli, safari a piedi). Partenza verso lo Tsavo Est. Primo game drive e arrivo al lodge per pranzo. Game drive pomeridiano fino al tramonto. Cena accanto alla pozza d&#x27;acqua e pernottamento." data-en="Wake up and breakfast. Game drive towards the Mzima Springs, where you may see hippos and crocodiles, with an opportunity for a guided walk. Continue to Tsavo East for a first game drive and arrive at the lodge for lunch. Afternoon game drive until sunset, then dinner beside the waterhole and overnight stay." data-fr="Réveil et petit-déjeuner. Safari en direction des sources de Mzima (hippopotames, crocodiles et possibilité de promenade guidée). Départ vers Tsavo Est, premier safari et arrivée au lodge pour le déjeuner. Safari dans l’après-midi jusqu’au coucher du soleil, puis dîner près du point d’eau et nuit sur place." data-de="Aufstehen und Frühstück. Pirschfahrt zu den Mzima-Quellen (Flusspferde, Krokodile und Möglichkeit zu einem geführten Spaziergang). Weiterfahrt nach Tsavo-Ost, erste Pirschfahrt und Ankunft in der Lodge zum Mittagessen. Nachmittags-Pirschfahrt bis zum Sonnenuntergang, anschließend Abendessen am Wasserloch und Übernachtung.">Sveglia e colazione. Game drive verso le sorgenti di Mzima (ippopotami, coccodrilli, safari a piedi). Partenza verso lo Tsavo Est. Primo game drive e arrivo al lodge per pranzo. Game drive pomeridiano fino al tramonto. Cena accanto alla pozza d'acqua e pernottamento.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="180">
    <div class="day-num">04</div>
    <div>
      <div class="day-lbl" data-it="Giorno 4 — Tsavo Est → Taita Hills" data-en="Day 4 — Tsavo East to Taita Hills" data-fr="Jour 4 — De Tsavo Est aux collines de Taita" data-de="Tag 4 — Von Tsavo-Ost zu den Taita Hills">Giorno 4 — Tsavo Est → Taita Hills</div>
      <div class="day-desc" data-it="Sveglia e colazione. Ultimo game drive allo Tsavo Est, poi partenza verso la riserva Taita Hills. Arrivo al Salt Lick Game Lodge su palafitte, pranzo e relax. Game drive pomeridiano fino al tramonto. Cena e possibilità di safari notturno." data-en="Wake up and breakfast. Enjoy a final game drive in Tsavo East before travelling to Taita Hills Wildlife Sanctuary. Arrive at the stilted Salt Lick Game Lodge for lunch and relaxation. Afternoon game drive until sunset, followed by dinner and the option of a night safari." data-fr="Réveil et petit-déjeuner. Dernier safari à Tsavo Est, puis départ vers la réserve de Taita Hills. Arrivée au Salt Lick Game Lodge, construit sur pilotis, pour le déjeuner et la détente. Safari dans l’après-midi jusqu’au coucher du soleil. Dîner et possibilité de safari nocturne." data-de="Aufstehen und Frühstück. Letzte Pirschfahrt in Tsavo-Ost, danach Fahrt zum Taita Hills Wildlife Sanctuary. Ankunft in der auf Stelzen errichteten Salt Lick Game Lodge zum Mittagessen und Entspannen. Nachmittags-Pirschfahrt bis zum Sonnenuntergang, danach Abendessen und Möglichkeit zu einer Nachtsafari.">Sveglia e colazione. Ultimo game drive allo Tsavo Est, poi partenza verso la riserva Taita Hills. Arrivo al Salt Lick Game Lodge su palafitte, pranzo e relax. Game drive pomeridiano fino al tramonto. Cena e possibilità di safari notturno.</div>
    </div>
  </div>
  <div class="itin-day" data-aos="fade-up" data-aos-delay="240">
    <div class="day-num">05</div>
    <div>
      <div class="day-lbl" data-it="Giorno 5 — Taita Hills e Rientro" data-en="Day 5 — Taita Hills and return" data-fr="Jour 5 — Collines de Taita et retour" data-de="Tag 5 — Taita Hills und Rückreise">Giorno 5 — Taita Hills e Rientro</div>
      <div class="day-desc" data-it="Sveglia e colazione. Ultimo game drive al Taita Hills. Uscita dalla riserva e viaggio di ritorno. Pranzo sulla strada e rientro nei vostri alloggi." data-en="Wake up and breakfast, followed by a final game drive in Taita Hills. Leave the reserve and begin the return journey. Lunch en route before returning to your accommodation." data-fr="Réveil et petit-déjeuner, puis dernier safari à Taita Hills. Sortie de la réserve et début du trajet retour. Déjeuner en route avant le retour à votre hébergement." data-de="Aufstehen und Frühstück, anschließend letzte Pirschfahrt in Taita Hills. Verlassen des Schutzgebiets und Beginn der Rückreise. Mittagessen unterwegs und Rückkehr zu Ihrer Unterkunft.">Sveglia e colazione. Ultimo game drive al Taita Hills. Uscita dalla riserva e viaggio di ritorno. Pranzo sulla strada e rientro nei vostri alloggi.</div>
    </div>
  </div>
</div>


      <div style="margin-top:2.5rem;">
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20al%20safari%205%20Giorni%20Amboseli%20Taita%20Hills%20e%20Tsavo." class="btn btn-wa" target="_blank" rel="noopener">
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
          <div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Trasporto in 4x4 con autista/guida" data-en="4x4 transport with driver-guide" data-fr="Transport en 4x4 avec chauffeur-guide" data-de="4x4-Transport mit Fahrer und Guide">Trasporto in 4x4 con autista/guida</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Ingressi a tutti i parchi e riserve" data-en="Entrance fees to all parks and reserves included" data-fr="Entrées à tous les parcs et réserves incluses" data-de="Eintritt in alle Parks und Schutzgebiete inklusive">Ingressi a tutti i parchi e riserve</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Acqua durante il tour" data-en="Drinking water during the tour" data-fr="Eau potable pendant le circuit" data-de="Trinkwasser während der Tour">Acqua durante il tour</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="4 pernottamenti in lodge o campo tendato" data-en="4 nights in a lodge or tented camp" data-fr="4 nuits en lodge ou camp de tentes" data-de="4 Übernachtungen in einer Lodge oder einem Zeltcamp">4 pernottamenti in lodge o campo tendato</span></div>
<div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Tutti i pasti inclusi" data-en="All meals included" data-fr="Tous les repas inclus" data-de="Alle Mahlzeiten inklusive">Tutti i pasti inclusi</span></div>

        </div>
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20al%20safari%205%20Giorni%20Amboseli%20Taita%20Hills%20e%20Tsavo." class="btn btn-wa" target="_blank" rel="noopener">
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