<?php
// SAFARI PAGE TEMPLATE - 1 GG Tsavo Est
// Duplicate this file for all other safari pages, update $safari variable below

$safari = array(
  'slug'      => '1-gg-tsavo-est',
  'duration'  => '1',
  'title_it'  => '1 Giorno - Tsavo Est',
  'title_en'  => '1 Day - Tsavo East',
  'hero_img'  => '../images/img10.jpg',
  'subtitle_it' => 'Un giorno nella savana rossa piu\' grande del Kenya',
  'subtitle_en' => 'A day in Kenya\'s largest red savanna',
  'intro_it'  => 'Il Tsavo Est e\' il parco nazionale piu\' grande del Kenya e uno dei piu\' grandi al mondo. Famoso per i suoi elefanti dalle zanne rosse e per la savana aperta che offre avvistamenti spettacolari di tutti i Big Five.',
  'intro_en'  => 'Tsavo East is Kenya\'s largest national park and one of the biggest in the world. Famous for its red-tusked elephants and the open savanna that offers spectacular sightings of all Big Five.',
  'itinerary' => array(
    array(
      'day_it' => 'Mattina - Partenza',
      'day_en' => 'Morning - Departure',
      'desc_it' => 'Partenza da Watamu o Malindi nelle prime ore del mattino. Viaggio verso il gate di ingresso del Tsavo Est con sosta per colazione durante il tragitto.',
      'desc_en' => 'Departure from Watamu or Malindi in the early morning. Drive to Tsavo East gate with a breakfast stop along the way.',
    ),
    array(
      'day_it' => 'Meta\' Mattina - Game Drive',
      'day_en' => 'Mid-Morning - Game Drive',
      'desc_it' => 'Ingresso nel parco e inizio del game drive. Avvistamento di elefanti, leoni, giraffe, zebre e molte altre specie. Le prime ore del mattino sono le migliori per vedere gli animali.',
      'desc_en' => 'Enter the park and begin the game drive. Spotting elephants, lions, giraffes, zebras and many other species. Early morning is the best time to see animals.',
    ),
    array(
      'day_it' => 'Mezzogiorno - Picnic e Sosta',
      'day_en' => 'Midday - Picnic & Rest',
      'desc_it' => 'Picnic nella savana in un\'area attrezzata del parco. Pausa relax con vista panoramica sulla pianura.',
      'desc_en' => 'Picnic in the savanna at a designated area within the park. Relaxation stop with panoramic views of the plain.',
    ),
    array(
      'day_it' => 'Pomeriggio - Game Drive e Rientro',
      'day_en' => 'Afternoon - Game Drive & Return',
      'desc_it' => 'Secondo game drive pomeridiano. I predatori diventano piu\' attivi con l\'abbassarsi del sole. Rientro verso Watamu/Malindi in tarda serata.',
      'desc_en' => 'Second afternoon game drive. Predators become more active as the sun lowers. Return to Watamu/Malindi in the late afternoon.',
    ),
  ),
  'includes' => array(
    array('it' => 'Trasporto in 4x4 con autista/guida', 'en' => '4x4 transport with driver/guide'),
    array('it' => 'Ingressi al parco inclusi', 'en' => 'Park entrance fees included'),
    array('it' => 'Acqua durante il tour', 'en' => 'Water throughout the tour'),
    array('it' => 'Pranzo al sacco / picnic', 'en' => 'Packed lunch / picnic'),
  ),
  'gallery'   => array('../images/img01.jpg', '../images/img04.jpg', '../images/img07.jpg', '../images/img08.jpg', '../images/img09.jpg', '../images/img13.jpg'),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $safari['title_it']; ?> - Furaha Adventures Kenya</title>
  <meta name="description" content="<?php echo $safari['subtitle_it']; ?> - Furaha Adventures Kenya">
  <link rel="icon" type="image/x-icon" href="../favicon.ico">
  <link rel="apple-touch-icon" href="../apple-touch-icon.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
<?php require __DIR__ . '/./../includes/icons.php'; ?>

<!-- NAV (same as homepage) -->
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
          <span data-it="Safari" data-en="Safari">Safari</span>
          <span class="chev"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-chevron-down"></use></svg></span>
        </a>
        <div class="dropdown">
          <a href="1-gg-tsavo-est.php" data-it="1 GG Tsavo Est" data-en="1 Day Tsavo East">1 GG Tsavo Est</a>
          <a href="2-gg-tsavo-est.php" data-it="2 GG Tsavo Est" data-en="2 Days Tsavo East">2 GG Tsavo Est</a>
          <a href="2-gg-maasai-mara.php" data-it="2 GG Maasai Mara" data-en="2 Days Maasai Mara">2 GG Maasai Mara</a>
          <a href="3-gg-amboseli-tsavo.php" data-it="3 GG Amboseli e Tsavo Est" data-en="3 Days Amboseli & Tsavo East">3 GG Amboseli e Tsavo Est</a>
          <a href="3-gg-maasai-mara.php" data-it="3 GG Maasai Mara" data-en="3 Days Maasai Mara">3 GG Maasai Mara</a>
          <a href="4-gg-maasai-mara-nakuru.php" data-it="4 GG Maasai Mara e Lago Nakuru" data-en="4 Days Maasai Mara & Lake Nakuru">4 GG Maasai Mara e Lago Nakuru</a>
          <a href="5-gg-amboseli-tsavo.php" data-it="5 GG Amboseli, Taita, Tsavo" data-en="5 Days Amboseli, Taita, Tsavo">5 GG Amboseli, Taita, Tsavo</a>
          <a href="5-gg-mara-amboseli-tsavo.php" data-it="5 GG Mara, Amboseli, Tsavo" data-en="5 Days Mara, Amboseli, Tsavo">5 GG Mara, Amboseli, Tsavo</a>
          <a href="6-gg-mara-nakuru-amboseli-tsavo.php" data-it="6 GG Grand Tour" data-en="6 Day Grand Tour">6 GG Grand Tour</a>
          <a href="7-gg-mara-nakuru-amboseli-tsavo.php" data-it="7 GG Grand Tour Kenya" data-en="7 Day Grand Kenya Tour">7 GG Grand Tour Kenya</a>
        </div>
      </li>
      <li>
        <a href="../index.php#escursioni" class="nav-link">
          <span data-it="Escursioni" data-en="Excursions">Escursioni</span>
          <span class="chev"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-chevron-down"></use></svg></span>
        </a>
        <div class="dropdown">
          <a href="../escursioni/safari-blu.php">Safari Blu</a>
          <a href="../escursioni/canyon-marafa.php">Canyon di Marafa</a>
          <a href="../escursioni/isola-robinson.php">Isola di Robinson</a>
          <a href="../escursioni/crab-shack.php">Crab Shack - Dabaso</a>
          <a href="../escursioni/rovine-gedi.php">Rovine di Gedi</a>
          <a href="../escursioni/arabuko-sokoke.php">Arabuko Sokoke</a>
          <a href="../escursioni/che-shale.php">Che Shale</a>
          <a href="../escursioni/giro-malindi.php">Giro di Malindi</a>
        </div>
      </li>
      <li><a href="../index.php#recensioni" class="nav-link" data-it="Recensioni" data-en="Reviews">Recensioni</a></li>
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
        <a href="https://wa.me/254714434430?text=Salve,%20vorrei%20informazioni%20sul%20safari%20<?php echo urlencode($safari['title_it']); ?>." class="nav-cta" target="_blank" rel="noopener">
          <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg> WhatsApp
        </a>
      </li>
    </ul>
    <button class="nav-burger" id="nav-burger" aria-label="Menu" data-aria-en="Menu" data-aria-it="Menu" data-aria-fr="Menu" data-aria-de="Menü">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- MOBILE NAV -->
<div class="mobile-nav" id="mobile-nav">
  <button class="mobile-close" id="mobile-close" aria-label="Close" data-aria-en="Close" data-aria-it="Chiudi" data-aria-fr="Fermer" data-aria-de="Schließen"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-close"></use></svg></button>
  <a href="../index.php" class="mobile-nav-title">Home</a>
  <a href="../index.php#safari" class="mobile-nav-title" data-it="Safari" data-en="Safari">Safari</a>
  <a href="../index.php#escursioni" class="mobile-nav-title" data-it="Escursioni" data-en="Excursions">Escursioni</a>
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

<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-bg" src="<?php echo $safari['hero_img']; ?>" alt="<?php echo $safari['title_it']; ?>">
  <div class="page-hero-content">
    <span class="eyebrow" data-it="Safari - <?php echo $safari['duration']; ?> Giorno" data-en="Safari - <?php echo $safari['duration']; ?> Day">
      Safari - <?php echo $safari['duration']; ?> Giorno
    </span>
    <h1 class="page-title">
      <span data-it="<?php echo $safari['title_it']; ?>" data-en="<?php echo $safari['title_en']; ?>"><?php echo $safari['title_it']; ?></span>
    </h1>
  </div>
</section>

<!-- PAGE BODY -->
<div class="page-body">
  <div class="safari-layout">

    <!-- MAIN CONTENT -->
    <div class="safari-main">
      <h2 data-it="Descrizione" data-en="Description">Descrizione</h2>
      <p data-it="<?php echo $safari['intro_it']; ?>" data-en="<?php echo $safari['intro_en']; ?>"><?php echo $safari['intro_it']; ?></p>

      <!-- Gallery -->
      <div class="safari-imgs" data-aos="fade-up">
        <?php foreach ($safari['gallery'] as $img): ?>
          <img loading="lazy" decoding="async" src="<?php echo $img; ?>" alt="Safari Kenya">
        <?php endforeach; ?>
      </div>

      <h2 data-it="Itinerario" data-en="Itinerary">Itinerario</h2>
      <div class="itinerary">
        <?php foreach ($safari['itinerary'] as $i => $step): ?>
        <div class="itin-day" data-aos="fade-up" data-aos-delay="<?php echo $i * 60; ?>">
          <div class="day-num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
          <div>
            <div class="day-lbl" data-it="<?php echo $step['day_it']; ?>" data-en="<?php echo $step['day_en']; ?>"><?php echo $step['day_it']; ?></div>
            <div class="day-desc" data-it="<?php echo $step['desc_it']; ?>" data-en="<?php echo $step['desc_en']; ?>"><?php echo $step['desc_it']; ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <div style="margin-top: 2.5rem;">
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20al%20safari%20<?php echo urlencode($safari['title_it']); ?>." class="btn btn-wa" target="_blank" rel="noopener">
          <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg>
          <span data-it="Prenota questo Safari" data-en="Book this Safari">Prenota questo Safari</span>
        </a>
      </div>
    </div>

    <!-- SIDEBAR -->
    <aside>
      <div class="booking-box" data-aos="fade-left">
        <div class="booking-title" data-it="Vuoi Prenotare?" data-en="Ready to Book?">Vuoi Prenotare?</div>
        <p class="booking-sub" data-it="Contattaci su WhatsApp per un preventivo gratuito e personalizzato." data-en="Contact us on WhatsApp for a free, personalized quote.">Contattaci su WhatsApp per un preventivo gratuito e personalizzato.</p>

        <div class="booking-includes">
          <div class="footer-col-title" style="margin-bottom:0.75rem;" data-it="Cosa include:" data-en="What's included:">Cosa include:</div>
          <?php foreach ($safari['includes'] as $inc): ?>
          <div class="booking-item">
            <span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span>
            <span data-it="<?php echo $inc['it']; ?>" data-en="<?php echo $inc['en']; ?>"><?php echo $inc['it']; ?></span>
          </div>
          <?php endforeach; ?>
        </div>

        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20al%20safari%20<?php echo urlencode($safari['title_it']); ?>." class="btn btn-wa" target="_blank" rel="noopener">
          <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg>
          <span data-it="Chiedi Preventivo" data-en="Request Quote">Chiedi Preventivo</span>
        </a>

        <div style="margin-top:1.25rem; padding-top:1.25rem; border-top: 1px solid var(--bark);">
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

<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-bottom" style="border-top:none; padding:2rem 0;">
      <p class="footer-copy">
        &copy; <?php echo date('Y'); ?> Furaha Adventures Kenya. <span data-it="Tutti i diritti riservati." data-en="All rights reserved.">Tutti i diritti riservati.</span>
        | <span data-it="Progettato da" data-en="Designed by">Progettato da</span> <a href="https://wa.me/254707412795" target="_blank" rel="noopener">Mega Designers KE</a>
      </p>
      <a href="../index.php" class="btn btn-outline" style="font-size:0.75rem; padding:0.45rem 1.1rem;" data-it="&#8592; Torna alla Home" data-en="&#8592; Back to Home">&#8592; Torna alla Home</a>
    </div>
  </div>
</footer>

<!-- WA FLOAT -->
<a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20al%20safari%20<?php echo urlencode($safari['title_it']); ?>." class="wa-float" target="_blank" rel="noopener" aria-label="WhatsApp">
  <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
    <path d="M16 0C7.164 0 0 7.164 0 16c0 2.82.737 5.47 2.027 7.773L0 32l8.418-2.004A15.93 15.93 0 0016 32c8.836 0 16-7.164 16-16S24.836 0 16 0zm8.227 22.773c-.344.965-2.004 1.844-2.762 1.965-.715.113-1.617.16-2.605-.164-.601-.195-1.375-.453-2.364-.887-4.164-1.8-6.883-6.004-7.094-6.285-.211-.281-1.723-2.289-1.723-4.367S8.86 10.5 9.375 9.984c.453-.453.965-.566 1.289-.566.32 0 .641.004.922.016.296.012.695-.113.984.75.3.879 1.02 3.035 1.11 3.258.09.219.148.477.016.765-.137.289-.203.469-.406.719-.203.25-.43.558-.609.75-.203.203-.414.422-.176.828.238.406 1.055 1.742 2.266 2.82 1.555 1.386 2.867 1.816 3.27 2.02.406.203.644.172.882-.102.239-.27 1.02-1.188 1.293-1.594.269-.406.539-.34.91-.203.375.133 2.386 1.126 2.793 1.332.406.203.676.301.777.47.098.167.098.965-.246 1.926z"/>
  </svg>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="../js/translations.js"></script>
<script src="../js/main.js"></script>
</body>
</html>
