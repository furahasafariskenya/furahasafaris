<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Che Shale - Sabbia Dorata - Furaha Adventures Kenya</title>
  <meta name="description" content="Che Shale è una delle spiagge più belle e incontaminate della costa keniana, famosa per la sua sabbia finissima e dorata e per le acque turchesi che r - Furaha Adventures Kenya">
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
          <a href="../safari/1-gg-tsavo-est.php">1 GG Tsavo Est</a>
          <a href="../safari/2-gg-tsavo-est.php">2 GG Tsavo Est</a>
          <a href="../safari/2-gg-maasai-mara.php">2 GG Maasai Mara</a>
          <a href="../safari/3-gg-amboseli-e-tsavo-est.php">3 GG Amboseli e Tsavo Est</a>
          <a href="../safari/3-gg-maasai-mara.php">3 GG Maasai Mara</a>
          <a href="../safari/4-gg-maasai-mara-e-lago-nakuru.php">4 GG Maasai Mara e Lago Nakuru</a>
          <a href="../safari/5-gg-amboseli-taita-tsavo.php">5 GG Amboseli, Taita Hills, Tsavo</a>
          <a href="../safari/5-gg-mara-amboseli-tsavo-est.php">5 GG Mara, Amboseli, Tsavo Est</a>
          <a href="../safari/6-gg-mara-nakuru-amboseli-tsavo.php">6 GG Grand Tour</a>
          <a href="../safari/7-gg-grand-tour-kenya.php">7 GG Grand Tour Kenya</a>
        </div>
      </li>
      <li>
        <a href="../index.php#escursioni" class="nav-link">
          <span data-it="Escursioni" data-en="Excursions">Escursioni</span><span class="chev"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-chevron-down"></use></svg></span>
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
          <a href="arabuko-sokoke.php">Foresta di Arabuko Sokoke</a>
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
  <img class="page-hero-bg" src="../images/che4.jpeg" alt="Che Shale - Sabbia Dorata">
  <div class="page-hero-content">
    <span class="eyebrow" data-it="Spiaggia & Relax" data-en="Beach & Relaxation">Spiaggia & Relax</span>
    <h1 class="page-title">
      <span data-it="Che Shale - Sabbia Dorata" data-en="Che Shale - Golden Sand">Che Shale - Sabbia Dorata</span>
    </h1>
  </div>
</section>

<div class="page-body">
  <div class="esci-pg-layout">

    <div class="esci-pg-main">
      <h2 data-it="Descrizione" data-en="Description">Descrizione</h2>
      <p data-it="Che Shale è una delle spiagge più belle e incontaminate della costa keniana, famosa per la sua sabbia finissima e dorata e per le acque turchesi che ricordano i Caraibi. Situata a nord di Malindi, è raggiungibile solo via terra lungo una pista sterrata." data-en="Che Shale is one of the most beautiful and unspoilt beaches on the Kenyan coast, famous for its fine golden sand and turquoise waters reminiscent of the Caribbean. Located north of Malindi, it is reachable only via a dirt track.">Che Shale è una delle spiagge più belle e incontaminate della costa keniana, famosa per la sua sabbia finissima e dorata e per le acque turchesi che ricordano i Caraibi. Situata a nord di Malindi, è raggiungibile solo via terra lungo una pista sterrata.</p>

      <div class="esci-highlights" data-aos="fade-up">
        <div class="esci-hl">
          <span class="ico"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-umbrella"></use></svg></span>
          <strong data-it="Spiaggia Deserta" data-en="Deserted Beach">Spiaggia Deserta</strong>
          <span data-it="Quasi nessun turista" data-en="Almost no tourists">Quasi nessun turista</span>
        </div>
        <div class="esci-hl">
          <span class="ico"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-waves"></use></svg></span>
          <strong data-it="Mare Piatto" data-en="Calm Sea">Mare Piatto</strong>
          <span data-it="Ideale per nuotare" data-en="Perfect for swimming">Ideale per nuotare</span>
        </div>
        <div class="esci-hl">
          <span class="ico"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-camera"></use></svg></span>
          <strong data-it="Panorami" data-en="Scenery">Panorami</strong>
          <span data-it="Natura incontaminata" data-en="Unspoilt nature">Natura incontaminata</span>
        </div>
        <div class="esci-hl">
          <span class="ico"><svg class="icon" aria-hidden="true" focusable="false"><use href="#i-paw"></use></svg></span>
          <strong data-it="Relax" data-en="Relaxation">Relax</strong>
          <span data-it="Pace e tranquillita'" data-en="Peace and quiet">Pace e tranquillita'</span>
        </div>
      </div>

      <div class="esci-pg-imgs" data-aos="fade-up">
        <img loading="lazy" decoding="async" src="../images/che4.jpeg" alt="Che Shale - Sabbia Dorata">
        <img loading="lazy" decoding="async" src="../images/che.jpeg" alt="Che Shale - Sabbia Dorata">
        <img loading="lazy" decoding="async" src="../images/che2.jpeg" alt="Che Shale - Sabbia Dorata">
        <img loading="lazy" decoding="async" src="../images/che3.jpeg" alt="Che Shale - Sabbia Dorata">
      </div>

      <h2 data-it="Come si Svolge" data-en="How It Works">Come si Svolge</h2>
      <p data-it="Robert vi porta in questa spiaggia nascosta che pochi turisti conoscono. Durante il tragitto si attraversano villaggi di pescatori e si gode di splendidi scorci della campagna keniana. Una volta arrivati, troverete una spiaggia pressoché deserta di sabbia finissima e un mare piatto e trasparente. E' il posto ideale per rilassarsi, fare lunghe nuotate, passeggiare lungo la riva o semplicemente godersi il silenzio e la bellezza della natura incontaminata. Robert può organizzare un pranzo a base di pesce fresco da portare con sé." data-en="Robert takes you to this hidden beach that few tourists know. During the journey you pass through fishing villages and enjoy beautiful glimpses of the Kenyan countryside. Once there, you will find an almost deserted beach of fine sand and a flat, transparent sea. It is the ideal place to relax, swim, walk along the shore or simply enjoy the silence and beauty of unspoilt nature. Robert can arrange a fresh fish lunch to bring along.">Robert vi porta in questa spiaggia nascosta che pochi turisti conoscono. Durante il tragitto si attraversano villaggi di pescatori e si gode di splendidi scorci della campagna keniana. Una volta arrivati, troverete una spiaggia pressoché deserta di sabbia finissima e un mare piatto e trasparente. E' il posto ideale per rilassarsi, fare lunghe nuotate, passeggiare lungo la riva o semplicemente godersi il silenzio e la bellezza della natura incontaminata. Robert può organizzare un pranzo a base di pesce fresco da portare con sé.</p>

      <div style="margin-top:2.5rem;">
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20all%20escursione%20Che%20Shale%20Sabbia%20Dorata." class="btn btn-wa" target="_blank" rel="noopener">
          <svg class="icon" aria-hidden="true" focusable="false"><use href="#i-whatsapp"></use></svg>
          <span data-it="Prenota questa Escursione" data-en="Book this Excursion">Prenota questa Escursione</span>
        </a>
      </div>
    </div>

    <aside>
      <div class="booking-box" data-aos="fade-left">
        <div class="booking-title" data-it="Prenota Ora" data-en="Book Now">Prenota Ora</div>
        <p class="booking-sub" data-it="Contattaci su WhatsApp per un preventivo gratuito e personalizzato." data-en="Contact us on WhatsApp for a free personalized quote.">Contattaci su WhatsApp per un preventivo gratuito e personalizzato.</p>
        <div class="booking-includes">
          <div class="footer-col-title" style="margin-bottom:0.75rem;" data-it="Cosa include:" data-en="What's included:">Cosa include:</div>
          <div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Trasporto andata e ritorno" data-en="Round trip transport">Trasporto andata e ritorno</span></div>
          <div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Acqua durante il tour" data-en="Water during the tour">Acqua durante il tour</span></div>
          <div class="booking-item"><span class="chk"><svg class="icon icon--check" aria-hidden="true" focusable="false"><use href="#i-check-circle"></use></svg></span><span data-it="Guida locale con Robert" data-en="Local guide with Robert">Guida locale con Robert</span></div>
        </div>
        <a href="https://wa.me/254714434430?text=Salve,%20sono%20interessato%20all%20escursione%20Che%20Shale%20Sabbia%20Dorata." class="btn btn-wa" target="_blank" rel="noopener">
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