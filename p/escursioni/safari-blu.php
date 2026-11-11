<?php
// ESCURSIONE PAGE TEMPLATE - Safari Blu
// Duplicate for all other escursioni pages, update $esci array below

$esci = array(
  'title_it'    => 'Safari Blu',
  'title_en'    => 'Blue Safari',
  'tag_it'      => 'Escursione in mare',
  'tag_en'      => 'Sea Excursion',
  'hero_img'    => '../images/img33.jpg',
  'subtitle_it' => 'Snorkeling, delfini e pranzo su una barca a fondo di vetro',
  'subtitle_en' => 'Snorkeling, dolphins and lunch on a glass-bottom boat',
  'intro_it'    => 'Il Safari Blu e\' una delle escursioni piu\' amate dai turisti che visitano Watamu e Malindi. A bordo di una barca a fondo di vetro, scivolate sull\'Oceano Indiano alla scoperta di coralli, pesci coloratissimi e, con un po\' di fortuna, delfini e tartarughe marine.',
  'intro_en'    => 'The Blue Safari is one of the most loved excursions for tourists visiting Watamu and Malindi. On board a glass-bottom boat, you glide across the Indian Ocean discovering corals, colourful fish and, with a little luck, dolphins and sea turtles.',
  'highlights'  => array(
    array('ico' => '<svg class="icon" aria-hidden="true" focusable="false"><use href="#i-fish"></use></svg>', 'lbl_it' => 'Delfini', 'lbl_en' => 'Dolphins', 'val_it' => 'Avvistamento spesso garantito', 'val_en' => 'Often spotted'),
    array('ico' => '<svg class="icon" aria-hidden="true" focusable="false"><use href="#i-waves"></use></svg>', 'lbl_it' => 'Snorkeling', 'lbl_en' => 'Snorkeling', 'val_it' => 'Barriera corallina', 'val_en' => 'Coral reef'),
    array('ico' => '<svg class="icon" aria-hidden="true" focusable="false"><use href="#i-utensils"></use></svg>', 'lbl_it' => 'Pranzo', 'lbl_en' => 'Lunch', 'val_it' => 'Incluso a bordo', 'val_en' => 'Included on board'),
    array('ico' => '<svg class="icon" aria-hidden="true" focusable="false"><use href="#i-sun"></use></svg>', 'lbl_it' => 'Durata', 'lbl_en' => 'Duration', 'val_it' => 'Giornata in terra', 'val_en' => 'Full day on land'),
  ),
  'desc_it'     => 'La mattina, Robert ti verra\' a prendere e insieme raggiungerete il porto di imbarco. La barca a fondo di vetro salpera\' verso le acque cristalline dell\'Oceano Indiano. Durante l\'escursione avrete la possibilita\' di fare snorkeling nella barriera corallina, osservare i delfini nel loro habitat naturale e godervi il sole e la brezza marina. Il pranzo e\' servito direttamente a bordo con pesce fresco, riso e frutta di stagione.',
  'desc_en'     => 'In the morning, Robert will pick you up and together you will reach the boarding port. The barca a fondo di vetro will sail towards the crystal-clear waters of the Indian Ocean. During the excursion you will have the chance to snorkel in the coral reef, observe dolphins in their natural habitat and enjoy the sun and sea breeze. Lunch is served directly on board with fresh fish, rice and seasonal fruit.',
  'includes'    => array(
    array('it' => 'Trasporto andata e ritorno', 'en' => 'Round trip transport'),
    array('it' => 'Noleggio maschera e pinne', 'en' => 'Mask and fins rental'),
    array('it' => 'Pranzo a bordo', 'en' => 'Lunch on board'),
    array('it' => 'Acqua e bibite', 'en' => 'Water and soft drinks'),
    array('it' => 'Guida locale esperta', 'en' => 'Expert local guide'),
  ),
  'gallery'     => array('../images/img37.jpg', '../images/img33.jpg', '../images/img20.jpg', '../images/img25.jpg'),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $esci['title_it']; ?> - Furaha Adventures Kenya</title>
  <meta name="description" content="<?php echo $esci['subtitle_it']; ?> - Furaha Adventures Kenya">
  <link rel="icon" type="image/x-icon" href="../favicon.ico">
  <link rel="apple-touch-icon" href="../apple-touch-icon.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
<?php require __DIR__ . '/./../includes/icons.php'; ?>

<!-- NAV -->
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
          <a href="../safari/1-gg-tsavo-est.php">1 GG Tsavo Est</a>
          <a href="../safari/2-gg-tsavo-est.php">2 GG Tsavo Est</a>
          <a href="../safari/2-gg-maasai-mara.php">2 GG Maasai Mara</a>
          <a href="../safari/3-gg-amboseli-tsavo.php">3 GG Amboseli e Tsavo Est</a>
          <a href="../safari/3-gg-maasai-mara.php">3 GG Maasai Mara</a>
          <a href="../safari/4-gg-maasai-mara-nakuru.php">4 GG Maasai Mara e Lago Nakuru</a>
          <a href="../safari/5-gg-amboseli-tsavo.php">5 GG Amboseli, Taita, Tsavo</a>
          <a href="../safari/7-gg-mara-nakuru-amboseli-tsavo.php">7 GG Grand Tour Kenya</a>
        </div>
      </li>
      <li>
        <a href="../index.php#escursioni" class="nav-link">
          <span data-it="Escursioni" data-en="Excursions">Escursioni</span>
          <span class="chev"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-chevron-down"></use></svg></span>
        </a>
        <div class="dropdown">
          <a href="safari-blu.php">Safari Blu</a>
          <a href="safari-blu-2.php">Safari Blu (Sardegna 2)</a>
          <a href="crab-shack.php">Crab Shack - Dabaso</a>
          <a href="canyon-marafa.php">Canyon di Marafa</a>
          <a href="isola-robinson.php">Isola di Robinson</a>
          <a href="che-shale.php">Che Shale</a>
          <a href="giro-malindi.php">Giro di Malindi</a>
          <a href="rovine-gedi.php">Rovine di Gedi</a>
          <a href="arabuko-sokoke.php">Arabuko Sokoke</a>
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
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20all%27escursione%20<?php echo urlencode($esci['title_it']); ?>." class="nav-cta" target="_blank" rel="noopener">
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
  <button class="mobile-close" id="mobile-close" aria-label="Close" data-aria-en="Close" data-aria-it="Chiudi" data-aria-fr="Fermer" data-aria-de="Schließen"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-close"></use></svg></button>
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

<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-bg" src="<?php echo $esci['hero_img']; ?>" alt="<?php echo $esci['title_it']; ?>">
  <div class="page-hero-content">
    <span class="eyebrow" data-it="<?php echo $esci['tag_it']; ?>" data-en="<?php echo $esci['tag_en']; ?>"><?php echo $esci['tag_it']; ?></span>
    <h1 class="page-title">
      <span data-it="<?php echo $esci['title_it']; ?>" data-en="<?php echo $esci['title_en']; ?>"><?php echo $esci['title_it']; ?></span>
    </h1>
  </div>
</section>

<!-- PAGE BODY -->
<div class="page-body">
  <div class="esci-pg-layout">

    <!-- MAIN -->
    <div class="esci-pg-main">
      <h2 data-it="Descrizione" data-en="Description">Descrizione</h2>
      <p data-it="<?php echo $esci['intro_it']; ?>" data-en="<?php echo $esci['intro_en']; ?>"><?php echo $esci['intro_it']; ?></p>

      <!-- Highlights -->
      <div class="esci-highlights" data-aos="fade-up">
        <?php foreach ($esci['highlights'] as $hl): ?>
        <div class="esci-hl">
          <span class="ico"><?php echo $hl['ico']; ?></span>
          <strong data-it="<?php echo $hl['lbl_it']; ?>" data-en="<?php echo $hl['lbl_en']; ?>"><?php echo $hl['lbl_it']; ?></strong>
          <span data-it="<?php echo $hl['val_it']; ?>" data-en="<?php echo $hl['val_en']; ?>"><?php echo $hl['val_it']; ?></span>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Gallery -->
      <div class="esci-pg-imgs" data-aos="fade-up">
        <?php foreach ($esci['gallery'] as $img): ?>
          <img loading="lazy" decoding="async" src="<?php echo $img; ?>" alt="<?php echo $esci['title_it']; ?>">
        <?php endforeach; ?>
      </div>

      <h2 data-it="Come si Svolge" data-en="How It Works">Come si Svolge</h2>
      <p data-it="<?php echo $esci['desc_it']; ?>" data-en="<?php echo $esci['desc_en']; ?>"><?php echo $esci['desc_it']; ?></p>

      <div style="margin-top: 2.5rem;">
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20all%27escursione%20<?php echo urlencode($esci['title_it']); ?>." class="btn btn-wa" target="_blank" rel="noopener">
          <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg>
          <span data-it="Prenota questa Escursione" data-en="Book this Excursion">Prenota questa Escursione</span>
        </a>
      </div>
    </div>

    <!-- SIDEBAR -->
    <aside>
      <div class="booking-box" data-aos="fade-left">
        <div class="booking-title" data-it="Prenota Ora" data-en="Book Now">Prenota Ora</div>
        <p class="booking-sub" data-it="Scrivici su WhatsApp per un preventivo gratuito e personalizzato." data-en="Write us on WhatsApp for a free personalized quote.">Scrivici su WhatsApp per un preventivo gratuito e personalizzato.</p>

        <div class="booking-includes">
          <div class="footer-col-title" style="margin-bottom:0.75rem;" data-it="Cosa include:" data-en="What's included:">Cosa include:</div>
          <?php foreach ($esci['includes'] as $inc): ?>
          <div class="booking-item">
            <span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span>
            <span data-it="<?php echo $inc['it']; ?>" data-en="<?php echo $inc['en']; ?>"><?php echo $inc['it']; ?></span>
          </div>
          <?php endforeach; ?>
        </div>

        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20all%27escursione%20<?php echo urlencode($esci['title_it']); ?>." class="btn btn-wa" target="_blank" rel="noopener">
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
        &copy; <?php echo date('Y'); ?> Furaha Adventures Kenya.
        <span data-it="Tutti i diritti riservati." data-en="All rights reserved.">Tutti i diritti riservati.</span>
        | <span data-it="Progettato da" data-en="Designed by">Progettato da</span>
        <a href="https://wa.me/254707412795" target="_blank" rel="noopener">Mega Designers KE</a>
      </p>
      <a href="../index.php" class="btn btn-outline" style="font-size:0.75rem; padding:0.45rem 1.1rem;" data-it="&#8592; Torna alla Home" data-en="&#8592; Back to Home">&#8592; Torna alla Home</a>
    </div>
  </div>
</footer>

<!-- WA FLOAT -->
<a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20all%27escursione%20<?php echo urlencode($esci['title_it']); ?>." class="wa-float" target="_blank" rel="noopener" aria-label="WhatsApp">
  <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
    <path d="M16 0C7.164 0 0 7.164 0 16c0 2.82.737 5.47 2.027 7.773L0 32l8.418-2.004A15.93 15.93 0 0016 32c8.836 0 16-7.164 16-16S24.836 0 16 0zm8.227 22.773c-.344.965-2.004 1.844-2.762 1.965-.715.113-1.617.16-2.605-.164-.601-.195-1.375-.453-2.364-.887-4.164-1.8-6.883-6.004-7.094-6.285-.211-.281-1.723-2.289-1.723-4.367S8.86 10.5 9.375 9.984c.453-.453.965-.566 1.289-.566.32 0 .641.004.922.016.296.012.695-.113.984.75.3.879 1.02 3.035 1.11 3.258.09.219.148.477.016.765-.137.289-.203.469-.406.719-.203.25-.43.558-.609.75-.203.203-.414.422-.176.828.238.406 1.055 1.742 2.266 2.82 1.555 1.386 2.867 1.816 3.27 2.02.406.203.644.172.882-.102.239-.27 1.02-1.188 1.293-1.594.269-.406.539-.34.91-.203.375.133 2.386 1.126 2.793 1.332.406.203.676.301.777.47.098.167.098.965-.246 1.926z"/>
  </svg>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="../js/translations.js"></script>
<script src="../js/main.js"></script>
</body>
</html>
