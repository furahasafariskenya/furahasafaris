<?php
// Furaha Adventures Kenya - Homepage
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title data-it="Furaha Adventures Kenya - Vagare spesso, Meraviglia sempre" data-en="Furaha Adventures Kenya - Wander Often, Wonder Always">Furaha Adventures Kenya - Wander Often, Wonder Always</title>
  <meta name="description" content="Authentic safaris and coastal excursions in Kenya with Robert, a local Watamu guide." data-description-it="Safari ed escursioni in Kenya con Robert. Watamu, Malindi, Tsavo, Maasai Mara e molto altro. Contattaci su WhatsApp.">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- NAV -->
<nav class="site-nav" id="site-nav">
  <div class="nav-inner">
    <a href="index.php" class="nav-logo">
      <img src="images/logo.png" alt="Furaha Adventures Kenya">
    </a>

    <ul class="nav-menu">
      <li><a href="index.php" class="nav-link" data-it="Home" data-en="Home">Home</a></li>
      <li><a href="#chi-sono" class="nav-link" data-it="Chi Sono" data-en="About">Chi Sono</a></li>

      <li>
        <a href="#safari" class="nav-link">
          <span data-it="Safari" data-en="Safari">Safari</span>
          <span class="chev">&#9660;</span>
        </a>
        <div class="dropdown">
          <a href="safari/1-gg-tsavo-est.php" data-it="1 GG Tsavo Est" data-en="1 Day Tsavo East">1 GG Tsavo Est</a>
          <a href="safari/2-gg-tsavo-est.php" data-it="2 GG Tsavo Est" data-en="2 Days Tsavo East">2 GG Tsavo Est</a>
          <a href="safari/2-gg-maasai-mara.php" data-it="2 GG Maasai Mara" data-en="2 Days Maasai Mara">2 GG Maasai Mara</a>
          <a href="safari/3-gg-amboseli-e-tsavo-est.php" data-it="3 GG Amboseli e Tsavo Est" data-en="3 Days Amboseli & Tsavo East">3 GG Amboseli e Tsavo Est</a>
          <a href="safari/3-gg-maasai-mara.php" data-it="3 GG Maasai Mara" data-en="3 Days Maasai Mara">3 GG Maasai Mara</a>
          <a href="safari/4-gg-maasai-mara-e-lago-nakuru.php" data-it="4 GG Maasai Mara e Lago Nakuru" data-en="4 Days Maasai Mara & Lake Nakuru">4 GG Maasai Mara e Lago Nakuru</a>
          <a href="safari/5-gg-amboseli-taita-tsavo.php" data-it="5 GG Amboseli, Taita Hills, Tsavo" data-en="5 Days Amboseli, Taita Hills, Tsavo">5 GG Amboseli, Taita Hills, Tsavo</a>
          <a href="safari/5-gg-mara-amboseli-tsavo-est.php" data-it="5 GG Mara, Amboseli, Tsavo Est" data-en="5 Days Mara, Amboseli, Tsavo East">5 GG Mara, Amboseli, Tsavo Est</a>
          <a href="safari/6-gg-mara-nakuru-amboseli-tsavo.php" data-it="6 GG Mara, Nakuru, Amboseli, Tsavo" data-en="6 Days Mara, Nakuru, Amboseli, Tsavo">6 GG Mara, Nakuru, Amboseli, Tsavo</a>
          <a href="safari/7-gg-grand-tour-kenya.php" data-it="7 GG Grand Tour Kenya" data-en="7 Days Grand Kenya Tour">7 GG Grand Tour Kenya</a>
        </div>
      </li>

      <li>
        <a href="#escursioni" class="nav-link">
          <span data-it="Escursioni" data-en="Excursions">Escursioni</span>
          <span class="chev">&#9660;</span>
        </a>
        <div class="dropdown">
          <a href="escursioni/safari-blu.php" data-it="Safari Blu" data-en="Blue Safari">Safari Blu</a>
          <a href="escursioni/safari-blu-2.php" data-it="Safari Blu (Sardegna 2)" data-en="Blue Safari (Sardinia 2)">Safari Blu (Sardegna 2)</a>
          <a href="escursioni/crab-shack.php" data-it="Crab Shack - Dabaso" data-en="Crab Shack - Dabaso">Crab Shack - Dabaso</a>
          <a href="escursioni/canyon-marafa.php" data-it="Canyon di Marafa" data-en="Marafa Canyon">Canyon di Marafa</a>
          <a href="escursioni/isola-robinson.php" data-it="Isola di Robinson" data-en="Robinson Island">Isola di Robinson</a>
          <a href="escursioni/che-shale.php" data-it="Che Shale (Sabbia Dorata)" data-en="Che Shale (Golden Sand)">Che Shale (Sabbia Dorata)</a>
          <a href="escursioni/giro-malindi.php" data-it="Giro di Malindi" data-en="Malindi Tour">Giro di Malindi</a>
          <a href="escursioni/rovine-gedi.php" data-it="Rovine di Gedi" data-en="Gedi Ruins">Rovine di Gedi</a>
          <a href="escursioni/arabuko-sokoke.php" data-it="Foresta di Arabuko Sokoke" data-en="Arabuko Sokoke Forest">Foresta di Arabuko Sokoke</a>
        </div>
      </li>

      <li><a href="#recensioni" class="nav-link" data-it="Recensioni" data-en="Reviews">Recensioni</a></li>
      <li><a href="#servizi" class="nav-link" data-it="Servizi" data-en="Services">Servizi</a></li>
      <li><a href="#prenota" class="nav-link" data-it="Prenota" data-en="Book" style="color:var(--dust);">Prenota</a></li>

      <li><label class="language-picker" aria-label="Select website language" data-aria-en="Select website language" data-aria-it="Seleziona la lingua del sito" data-aria-fr="Choisir la langue du site" data-aria-de="Website-Sprache auswählen">
          <span class="language-picker-icon" aria-hidden="true">◎</span>
          <select class="language-select" aria-label="Select website language" data-aria-en="Select website language" data-aria-it="Seleziona la lingua del sito" data-aria-fr="Choisir la langue du site" data-aria-de="Website-Sprache auswählen">
            <option value="en">English</option>
            <option value="it">Italiano</option>
            <option value="fr">Français</option>
            <option value="de">Deutsch</option>
          </select>
        </label></li>
      <li>
        <a href="https://wa.me/254714434430?text=Salve,%20sto%20gentilmente%20informando%20sui%20servizi%20Safari%20ed%20Escursioni%20che%20offri." class="nav-cta" target="_blank" rel="noopener">
          <i class="fab fa-whatsapp"></i>
          <span data-it="WhatsApp" data-en="WhatsApp">WhatsApp</span>
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
  <button class="mobile-close" id="mobile-close" aria-label="Close" data-aria-en="Close" data-aria-it="Chiudi" data-aria-fr="Fermer" data-aria-de="Schließen">&times;</button>

  <a href="index.php" class="mobile-nav-title" data-it="Home" data-en="Home">Home</a>
  <a href="#chi-sono" class="mobile-nav-title" data-it="Chi Sono" data-en="About">Chi Sono</a>

  <span class="mobile-nav-title" data-it="Safari" data-en="Safari">Safari</span>
  <div class="mobile-nav-sub">
    <a href="safari/1-gg-tsavo-est.php">1 GG Tsavo Est</a>
    <a href="safari/2-gg-tsavo-est.php">2 GG Tsavo Est</a>
    <a href="safari/2-gg-maasai-mara.php">2 GG Maasai Mara</a>
    <a href="safari/3-gg-amboseli-e-tsavo-est.php">3 GG Amboseli e Tsavo Est</a>
    <a href="safari/3-gg-maasai-mara.php">3 GG Maasai Mara</a>
    <a href="safari/4-gg-maasai-mara-e-lago-nakuru.php">4 GG Maasai Mara e Lago Nakuru</a>
    <a href="safari/5-gg-amboseli-taita-tsavo.php">5 GG Amboseli, Taita Hills, Tsavo</a>
    <a href="safari/5-gg-mara-amboseli-tsavo-est.php">5 GG Mara, Amboseli, Tsavo Est</a>
    <a href="safari/6-gg-mara-nakuru-amboseli-tsavo.php">6 GG Mara, Nakuru, Amboseli, Tsavo</a>
    <a href="safari/7-gg-grand-tour-kenya.php">7 GG Grand Tour Kenya</a>
  </div>

  <span class="mobile-nav-title" data-it="Escursioni" data-en="Excursions">Escursioni</span>
  <div class="mobile-nav-sub">
    <a href="escursioni/safari-blu.php">Safari Blu</a>
    <a href="escursioni/crab-shack.php">Crab Shack - Dabaso</a>
    <a href="escursioni/canyon-marafa.php">Canyon di Marafa</a>
    <a href="escursioni/isola-robinson.php">Isola di Robinson</a>
    <a href="escursioni/che-shale.php">Che Shale</a>
    <a href="escursioni/giro-malindi.php">Giro di Malindi</a>
    <a href="escursioni/rovine-gedi.php">Rovine di Gedi</a>
    <a href="escursioni/arabuko-sokoke.php">Foresta di Arabuko Sokoke</a>
  </div>

  <a href="#recensioni" class="mobile-nav-title" data-it="Recensioni" data-en="Reviews">Recensioni</a>
  <a href="#prenota" class="mobile-nav-title" data-it="Prenota" data-en="Book" style="color:var(--savanna);">Prenota</a>
  <a href="https://wa.me/254714434430" class="btn btn-wa" target="_blank" rel="noopener" style="margin-top:0.5rem;">
    <i class="fab fa-whatsapp"></i> WhatsApp
  </a>
  <label class="language-picker language-picker-mobile" aria-label="Select website language" data-aria-en="Select website language" data-aria-it="Seleziona la lingua del sito" data-aria-fr="Choisir la langue du site" data-aria-de="Website-Sprache auswählen">
    <span class="language-picker-icon" aria-hidden="true">◎</span>
    <select class="language-select" aria-label="Select website language" data-aria-en="Select website language" data-aria-it="Seleziona la lingua del sito" data-aria-fr="Choisir la langue du site" data-aria-de="Website-Sprache auswählen">
      <option value="en">English</option>
      <option value="it">Italiano</option>
      <option value="fr">Français</option>
      <option value="de">Deutsch</option>
    </select>
  </label>
</div>

<!-- HERO (SPLIT) -->
<section class="hero">
  <div class="hero-img-side">
    <img src="images/tsavo-gate.jpg" alt="Robert con clienti al Tsavo East National Park" id="hero-main-img">
  </div>

  <div class="hero-text-side">
    <span class="hero-badge" data-it="Watamu, Kenya" data-en="Watamu, Kenya">Watamu, Kenya</span>

    <h1 class="hero-title">
      <span data-it="Dove Ogni Safari &egrave; un Viaggio di <em>Gioia</em>" data-en="Where Every Safari Is a Journey of <em>Joy</em>">Dove Ogni Safari &egrave; un Viaggio di <em>Gioia</em></span>
    </h1>

    <p class="hero-sub" data-it="Vivi il Kenya autentico con Robert - guida locale di Watamu. Safari nei grandi parchi, escursioni sulla costa e momenti indimenticabili." data-en="Experience authentic Kenya with Robert, a local Watamu guide. Safari in the great parks, coastal excursions and unforgettable moments.">
      Vivi il Kenya autentico con Robert - guida locale di Watamu. Safari nei grandi parchi, escursioni sulla costa e momenti indimenticabili.
    </p>

    <div class="hero-actions">
      <a href="#safari" class="btn btn-primary" data-it="Esplora i Pacchetti &#8594;" data-en="Explore Packages &#8594;">Esplora i Pacchetti &#8594;</a>
      <a href="https://wa.me/254714434430?text=Salve,%20sto%20gentilmente%20informando%20sui%20servizi%20Safari%20ed%20Escursioni%20che%20offri." class="btn btn-outline" target="_blank" rel="noopener" data-it="Scrivici su WhatsApp" data-en="Chat on WhatsApp">Scrivici su WhatsApp</a>
    </div>

    <div class="hero-stats">
      <div>
        <div class="stat-num">10+</div>
        <div class="stat-lbl" data-it="Anni di esperienza" data-en="Years of experience">Anni di esperienza</div>
      </div>
      <div>
        <div class="stat-num">500+</div>
        <div class="stat-lbl" data-it="Turisti felici" data-en="Happy tourists">Turisti felici</div>
      </div>
      <div>
        <div class="stat-num">19+</div>
        <div class="stat-lbl" data-it="Destinazioni" data-en="Destinations">Destinazioni</div>
      </div>
    </div>
  </div>
</section>

<!-- CHI SONO -->
<section class="about-wrap section-pad" id="chi-sono">
  <div class="container">
    <div class="about-grid">
      <div class="about-imgs" data-aos="fade-right">
        <img class="about-img-main" src="images/img16.jpg" alt="Robert - Furaha Adventures">
        <img loading="lazy" decoding="async" class="about-img-sec" src="images/tsavo.jpeg" alt="Robert with clients">
        <div class="about-badge">
          <strong>10+</strong>
          <span data-it="Anni di<br>Esperienza" data-en="Years of<br>Experience">Anni di<br>Esperienza</span>
        </div>
      </div>

      <div class="about-text" data-aos="fade-left">
        <span class="eyebrow" data-it="Chi Sono" data-en="About Me">Chi Sono</span>
        <h2 data-it="Chi Sono: Robert, la Tua Guida in Kenya" data-en="About Me: Robert, Your Kenya Guide">Chi Sono: Robert, la Tua Guida in Kenya</h2>
        <p data-it="Benvenuti nel mondo di Furaha Adventures Kenya. Sono un nativo di Watamu e mi dedico appassionatamente al mondo dei safari e delle escursioni lungo la costa keniana." data-en="Welcome to the world of Furaha Adventures Kenya. I'm a native of Watamu and I'm passionately dedicated to safaris and excursions along the Kenyan coast.">Benvenuti nel mondo di Furaha Adventures Kenya. Sono un nativo di Watamu e mi dedico appassionatamente al mondo dei safari e delle escursioni lungo la costa keniana.</p>
        <p data-it="Il mio obiettivo principale e' far scoprire le meraviglie del Kenya ai turisti italiani che desiderano vivere esperienze autentiche e indimenticabili. Non solo safari - ma un viaggio nel cuore vero dell'Africa." data-en="My main goal is to help Italian tourists discover the wonders of Kenya through authentic and unforgettable experiences. Not just safaris - but a journey into the true heart of Africa.">Il mio obiettivo principale e' far scoprire le meraviglie del Kenya ai turisti italiani che desiderano vivere esperienze autentiche e indimenticabili. Non solo safari - ma un viaggio nel cuore vero dell'Africa.</p>

        <div class="about-traits">
          <div class="trait">
            <div class="trait-ico">&#127757;</div>
            <div class="trait-txt">
              <strong data-it="Locale e Autentico" data-en="Local & Authentic">Locale e Autentico</strong>
              <span data-it="Nativo di Watamu, conosco ogni angolo" data-en="Born in Watamu, I know every corner">Nativo di Watamu, conosco ogni angolo</span>
            </div>
          </div>
          <div class="trait">
            <div class="trait-ico">&#127760;</div>
            <div class="trait-txt">
              <strong data-it="Prezzi Onesti" data-en="Fair Prices">Prezzi Onesti</strong>
              <span data-it="Competitivi e trasparenti, nessuna sorpresa" data-en="Competitive and transparent, no surprises">Competitivi e trasparenti, nessuna sorpresa</span>
            </div>
          </div>
          <div class="trait">
            <div class="trait-ico">&#129309;</div>
            <div class="trait-txt">
              <strong data-it="Guida Parlante Italiano" data-en="Italian-Speaking Guide">Guida Parlante Italiano</strong>
              <span data-it="Comunicazione diretta e senza barriere" data-en="Direct communication without barriers">Comunicazione diretta e senza barriere</span>
            </div>
          </div>
          <div class="trait">
            <div class="trait-ico">&#128274;</div>
            <div class="trait-txt">
              <strong data-it="Autorizzato" data-en="Licensed & Authorized">Autorizzato</strong>
              <span data-it="Guida turistica autorizzata e certificata" data-en="Licensed and certified tour guide">Guida turistica autorizzata e certificata</span>
            </div>
          </div>
        </div>

        <a href="https://wa.me/254714434430?text=Salve,%20vorrei%20sapere%20di%20piu%20sui%20tuoi%20servizi." class="btn btn-primary" target="_blank" rel="noopener" data-it="Parliamo su WhatsApp" data-en="Let's Talk on WhatsApp">Parliamo su WhatsApp</a>
      </div>
    </div>
  </div>
</section>

<!-- SAFARI PACKAGES -->
<section class="packs-wrap section-pad" id="safari">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="eyebrow" data-it="Pacchetti Safari" data-en="Safari Packages">Pacchetti Safari</span>
      <h2 class="section-title" data-it="Scegli il tuo Safari nel Cuore del Kenya" data-en="Choose Your Safari into the Heart of Kenya">Scegli il tuo Safari nel Cuore del Kenya</h2>
      <p class="section-lead" data-it="Da Tsavo Est al Maasai Mara, costruiamo l'avventura su misura per te." data-en="From Tsavo East to the Maasai Mara, we build the adventure tailored for you.">Da Tsavo Est al Maasai Mara, costruiamo l'avventura su misura per te.</p>
    </div>

    <div class="packages-grid">
      <div class="pack-card" data-aos="fade-up" data-aos-delay="0">
        <div class="card-img">
          <img loading="lazy" decoding="async" src="images/tsavo.jpeg" alt="Tsavo Est 1 GG">
          <span class="card-pill" data-it="1 Giorno" data-en="1 Day">1 Giorno</span>
        </div>
        <div class="card-body">
          <h3 class="card-name" data-it="1 GG Tsavo Est" data-en="1 Day Tsavo East">1 GG Tsavo Est</h3>
          <p class="card-desc" data-it="Un giorno immerso nella savana rossa di Tsavo Est, il parco piu' grande del Kenya. Elefanti, leoni e panorami mozzafiato." data-en="A day immersed in the red savanna of Tsavo East, Kenya's largest park. Elephants, lions and breathtaking scenery.">Un giorno immerso nella savana rossa di Tsavo Est, il parco piu' grande del Kenya. Elefanti, leoni e panorami mozzafiato.</p>
          <a href="safari/1-gg-tsavo-est.php" class="card-link" data-it="Scopri di piu' &#8594;" data-en="Learn more &#8594;">Scopri di piu' &#8594;</a>
        </div>
      </div>

      <div class="pack-card" data-aos="fade-up" data-aos-delay="80">
        <div class="card-img">
          <img loading="lazy" decoding="async" src="images/tsavo-1.jpeg" alt="Tsavo Est 2 GG">
          <span class="card-pill" data-it="2 Giorni" data-en="2 Days">2 Giorni</span>
        </div>
        <div class="card-body">
          <h3 class="card-name" data-it="2 GG Tsavo Est" data-en="2 Days Tsavo East">2 GG Tsavo Est</h3>
          <p class="card-desc" data-it="Due giorni per esplorare Tsavo Est in profondita'. Notte in lodge con pernottamento incluso, alba nella savana e game drive al tramonto." data-en="Two days to explore Tsavo East in depth. Overnight in a lodge, dawn on the savanna and sunset game drive.">Due giorni per esplorare Tsavo Est in profondita'. Notte in lodge con pernottamento incluso, alba nella savana e game drive al tramonto.</p>
          <a href="safari/2-gg-tsavo-est.php" class="card-link" data-it="Scopri di piu' &#8594;" data-en="Learn more &#8594;">Scopri di piu' &#8594;</a>
        </div>
      </div>

      <div class="pack-card" data-aos="fade-up" data-aos-delay="160">
        <div class="card-img">
          <img loading="lazy" decoding="async" src="images/img46.jpg" alt="Maasai Mara 2 GG">
          <span class="card-pill" data-it="2 Giorni" data-en="2 Days">2 Giorni</span>
        </div>
        <div class="card-body">
          <h3 class="card-name" data-it="2 GG Maasai Mara" data-en="2 Days Maasai Mara">2 GG Maasai Mara</h3>
          <p class="card-desc" data-it="Il Maasai Mara - il piu' famoso parco del Kenya. Vivi la magia della Grande Migrazione e incontra i guerrieri Masai." data-en="The Maasai Mara - Kenya's most famous park. Experience the magic of the Great Migration and meet Maasai warriors.">Il Maasai Mara - il piu' famoso parco del Kenya. Vivi la magia della Grande Migrazione e incontra i guerrieri Masai.</p>
          <a href="safari/2-gg-maasai-mara.php" class="card-link" data-it="Scopri di piu' &#8594;" data-en="Learn more &#8594;">Scopri di piu' &#8594;</a>
        </div>
      </div>

      <div class="pack-card" data-aos="fade-up" data-aos-delay="0">
        <div class="card-img">
          <img loading="lazy" decoding="async" src="images/img06.jpg" alt="Amboseli e Tsavo 3 GG">
          <span class="card-pill" data-it="3 Giorni" data-en="3 Days">3 Giorni</span>
        </div>
        <div class="card-body">
          <h3 class="card-name" data-it="3 GG Amboseli e Tsavo Est" data-en="3 Days Amboseli & Tsavo East">3 GG Amboseli e Tsavo Est</h3>
          <p class="card-desc" data-it="Amboseli con il Kilimanjaro sullo sfondo e i grandi branchi di elefanti, poi la savana rossa di Tsavo Est." data-en="Amboseli with Kilimanjaro in the background and large elephant herds, then the red savanna of Tsavo East.">Amboseli con il Kilimanjaro sullo sfondo e i grandi branchi di elefanti, poi la savana rossa di Tsavo Est.</p>
          <a href="safari/3-gg-amboseli-e-tsavo-est.php" class="card-link" data-it="Scopri di piu' &#8594;" data-en="Learn more &#8594;">Scopri di piu' &#8594;</a>
        </div>
      </div>

      <div class="pack-card" data-aos="fade-up" data-aos-delay="80">
        <div class="card-img">
          <img loading="lazy" decoding="async" src="images/mara.jpeg" alt="Maasai Mara 3 GG">
          <span class="card-pill" data-it="3 Giorni" data-en="3 Days">3 Giorni</span>
        </div>
        <div class="card-body">
          <h3 class="card-name" data-it="3 GG Maasai Mara" data-en="3 Days Maasai Mara">3 GG Maasai Mara</h3>
          <p class="card-desc" data-it="Tre giorni immersi nella natura piu' selvaggia del Kenya. Alba, tramonto e notte nel Mara - un'esperienza che cambia la vita." data-en="Three days immersed in Kenya's wildest nature. Dawn, dusk and night in the Mara - a life-changing experience.">Tre giorni immersi nella natura piu' selvaggia del Kenya. Alba, tramonto e notte nel Mara - un'esperienza che cambia la vita.</p>
          <a href="safari/3-gg-maasai-mara.php" class="card-link" data-it="Scopri di piu' &#8594;" data-en="Learn more &#8594;">Scopri di piu' &#8594;</a>
        </div>
      </div>

      <div class="pack-card" data-aos="fade-up" data-aos-delay="160">
        <div class="card-img">
          <img loading="lazy" decoding="async" src="images/img03.jpg" alt="Maasai Mara e Lago Nakuru 4 GG">
          <span class="card-pill" data-it="4 Giorni" data-en="4 Days">4 Giorni</span>
        </div>
        <div class="card-body">
          <h3 class="card-name" data-it="4 GG Maasai Mara e Lago Nakuru" data-en="4 Days Maasai Mara & Lake Nakuru">4 GG Maasai Mara e Lago Nakuru</h3>
          <p class="card-desc" data-it="Combina la grandiosita' del Maasai Mara con il Lago Nakuru, famoso per i fenicotteri rosa e i rinoceronti." data-en="Combine the grandeur of the Maasai Mara with Lake Nakuru, famous for pink flamingos and rhinos.">Combina la grandiosita' del Maasai Mara con il Lago Nakuru, famoso per i fenicotteri rosa e i rinoceronti.</p>
          <a href="safari/4-gg-maasai-mara-e-lago-nakuru.php" class="card-link" data-it="Scopri di piu' &#8594;" data-en="Learn more &#8594;">Scopri di piu' &#8594;</a>
        </div>
      </div>

      <div class="pack-card" data-aos="fade-up" data-aos-delay="0">
        <div class="card-img">
          <img loading="lazy" decoding="async" src="images/img05.jpg" alt="5GG Amboseli Taita Tsavo">
          <span class="card-pill" data-it="5 Giorni" data-en="5 Days">5 Giorni</span>
        </div>
        <div class="card-body">
          <h3 class="card-name" data-it="5 GG Amboseli, Taita Hills e Tsavo" data-en="5 Days Amboseli, Taita Hills & Tsavo">5 GG Amboseli, Taita Hills e Tsavo</h3>
          <p class="card-desc" data-it="Un itinerario completo che tocca Amboseli, le Taita Hills e poi Tsavo Ovest e Est per un'avventura totale." data-en="A complete itinerary touching Amboseli, the Taita Hills and then Tsavo West and East for a total adventure.">Un itinerario completo che tocca Amboseli, le Taita Hills e poi Tsavo Ovest e Est per un'avventura totale.</p>
          <a href="safari/5-gg-amboseli-taita-tsavo.php" class="card-link" data-it="Scopri di piu' &#8594;" data-en="Learn more &#8594;">Scopri di piu' &#8594;</a>
        </div>
      </div>

      <div class="pack-card" data-aos="fade-up" data-aos-delay="80">
        <div class="card-img">
          <img loading="lazy" decoding="async" src="images/img53.jpg" alt="5GG Mara Amboseli Tsavo">
          <span class="card-pill" data-it="5 Giorni" data-en="5 Days">5 Giorni</span>
        </div>
        <div class="card-body">
          <h3 class="card-name" data-it="5 GG Mara, Amboseli e Tsavo Est" data-en="5 Days Mara, Amboseli & Tsavo East">5 GG Mara, Amboseli e Tsavo Est</h3>
          <p class="card-desc" data-it="Il meglio del Kenya in 5 giorni: il Maasai Mara, il Kilimanjaro da Amboseli e gli elefanti rossi di Tsavo." data-en="The best of Kenya in 5 days: Maasai Mara, Kilimanjaro from Amboseli and Tsavo's red elephants.">Il meglio del Kenya in 5 giorni: il Maasai Mara, il Kilimanjaro da Amboseli e gli elefanti rossi di Tsavo.</p>
          <a href="safari/5-gg-mara-amboseli-tsavo-est.php" class="card-link" data-it="Scopri di piu' &#8594;" data-en="Learn more &#8594;">Scopri di piu' &#8594;</a>
        </div>
      </div>

      <div class="pack-card" data-aos="fade-up" data-aos-delay="160">
        <div class="card-img">
          <img loading="lazy" decoding="async" src="images/img55.jpg" alt="Grand Tour Kenya">
          <span class="card-pill" data-it="6-7 Giorni" data-en="6-7 Days">6-7 Giorni</span>
        </div>
        <div class="card-body">
          <h3 class="card-name" data-it="Grand Tour Kenya (6-7 GG)" data-en="Grand Kenya Tour (6-7 Days)">Grand Tour Kenya (6-7 GG)</h3>
          <p class="card-desc" data-it="L'esperienza definitiva: Maasai Mara, Lago Nakuru, Amboseli e Tsavo. Un viaggio completo attraverso i tesori del Kenya." data-en="The ultimate experience: Maasai Mara, Lake Nakuru, Amboseli and Tsavo. A complete journey through Kenya's treasures.">L'esperienza definitiva: Maasai Mara, Lago Nakuru, Amboseli e Tsavo. Un viaggio completo attraverso i tesori del Kenya.</p>
          <a href="safari/6-gg-mara-nakuru-amboseli-tsavo.php" class="card-link" data-it="Scopri di piu' &#8594;" data-en="Learn more &#8594;">Scopri di piu' &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GALLERY STRIP -->
<div class="gallery-strip-wrap">
  <div class="gallery-strip">
    <div class="gstrip-item"><img loading="lazy" decoding="async" src="images/img56.jpg" alt="Kenya"></div>
    <div class="gstrip-item"><img loading="lazy" decoding="async" src="images/robinson.jpeg" alt="Kenya"></div>
    <div class="gstrip-item"><img loading="lazy" decoding="async" src="images/img44.jpg" alt="Kenya"></div>
    <div class="gstrip-item"><img loading="lazy" decoding="async" src="images/crab.jpeg" alt="Kenya"></div>
    <div class="gstrip-item"><img loading="lazy" decoding="async" src="images/img57.jpg" alt="Kenya"></div>
    <div class="gstrip-item"><img loading="lazy" decoding="async" src="images/img19.jpg" alt="Kenya"></div>
    <div class="gstrip-item"><img loading="lazy" decoding="async" src="images/img58.jpg" alt="Kenya"></div>
  </div>
</div>

<!-- ESCURSIONI -->
<section class="esci-wrap section-pad" id="escursioni">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="eyebrow" data-it="Escursioni sulla Costa" data-en="Coastal Excursions">Escursioni sulla Costa</span>
      <h2 class="section-title" data-it="Esplora la Costa Keniana" data-en="Explore the Kenyan Coast">Esplora la Costa Keniana</h2>
      <p class="section-lead" data-it="Spiagge incontaminate, foreste misteriose, rovine antiche e cibo freschissimo - tutto a portata di mano da Watamu e Malindi." data-en="Pristine beaches, mysterious forests, ancient ruins and fresh food - all within reach from Watamu and Malindi.">Spiagge incontaminate, foreste misteriose, rovine antiche e cibo freschissimo - tutto a portata di mano da Watamu e Malindi.</p>
    </div>

    <div class="escursioni-grid">
      <a href="escursioni/safari-blu.php" class="esci-card" data-aos="fade-up" data-aos-delay="0">
        <img loading="lazy" decoding="async" src="images/blue.jpeg" alt="Safari Blu">
        <div class="esci-body">
          <div class="esci-tag" data-it="Oceano" data-en="Ocean">Oceano</div>
          <div class="esci-name" data-it="Safari Blu" data-en="Blue Safari">Safari Blu</div>
          <span class="esci-more" data-it="Scopri &#8594;" data-en="Discover &#8594;">Scopri &#8594;</span>
        </div>
      </a>

      <a href="escursioni/sardegna-due.php" class="esci-card" data-aos="fade-up" data-aos-delay="80">
        <img loading="lazy" decoding="async" src="images/sardegna.jpeg" alt="Sardegna Due">
        <div class="esci-body">
          <div class="esci-tag" data-it="Parco Marino" data-en="Marine Park">Parco Marino</div>
          <div class="esci-name" data-it="Sardegna Due" data-en="Sardinia Two">Sardegna Due</div>
          <span class="esci-more" data-it="Scopri &#8594;" data-en="Discover &#8594;">Scopri &#8594;</span>
        </div>
      </a>

      <a href="escursioni/canyon-marafa.php" class="esci-card" data-aos="fade-up" data-aos-delay="80">
        <img loading="lazy" decoding="async" src="images/marafa.jpeg" alt="Canyon di Marafa">
        <div class="esci-body">
          <div class="esci-tag" data-it="Natura" data-en="Nature">Natura</div>
          <div class="esci-name" data-it="Canyon di Marafa" data-en="Marafa Canyon">Canyon di Marafa</div>
          <span class="esci-more" data-it="Scopri &#8594;" data-en="Discover &#8594;">Scopri &#8594;</span>
        </div>
      </a>

      <a href="escursioni/isola-robinson.php" class="esci-card" data-aos="fade-up" data-aos-delay="0">
        <img loading="lazy" decoding="async" src="images/robinson.jpeg" alt="Isola di Robinson">
        <div class="esci-body">
          <div class="esci-tag" data-it="Spiaggia" data-en="Beach">Spiaggia</div>
          <div class="esci-name" data-it="Isola di Robinson" data-en="Robinson Island">Isola di Robinson</div>
          <span class="esci-more" data-it="Scopri &#8594;" data-en="Discover &#8594;">Scopri &#8594;</span>
        </div>
      </a>

      <a href="escursioni/crab-shack.php" class="esci-card" data-aos="fade-up" data-aos-delay="80">
        <img loading="lazy" decoding="async" src="images/crab.jpeg" alt="Crab Shack Dabaso">
        <div class="esci-body">
          <div class="esci-tag" data-it="Gastronomia" data-en="Food">Gastronomia</div>
          <div class="esci-name" data-it="Crab Shack - Dabaso" data-en="Crab Shack - Dabaso">Crab Shack - Dabaso</div>
          <span class="esci-more" data-it="Scopri &#8594;" data-en="Discover &#8594;">Scopri &#8594;</span>
        </div>
      </a>

      <a href="escursioni/rovine-gedi.php" class="esci-card" data-aos="fade-up" data-aos-delay="0">
        <img loading="lazy" decoding="async" src="images/gede.jpeg" alt="Rovine di Gedi">
        <div class="esci-body">
          <div class="esci-tag" data-it="Storia" data-en="History">Storia</div>
          <div class="esci-name" data-it="Rovine di Gedi" data-en="Gedi Ruins">Rovine di Gedi</div>
          <span class="esci-more" data-it="Scopri &#8594;" data-en="Discover &#8594;">Scopri &#8594;</span>
        </div>
      </a>

      <a href="escursioni/arabuko-sokoke.php" class="esci-card" data-aos="fade-up" data-aos-delay="80">
        <img loading="lazy" decoding="async" src="images/img28.jpg" alt="Arabuko Sokoke">
        <div class="esci-body">
          <div class="esci-tag" data-it="Foresta" data-en="Forest">Foresta</div>
          <div class="esci-name" data-it="Foresta di Arabuko Sokoke" data-en="Arabuko Sokoke Forest">Foresta di Arabuko Sokoke</div>
          <span class="esci-more" data-it="Scopri &#8594;" data-en="Discover &#8594;">Scopri &#8594;</span>
        </div>
      </a>

      <a href="escursioni/che-shale.php" class="esci-card" data-aos="fade-up" data-aos-delay="0">
        <img loading="lazy" decoding="async" src="images/che.jpeg" alt="Che Shale">
        <div class="esci-body">
          <div class="esci-tag" data-it="Spiaggia" data-en="Beach">Spiaggia</div>
          <div class="esci-name" data-it="Che Shale - Sabbia Dorata" data-en="Che Shale - Golden Sand">Che Shale - Sabbia Dorata</div>
          <span class="esci-more" data-it="Scopri &#8594;" data-en="Discover &#8594;">Scopri &#8594;</span>
        </div>
      </a>

      <a href="escursioni/giro-malindi.php" class="esci-card" data-aos="fade-up" data-aos-delay="80">
        <img loading="lazy" decoding="async" src="images/malindi-1.jpeg" alt="Giro di Malindi">
        <div class="esci-body">
          <div class="esci-tag" data-it="Citta'" data-en="City">Citta'</div>
          <div class="esci-name" data-it="Giro di Malindi" data-en="Malindi Tour">Giro di Malindi</div>
          <span class="esci-more" data-it="Scopri &#8594;" data-en="Discover &#8594;">Scopri &#8594;</span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="reviews-wrap section-pad" id="recensioni">
  <div class="container">
    <div class="section-header centered" data-aos="fade-up">
      <span class="eyebrow" data-it="Recensioni" data-en="Reviews">Recensioni</span>
      <h2 class="section-title" data-it="Cosa Dicono i Nostri Clienti" data-en="What Our Clients Say">Cosa Dicono i Nostri Clienti</h2>
      <p class="section-lead" data-it="Centinaia di turisti italiani hanno vissuto il Kenya con Robert. Ecco le loro parole." data-en="Hundreds of Italian tourists have experienced Kenya with Robert. Here are their words.">Centinaia di turisti italiani hanno vissuto il Kenya con Robert. Ecco le loro parole.</p>
    </div>

    <div class="reviews-grid">
      <div class="review-card" data-aos="fade-up" data-aos-delay="0">
        <div class="review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="review-text" data-it="Robert e&#x27; una garanzia, ci ha fatto conoscere il vero Kenya. Persona gentilissima, molto disponibile e affidabile. La sua risata e&#x27; contagiosa e il divertimento e&#x27; assicurato. Prezzi molto competitivi." data-en="Robert is someone you can count on. He showed us the real Kenya. He is kind, helpful and reliable; his laughter is contagious and fun is guaranteed. Very competitive prices." data-fr="Robert est une valeur sûre : il nous a fait découvrir le vrai Kenya. Il est très gentil, serviable et fiable ; son rire est contagieux et la bonne humeur est garantie. Des prix très compétitifs." data-de="Auf Robert ist Verlass. Er hat uns das echte Kenia gezeigt. Er ist sehr freundlich, hilfsbereit und zuverlässig; sein Lachen ist ansteckend und Spaß ist garantiert. Sehr faire Preise.">"Robert e' una garanzia, ci ha fatto conoscere il vero Kenya. Persona gentilissima, molto disponibile e affidabile. La sua risata e' contagiosa e il divertimento e' assicurato. Prezzi molto competitivi."</p>
        <div class="review-author">Ivana Vincenzi</div>
      </div>

      <div class="review-card" data-aos="fade-up" data-aos-delay="80">
        <div class="review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="review-text" data-it="Robert esprime tutta la sua passione nel suo lavoro. Ci ha fatto vivere l&#x27;Africa a 360 gradi - Marafa, Safari Blu, Isola di Robinson, Rovine di Gede. Vacanza indimenticabile!" data-en="Robert puts all his passion into his work. He let us experience Africa in every way — Marafa, the Blue Safari, Robinson Island and the Gedi Ruins. An unforgettable holiday!" data-fr="Robert met toute sa passion dans son travail. Il nous a fait découvrir l’Afrique sous toutes ses facettes : Marafa, le safari bleu, l’île Robinson et les ruines de Gedi. Des vacances inoubliables !" data-de="Robert steckt seine ganze Leidenschaft in seine Arbeit. Er hat uns Afrika in all seinen Facetten erleben lassen – Marafa, die Blaue Safari, Robinson Island und die Gedi-Ruinen. Ein unvergesslicher Urlaub!">"Robert esprime tutta la sua passione nel suo lavoro. Ci ha fatto vivere l'Africa a 360 gradi - Marafa, Safari Blu, Isola di Robinson, Rovine di Gede. Vacanza indimenticabile!"</p>
        <div class="review-author">Simona Capocasa</div>
      </div>

      <div class="review-card" data-aos="fade-up" data-aos-delay="160">
        <div class="review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="review-text" data-it="Vado in Kenya da alcuni anni e organizzo sempre i miei safari con Robert. E&#x27; una buona guida, esperto e con buoni prezzi. Vi consiglio di contattarlo per una buona vacanza." data-en="I have been visiting Kenya for several years and always arrange my safaris with Robert. He is a good, experienced guide with fair prices. I recommend contacting him for a wonderful holiday." data-fr="Je viens au Kenya depuis plusieurs années et j’organise toujours mes safaris avec Robert. C’est un bon guide, expérimenté et proposant de bons prix. Je vous conseille de le contacter pour passer de belles vacances." data-de="Ich reise seit einigen Jahren nach Kenia und organisiere meine Safaris immer mit Robert. Er ist ein guter, erfahrener Guide mit fairen Preisen. Ich empfehle Ihnen, ihn für einen schönen Urlaub zu kontaktieren.">"Vado in Kenya da alcuni anni e organizzo sempre i miei safari con Robert. E' una buona guida, esperto e con buoni prezzi. Vi consiglio di contattarlo per una buona vacanza."</p>
        <div class="review-author">Anna</div>
      </div>

      <div class="review-card" data-aos="fade-up" data-aos-delay="0">
        <div class="review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="review-text" data-it="Conosco Robert da 20 anni. Mi ha portato a visitare il Kenya con i suoi occhi - paesaggi favolosi, safari, tutto ad ottimi prezzi e in totale sicurezza. E&#x27; il mio kaka nero!" data-en="I have known Robert for 20 years. He showed me Kenya through his eyes — wonderful landscapes and safaris, all at great prices and with complete peace of mind. He is my kaka nero!" data-fr="Je connais Robert depuis 20 ans. Il m’a fait découvrir le Kenya à travers ses yeux : des paysages magnifiques, des safaris, le tout à très bon prix et en toute sécurité. C’est mon kaka nero !" data-de="Ich kenne Robert seit 20 Jahren. Er hat mir Kenia mit seinen Augen gezeigt – wunderschöne Landschaften und Safaris, zu sehr guten Preisen und in völliger Sicherheit. Er ist mein kaka nero!">"Conosco Robert da 20 anni. Mi ha portato a visitare il Kenya con i suoi occhi - paesaggi favolosi, safari, tutto ad ottimi prezzi e in totale sicurezza. E' il mio kaka nero!"</p>
        <div class="review-author">Cristina</div>
      </div>

      <div class="review-card" data-aos="fade-up" data-aos-delay="80">
        <div class="review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="review-text" data-it="Organizzato tutto dall&#x27;Italia. Safari di due giorni e Marafa. Tutto organizzato nei dettagli. Simpatia e onesta&#x27; assolute. Robert super simpatico e professionale. Continua cosi&#x27;!" data-en="Everything was arranged from Italy: a two-day safari and Marafa. Every detail was taken care of. Robert is genuinely friendly and honest, as well as very professional. Keep it up!" data-fr="Tout a été organisé depuis l’Italie : un safari de deux jours et Marafa. Tout était parfaitement préparé dans les moindres détails. Robert est vraiment sympathique, honnête et très professionnel. Continue comme ça !" data-de="Alles wurde von Italien aus organisiert: eine zweitägige Safari und Marafa. Alles war bis ins Detail geplant. Robert ist ausgesprochen freundlich, ehrlich und professionell. Weiter so!">"Organizzato tutto dall'Italia. Safari di due giorni e Marafa. Tutto organizzato nei dettagli. Simpatia e onesta' assolute. Robert super simpatico e professionale. Continua cosi'!"</p>
        <div class="review-author">Manuela</div>
      </div>

      <div class="review-card" data-aos="fade-up" data-aos-delay="160">
        <div class="review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="review-text" data-it="Per me era la prima volta in questa meravigliosa terra. Essere da sola e avere Robert al mio fianco e&#x27; stato fondamentale! Tanti bei momenti, risate infinite e ricordi indelebili nel mio cuore." data-en="It was my first time in this wonderful country. Travelling alone, having Robert by my side made all the difference. So many beautiful moments, endless laughter and memories I will always treasure." data-fr="C’était mon premier voyage dans ce merveilleux pays. Voyager seule et avoir Robert à mes côtés a fait toute la différence ! De très beaux moments, des fous rires et des souvenirs impérissables." data-de="Es war meine erste Reise in dieses wunderschöne Land. Allein zu reisen und Robert an meiner Seite zu haben, war entscheidend! So viele schöne Momente, endloses Lachen und unvergessliche Erinnerungen.">"Per me era la prima volta in questa meravigliosa terra. Essere da sola e avere Robert al mio fianco e' stato fondamentale! Tanti bei momenti, risate infinite e ricordi indelebili nel mio cuore."</p>
        <div class="review-author">Elena</div>
      </div>
    </div>
  </div>
</section>

<!-- ALTRI SERVIZI -->
<section class="services-wrap section-pad" id="servizi">
  <div class="container">
    <div class="section-header centered" data-aos="fade-up">
      <span class="eyebrow" data-it="Altri Servizi" data-en="Other Services">Altri Servizi</span>
      <h2 class="section-title" data-it="Non Solo Safari - Ti Aiuto con Tutto" data-en="Not Just Safari - I Help with Everything">Non Solo Safari - Ti Aiuto con Tutto</h2>
    </div>

    <div class="services-grid">
      <div class="service-box" data-aos="fade-up" data-aos-delay="0">
        <span class="service-ico">&#9992;</span>
        <div class="service-nm" data-it="Trasferimento Aeroporto" data-en="Airport Transfer">Trasferimento Aeroporto</div>
        <p class="service-desc" data-it="Prenotazione e trasferimento aereo rapido e puntuale ogni volta che ne hai bisogno." data-en="Booking and fast, punctual airport transfer whenever you need it.">Prenotazione e trasferimento aereo rapido e puntuale ogni volta che ne hai bisogno.</p>
      </div>
      <div class="service-box" data-aos="fade-up" data-aos-delay="80">
        <span class="service-ico">&#127968;</span>
        <div class="service-nm" data-it="Prenotazione Hotel" data-en="Hotel Booking">Prenotazione Hotel</div>
        <p class="service-desc" data-it="Ti consigliamo e aiutiamo a prenotare gli hotel piu' belli in cui soggiornare durante il viaggio." data-en="We advise and help you book the most beautiful hotels for your stay.">Ti consigliamo e aiutiamo a prenotare gli hotel piu' belli in cui soggiornare durante il viaggio.</p>
      </div>
      <div class="service-box" data-aos="fade-up" data-aos-delay="160">
        <span class="service-ico">&#127958;</span>
        <div class="service-nm" data-it="Case e Ville Private" data-en="Villas & Private Homes">Case e Ville Private</div>
        <p class="service-desc" data-it="Prenotiamo anche ville e case private per chi preferisce un soggiorno piu' esclusivo e riservato." data-en="We also book villas and private homes for those who prefer a more exclusive stay.">Prenotiamo anche ville e case private per chi preferisce un soggiorno piu' esclusivo e riservato.</p>
      </div>
      <div class="service-box" data-aos="fade-up" data-aos-delay="240">
        <span class="service-ico">&#127907;</span>
        <div class="service-nm" data-it="Pesca Sportiva" data-en="Sport Fishing">Pesca Sportiva</div>
        <p class="service-desc" data-it="Escursioni di pesca per mezza o intera giornata nelle migliori zone di pesca dell'Oceano Indiano." data-en="Half or full day fishing trips in the best spots of the Indian Ocean.">Escursioni di pesca per mezza o intera giornata nelle migliori zone di pesca dell'Oceano Indiano.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="cta-band">
  <img loading="lazy" decoding="async" class="cta-band-bg" src="images/img55.jpg" alt="Kenya">
  <div class="cta-inner">
    <span class="eyebrow" data-it="Pronto per l'avventura?" data-en="Ready for adventure?">Pronto per l'avventura?</span>
    <h2 data-it="La Tua Avventura Keniana Inizia Qui" data-en="Your Kenya Adventure Starts Here">La Tua Avventura Keniana Inizia Qui</h2>
    <p data-it="Scrivici su WhatsApp per ricevere un preventivo gratuito e personalizzato. Organizziamo tutto per te, dall'aeroporto al ritorno." data-en="Message us on WhatsApp for a free, personalized quote. We organize everything for you, from airport to return.">Scrivici su WhatsApp per ricevere un preventivo gratuito e personalizzato. Organizziamo tutto per te, dall'aeroporto al ritorno.</p>
    <div class="cta-actions">
      <a href="https://wa.me/254714434430?text=Salve,%20vorrei%20informazioni%20su%20un%20safari%20in%20Kenya." class="btn btn-wa" target="_blank" rel="noopener">
        <i class="fab fa-whatsapp"></i>
        <span data-it="Scrivici su WhatsApp" data-en="Write us on WhatsApp">Scrivici su WhatsApp</span>
      </a>
      <a href="mailto:furahasafariskenya@gmail.com" class="btn btn-outline" data-it="Invia una Email" data-en="Send an Email">Invia una Email</a>
    </div>
  </div>
</section>

<!-- BOOKING FORM -->
<section class="booking-form-wrap section-pad" id="prenota">
  <div class="container">
    <div class="booking-form-grid">

      <div class="booking-form-left" data-aos="fade-right">
        <span class="eyebrow" data-it="Prenota ora" data-en="Book now">Prenota ora</span>
        <h2 class="section-title" data-it="Pianifica il Tuo Safari con Noi" data-en="Plan Your Safari with Us">Pianifica il Tuo Safari con Noi</h2>
        <p class="booking-form-lead" data-it="Compila il modulo e ti risponderemo entro poche ore. Nessun impegno - solo una chiacchierata per costruire insieme la tua avventura." data-en="Fill in the form and we'll get back to you within a few hours. No commitment - just a chat to build your adventure together.">Compila il modulo e ti risponderemo entro poche ore. Nessun impegno - solo una chiacchierata per costruire insieme la tua avventura.</p>

        <div class="booking-form-contacts">
          <div class="bfc-item">
            <div class="bfc-icon"><i class="fab fa-whatsapp"></i></div>
            <div>
              <div class="bfc-label" data-it="WhatsApp diretto" data-en="Direct WhatsApp">WhatsApp diretto</div>
              <a href="https://wa.me/254714434430" class="bfc-value" target="_blank" rel="noopener">+254 714 434 430</a>
            </div>
          </div>
          <div class="bfc-item">
            <div class="bfc-icon"><i class="fas fa-envelope"></i></div>
            <div>
              <div class="bfc-label" data-it="Email" data-en="Email">Email</div>
              <a href="mailto:furahasafariskenya@gmail.com" class="bfc-value">furahasafariskenya@gmail.com</a>
            </div>
          </div>
          <div class="bfc-item">
            <div class="bfc-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <div class="bfc-label" data-it="Dove siamo" data-en="Where we are">Dove siamo</div>
              <span class="bfc-value">Watamu, Kilifi County, Kenya</span>
            </div>
          </div>
        </div>
      </div>

      <div class="booking-form-right" data-aos="fade-left">

        <?php
        $form_sent    = false;
        $form_error   = false;
        $form_message = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bf_submit'])) {

          // Honeypot check
          if (!empty($_POST['bf_website'])) {
            exit;
          }

          // Math CAPTCHA
          $captcha_answer   = isset($_POST['bf_captcha_answer']) ? (int)$_POST['bf_captcha_answer'] : -1;
          $captcha_expected = isset($_POST['bf_captcha_expected']) ? (int)$_POST['bf_captcha_expected'] : -999;

          if ($captcha_answer !== $captcha_expected) {
            $form_error   = true;
            $form_message = 'Verifica anti-spam non corretta. Riprova.';
          } else {

            // Sanitize inputs
            $name     = htmlspecialchars(strip_tags(trim($_POST['bf_name'] ?? '')));
            $email    = filter_var(trim($_POST['bf_email'] ?? ''), FILTER_SANITIZE_EMAIL);
            $phone    = htmlspecialchars(strip_tags(trim($_POST['bf_phone'] ?? '')));
            $date     = htmlspecialchars(strip_tags(trim($_POST['bf_date'] ?? '')));
            $people   = htmlspecialchars(strip_tags(trim($_POST['bf_people'] ?? '')));
            $package  = htmlspecialchars(strip_tags(trim($_POST['bf_package'] ?? '')));
            $message  = htmlspecialchars(strip_tags(trim($_POST['bf_message'] ?? '')));

            if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $form_error   = true;
              $form_message = 'Inserisci nome ed email validi.';
            } else {

              $to      = 'furahasafariskenya@gmail.com';
              $subject = 'Nuova richiesta safari - Furaha Adventures Kenya';

              $body  = "Nuova richiesta di prenotazione dal sito furahaadventureskenya.com\n";
              $body .= "==========================================\n\n";
              $body .= "Nome:              $name\n";
              $body .= "Email:             $email\n";
              $body .= "Telefono/WhatsApp: $phone\n";
              $body .= "Data partenza:     $date\n";
              $body .= "Numero persone:    $people\n";
              $body .= "Pacchetto:         $package\n\n";
              $body .= "Messaggio:\n$message\n\n";
              $body .= "--\nInviato da furahaadventureskenya.com";

              $headers  = "From: noreply@furahaadventureskenya.com\r\n";
              $headers .= "Reply-To: $email\r\n";
              $headers .= "X-Mailer: PHP/" . phpversion();

              if (mail($to, $subject, $body, $headers)) {
                $form_sent    = true;
                $form_message = 'Grazie ' . $name . '! La tua richiesta e\' stata inviata. Ti risponderemo a breve.';
              } else {
                $form_error   = true;
                $form_message = 'Si e\' verificato un errore nell\'invio. Contattaci direttamente su WhatsApp.';
              }
            }
          }
        }

        // Generate math CAPTCHA
        $n1 = rand(2, 9);
        $n2 = rand(1, 6);
        $captcha_sum = $n1 + $n2;
        ?>

        <?php if ($form_sent): ?>
          <div class="form-success">
            <div class="form-success-icon">&#10003;</div>
            <h3 data-it="Messaggio inviato!" data-en="Message sent!">Messaggio inviato!</h3>
            <p data-form-message><?php echo $form_message; ?></p>
            <a href="https://wa.me/254714434430" class="btn btn-wa" target="_blank" rel="noopener" style="margin-top:1rem;">
              <i class="fab fa-whatsapp"></i>
              <span data-it="Scrivici anche su WhatsApp" data-en="Also write us on WhatsApp">Scrivici anche su WhatsApp</span>
            </a>
          </div>

        <?php else: ?>

          <?php if ($form_error): ?>
            <div class="form-alert-error" data-form-message><?php echo $form_message; ?></div>
          <?php endif; ?>

          <form class="booking-form" method="POST" action="#prenota" novalidate>

            <!-- Honeypot -->
            <input type="text" name="bf_website" style="display:none;" tabindex="-1" autocomplete="off">
            <input type="hidden" name="bf_captcha_expected" value="<?php echo $captcha_sum; ?>">
            <input type="hidden" name="bf_submit" value="1">

            <div class="form-row">
              <div class="form-group">
                <label for="bf_name" data-it="Nome e Cognome *" data-en="Full Name *">Nome e Cognome *</label>
                <input type="text" id="bf_name" name="bf_name" required
                  placeholder="e.g. Alex Smith" data-placeholder-it="Es. Mario Rossi" data-placeholder-en="e.g. Alex Smith" data-placeholder-fr="Ex. Alex Martin" data-placeholder-de="z. B. Alex Meyer"
                  value="<?php echo isset($_POST['bf_name']) ? htmlspecialchars($_POST['bf_name']) : ''; ?>">
              </div>
              <div class="form-group">
                <label for="bf_email" data-it="Email *" data-en="Email *">Email *</label>
                <input type="email" id="bf_email" name="bf_email" required
                  placeholder="name@example.com" data-placeholder-it="mario@email.com" data-placeholder-en="name@example.com" data-placeholder-fr="nom@exemple.com" data-placeholder-de="name@beispiel.de"
                  value="<?php echo isset($_POST['bf_email']) ? htmlspecialchars($_POST['bf_email']) : ''; ?>">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="bf_phone" data-it="Telefono / WhatsApp" data-en="Phone / WhatsApp">Telefono / WhatsApp</label>
                <input type="tel" id="bf_phone" name="bf_phone"
                  placeholder="+254 700 000 000" data-placeholder-it="+39 333 123 4567" data-placeholder-en="+254 700 000 000" data-placeholder-fr="+254 700 000 000" data-placeholder-de="+254 700 000 000"
                  value="<?php echo isset($_POST['bf_phone']) ? htmlspecialchars($_POST['bf_phone']) : ''; ?>">
              </div>
              <div class="form-group">
                <label for="bf_date" data-it="Data di Partenza" data-en="Departure Date">Data di Partenza</label>
                <input type="date" id="bf_date" name="bf_date"
                  value="<?php echo isset($_POST['bf_date']) ? htmlspecialchars($_POST['bf_date']) : ''; ?>">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="bf_people" data-it="Numero di Persone" data-en="Number of People">Numero di Persone</label>
                <select id="bf_people" name="bf_people">
                  <?php
                  $sel_people = $_POST['bf_people'] ?? '';
                  $people_opts = array('1','2','3','4','5','6','7-10','10+');
                  foreach ($people_opts as $opt) {
                    $selected = $sel_people === $opt ? ' selected' : '';
                    echo "<option value=\"$opt\"$selected>$opt</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="bf_package" data-it="Pacchetto Interessato" data-en="Package of Interest">Pacchetto Interessato</label>
                <select id="bf_package" name="bf_package">
                  <?php
                  $sel_pkg = $_POST['bf_package'] ?? '';
                  $packages = array(
                    '' => array('it' => '-- Scegli --', 'en' => '-- Select --'),
                    '1 GG Tsavo Est'             => array('it' => '1 GG Tsavo Est',             'en' => '1 Day Tsavo East'),
                    '2 GG Tsavo Est'             => array('it' => '2 GG Tsavo Est',             'en' => '2 Days Tsavo East'),
                    '2 GG Maasai Mara'           => array('it' => '2 GG Maasai Mara',           'en' => '2 Days Maasai Mara'),
                    '3 GG Amboseli e Tsavo Est'  => array('it' => '3 GG Amboseli e Tsavo Est',  'en' => '3 Days Amboseli & Tsavo East'),
                    '3 GG Maasai Mara'           => array('it' => '3 GG Maasai Mara',           'en' => '3 Days Maasai Mara'),
                    '4 GG Maasai Mara e Nakuru'  => array('it' => '4 GG Maasai Mara e Nakuru',  'en' => '4 Days Maasai Mara & Nakuru'),
                    '5 GG Amboseli Taita Tsavo'  => array('it' => '5 GG Amboseli, Taita, Tsavo','en' => '5 Days Amboseli, Taita, Tsavo'),
                    '5 GG Mara Amboseli Tsavo'   => array('it' => '5 GG Mara, Amboseli, Tsavo', 'en' => '5 Days Mara, Amboseli, Tsavo'),
                    '6 GG Grand Tour'            => array('it' => '6 GG Grand Tour Kenya',      'en' => '6 Days Grand Kenya Tour'),
                    '7 GG Grand Tour'            => array('it' => '7 GG Grand Tour Kenya',      'en' => '7 Days Grand Kenya Tour'),
                    'Safari Blu'                 => array('it' => 'Escursione - Safari Blu',     'en' => 'Excursion - Blue Safari'),
                    'Canyon di Marafa'           => array('it' => 'Escursione - Canyon Marafa',  'en' => 'Excursion - Marafa Canyon'),
                    'Isola di Robinson'          => array('it' => 'Escursione - Isola Robinson', 'en' => 'Excursion - Robinson Island'),
                    'Crab Shack Dabaso'          => array('it' => 'Escursione - Crab Shack',     'en' => 'Excursion - Crab Shack'),
                    'Rovine di Gedi'             => array('it' => 'Escursione - Rovine di Gedi', 'en' => 'Excursion - Gedi Ruins'),
                    'Arabuko Sokoke'             => array('it' => 'Escursione - Arabuko Sokoke', 'en' => 'Excursion - Arabuko Sokoke'),
                    'Che Shale'                  => array('it' => 'Escursione - Che Shale',      'en' => 'Excursion - Che Shale'),
                    'Giro di Malindi'            => array('it' => 'Escursione - Giro di Malindi','en' => 'Excursion - Malindi Tour'),
                    'Non so ancora'              => array('it' => 'Non so ancora - consigliami!','en' => 'Not sure yet - advise me!'),
                  );
                  foreach ($packages as $val => $labels) {
                    $selected = $sel_pkg === $val ? ' selected' : '';
                    echo "<option value=\"$val\"$selected data-it=\"{$labels['it']}\" data-en=\"{$labels['en']}\">{$labels['it']}</option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="bf_message" data-it="Messaggio / Richieste speciali" data-en="Message / Special requests">Messaggio / Richieste speciali</label>
              <textarea id="bf_message" name="bf_message" rows="4"
                placeholder="Tell us more about your ideal trip..." data-placeholder-it="Raccontaci di piu' sul tuo viaggio ideale..." data-placeholder-en="Tell us more about your ideal trip..." data-placeholder-fr="Parlez-nous du voyage dont vous rêvez..." data-placeholder-de="Erzählen Sie uns mehr über Ihre Wunschreise..."><?php echo isset($_POST['bf_message']) ? htmlspecialchars($_POST['bf_message']) : ''; ?></textarea>
            </div>

            <div class="form-captcha">
              <label for="bf_captcha_answer" data-it="Verifica anti-spam: quanto fa <?php echo $n1; ?> + <?php echo $n2; ?>?" data-en="Anti-spam check: what is <?php echo $n1; ?> + <?php echo $n2; ?>?">Verifica anti-spam: quanto fa <?php echo $n1; ?> + <?php echo $n2; ?>?</label>
              <input type="number" id="bf_captcha_answer" name="bf_captcha_answer" required
                placeholder="Answer" data-placeholder-it="Risposta" data-placeholder-en="Answer" data-placeholder-fr="Réponse" data-placeholder-de="Antwort" style="max-width:120px;">
            </div>

            <button type="submit" class="btn btn-primary form-submit">
              <i class="fas fa-paper-plane"></i>
              <span data-it="Invia Richiesta" data-en="Send Request">Invia Richiesta</span>
            </button>

          </form>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <img loading="lazy" decoding="async" class="footer-logo" src="images/logo.png" alt="Furaha Adventures Kenya">
        <p class="footer-about-text" data-it="Safari ed escursioni autentiche in Kenya con Robert, guida locale di Watamu da oltre 10 anni." data-en="Authentic safaris and excursions in Kenya with Robert, a local Watamu guide for over 10 years.">Safari ed escursioni autentiche in Kenya con Robert, guida locale di Watamu da oltre 10 anni.</p>
        <div class="footer-socials">
          <a href="https://www.facebook.com/profile.php?id=61552163876611" class="footer-soc" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://instagram.com/furah_aadventures" class="footer-soc" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://wa.me/254714434430" class="footer-soc" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

      <div>
        <div class="footer-col-title" data-it="Safari" data-en="Safari">Safari</div>
        <div class="footer-links">
          <a href="safari/1-gg-tsavo-est.php" data-it="1 GG Tsavo Est" data-en="1 Day Tsavo East">1 GG Tsavo Est</a>
          <a href="safari/2-gg-maasai-mara.php" data-it="2 GG Maasai Mara" data-en="2 Days Maasai Mara">2 GG Maasai Mara</a>
          <a href="safari/3-gg-amboseli-e-tsavo-est.php" data-it="3 GG Amboseli e Tsavo" data-en="3 Days Amboseli & Tsavo">3 GG Amboseli e Tsavo</a>
          <a href="safari/5-gg-amboseli-taita-tsavo.php" data-it="5 GG Grand Safari" data-en="5 Day Grand Safari">5 GG Grand Safari</a>
          <a href="safari/7-gg-grand-tour-kenya.php" data-it="7 GG Grand Tour Kenya" data-en="7 Day Grand Kenya Tour">7 GG Grand Tour Kenya</a>
        </div>
      </div>

      <div>
        <div class="footer-col-title" data-it="Escursioni" data-en="Excursions">Escursioni</div>
        <div class="footer-links">
          <a href="escursioni/safari-blu.php" data-it="Safari Blu" data-en="Blue Safari">Safari Blu</a>
          <a href="escursioni/canyon-marafa.php" data-it="Canyon di Marafa" data-en="Marafa Canyon">Canyon di Marafa</a>
          <a href="escursioni/isola-robinson.php" data-it="Isola di Robinson" data-en="Robinson Island">Isola di Robinson</a>
          <a href="escursioni/rovine-gedi.php" data-it="Rovine di Gedi" data-en="Gedi Ruins">Rovine di Gedi</a>
          <a href="escursioni/arabuko-sokoke.php" data-it="Arabuko Sokoke" data-en="Arabuko Sokoke">Arabuko Sokoke</a>
        </div>
      </div>

      <div>
        <div class="footer-col-title" data-it="Contatti" data-en="Contact">Contatti</div>
        <div class="footer-contact-row">
          <span class="fci"><i class="fas fa-map-marker-alt"></i></span>
          <div class="fct">Watamu, Kilifi County<br>Kenya</div>
        </div>
        <div class="footer-contact-row">
          <span class="fci"><i class="fab fa-whatsapp"></i></span>
          <div class="fct"><a href="https://wa.me/254714434430" target="_blank" rel="noopener">+254 714 434 430</a></div>
        </div>
        <div class="footer-contact-row">
          <span class="fci"><i class="fas fa-envelope"></i></span>
          <div class="fct"><a href="mailto:furahasafariskenya@gmail.com">furahasafariskenya@gmail.com</a></div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p class="footer-copy">
        &copy; <?php echo date('Y'); ?> Furaha Adventures Kenya. <span data-it="Tutti i diritti riservati." data-en="All rights reserved.">Tutti i diritti riservati.</span>
        <br><span data-it="Progettato da" data-en="Designed by">Progettato da</span> <a href="https://wa.me/254707412795" target="_blank" rel="noopener">Mega Designers KE</a>
      </p>
    </div>
  </div>
</footer>

<!-- WA FLOAT -->
<a href="https://wa.me/254714434430?text=Salve,%20sto%20informando%20sui%20servizi%20Safari%20ed%20Escursioni%20che%20offri." class="wa-float" target="_blank" rel="noopener" aria-label="WhatsApp">
  <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
    <path d="M16 0C7.164 0 0 7.164 0 16c0 2.82.737 5.47 2.027 7.773L0 32l8.418-2.004A15.93 15.93 0 0016 32c8.836 0 16-7.164 16-16S24.836 0 16 0zm8.227 22.773c-.344.965-2.004 1.844-2.762 1.965-.715.113-1.617.16-2.605-.164-.601-.195-1.375-.453-2.364-.887-4.164-1.8-6.883-6.004-7.094-6.285-.211-.281-1.723-2.289-1.723-4.367S8.86 10.5 9.375 9.984c.453-.453.965-.566 1.289-.566.32 0 .641.004.922.016.296.012.695-.113.984.75.3.879 1.02 3.035 1.11 3.258.09.219.148.477.016.765-.137.289-.203.469-.406.719-.203.25-.43.558-.609.75-.203.203-.414.422-.176.828.238.406 1.055 1.742 2.266 2.82 1.555 1.386 2.867 1.816 3.27 2.02.406.203.644.172.882-.102.239-.27 1.02-1.188 1.293-1.594.269-.406.539-.34.91-.203.375.133 2.386 1.126 2.793 1.332.406.203.676.301.777.47.098.167.098.965-.246 1.926z"/>
  </svg>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="js/translations.js"></script>
<script src="js/main.js"></script>
</body>
</html>
