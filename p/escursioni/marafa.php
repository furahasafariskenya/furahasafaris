<?php
$requestedLang = isset($_GET['lang']) ? strtolower($_GET['lang']) : (isset($_COOKIE['furaha-language']) ? strtolower($_COOKIE['furaha-language']) : 'en');
$lang = in_array($requestedLang, ['en', 'it', 'fr', 'de'], true) ? $requestedLang : 'en';

$data = [
  'it' => [
    'title' => 'Canyon di Marafa - Furaha Adventures Kenya',
    'meta'  => 'Escursione al Canyon di Marafa con Robert. Il "Posto di Dio" - le gole di roccia rossa e bianca al tramonto. Da Watamu e Malindi.',
    'hero_label' => 'Escursione',
    'hero_title' => 'Canyon di Marafa',
    'hero_desc' => 'Il canyon delle rocce rosse e bianche, ribattezzato "Hell\'s Kitchen" dai locali e "Posto di Dio" dai visitatori. Un tramonto qui e qualcosa che non si dimentica.',
    'info_title' => 'Informazioni',
    'duration' => 'Giornata intera',
    'departs' => 'Watamu / Malindi',
    'type' => 'Escursione terrestre',
    'body_h2' => 'Il Luogo di Dio',
    'body_p1' => 'A soli 30 km da Malindi si nasconde uno dei paesaggi piu straordinari della costa keniana: il Canyon di Marafa. Formazioni rocciose alte decine di metri, erosi dal vento e dalla pioggia in forme che sembrano scolpite da un artista.',
    'body_p2' => 'I colori cambiano con il sole. Al mattino le rocce sono ocra e grigio. Nel tardo pomeriggio diventano rosso fuoco, poi viola, poi oro - uno spettacolo cromatico che giustifica da solo il viaggio.',
    'body_p3' => 'Robert conosce i percorsi meno battuti del canyon e sa dove posizionarsi per i migliori tramonti. La visita include una passeggiata tra le formazioni rocciose con spiegazioni sulla geologia e le leggende locali.',
    'highlights_title' => 'Punti Salienti',
    'highlights' => [
      ['icon' => '🌅', 'title' => 'Tramonto', 'desc' => 'Il tramonto al canyon e uno dei piu belli del Kenya.'],
      ['icon' => '🪨', 'title' => 'Geologia', 'desc' => 'Formazioni uniche di argilla rossa e roccia bianca.'],
      ['icon' => '📸', 'title' => 'Fotografia', 'desc' => 'Scenari perfetti in ogni angolo del canyon.'],
      ['icon' => '🦅', 'title' => 'Wildlife', 'desc' => 'Uccelli rari e fauna tipica della foresta secca.'],
    ],
    'includes_title' => 'Incluso',
    'includes' => ['Trasporto in jeep 4x4', 'Guida professionale Robert', 'Acqua', 'Pranzo in ristorante locale (opzionale)'],
    'book_text' => 'Prenota questa Escursione',
    'book_sub' => 'Scrivi a Robert su WhatsApp per prezzi e disponibilita.',
    'gallery_title' => 'Galleria',
    'back' => 'Torna alle Escursioni',
  ],
  'en' => [
    'title' => 'Marafa Canyon - Furaha Adventures Kenya',
    'meta'  => 'Excursion to Marafa Canyon with Robert. The "Place of God" - red and white rock gorges at sunset. From Watamu and Malindi.',
    'hero_label' => 'Excursion',
    'hero_title' => 'Marafa Canyon',
    'hero_desc' => 'The canyon of red and white rocks, nicknamed "Hell\'s Kitchen" by locals and "God\'s Place" by visitors. A sunset here is something you never forget.',
    'info_title' => 'Information',
    'duration' => 'Full day',
    'departs' => 'Watamu / Malindi',
    'type' => 'Land excursion',
    'body_h2' => 'The Place of God',
    'body_p1' => 'Just 30km from Malindi hides one of the most extraordinary landscapes on the Kenyan coast: Marafa Canyon. Rock formations dozens of metres high, eroded by wind and rain into shapes that look sculpted by an artist.',
    'body_p2' => 'The colours change with the sun. In the morning the rocks are ochre and grey. In the late afternoon they turn fiery red, then purple, then gold - a chromatic spectacle that justifies the trip in itself.',
    'body_p3' => 'Robert knows the lesser-trodden paths of the canyon and knows exactly where to stand for the best sunsets. The visit includes a walk among the rock formations with explanations of the geology and local legends.',
    'highlights_title' => 'Highlights',
    'highlights' => [
      ['icon' => '🌅', 'title' => 'Sunset', 'desc' => 'The sunset at the canyon is one of the most beautiful in Kenya.'],
      ['icon' => '🪨', 'title' => 'Geology', 'desc' => 'Unique formations of red clay and white rock.'],
      ['icon' => '📸', 'title' => 'Photography', 'desc' => 'Perfect scenery around every corner of the canyon.'],
      ['icon' => '🦅', 'title' => 'Wildlife', 'desc' => 'Rare birds and wildlife typical of dry forest.'],
    ],
    'includes_title' => "What's Included",
    'includes' => ['4x4 jeep transport', 'Professional guide Robert', 'Water', 'Lunch at a local restaurant (optional)'],
    'book_text' => 'Book This Excursion',
    'book_sub' => 'Message Robert on WhatsApp for pricing and availability.',
    'gallery_title' => 'Gallery',
    'back' => 'Back to Excursions',
  ],
  'fr' => [
    'title' => 'Canyon de Marafa - Furaha Adventures Kenya',
    'meta'  => 'Excursion au canyon de Marafa avec Robert. Le « lieu de Dieu » : des gorges de roche rouge et blanche au coucher du soleil. Depuis Watamu et Malindi.',
    'hero_label' => 'Excursion', 'hero_title' => 'Canyon de Marafa',
    'hero_desc' => 'Le canyon aux roches rouges et blanches, surnommé « Hell’s Kitchen » par les habitants et « lieu de Dieu » par les visiteurs. Un coucher de soleil ici est inoubliable.',
    'info_title' => 'Informations', 'duration' => 'Journée complète', 'departs' => 'Watamu / Malindi', 'type' => 'Excursion terrestre',
    'body_h2' => 'Le lieu de Dieu',
    'body_p1' => 'À seulement 30 km de Malindi se cache l’un des paysages les plus extraordinaires de la côte kenyane : le canyon de Marafa. Des formations rocheuses hautes de plusieurs dizaines de mètres, érodées par le vent et la pluie en formes qui semblent sculptées par un artiste.',
    'body_p2' => 'Les couleurs changent avec le soleil. Le matin, les roches sont ocres et grises. En fin d’après-midi, elles deviennent rouge feu, puis violettes et dorées : un spectacle de couleurs qui vaut à lui seul le voyage.',
    'body_p3' => 'Robert connaît les sentiers moins fréquentés du canyon et sait où se placer pour admirer les plus beaux couchers de soleil. La visite comprend une promenade parmi les formations rocheuses et des explications sur la géologie et les légendes locales.',
    'highlights_title' => 'Points forts',
    'highlights' => [
      ['icon'=>'🌅','title'=>'Coucher du soleil','desc'=>'Le coucher de soleil au canyon compte parmi les plus beaux du Kenya.'],
      ['icon'=>'🪨','title'=>'Géologie','desc'=>'Formations uniques d’argile rouge et de roche blanche.'],
      ['icon'=>'📸','title'=>'Photographie','desc'=>'Des paysages parfaits à chaque détour du canyon.'],
      ['icon'=>'🦅','title'=>'Faune','desc'=>'Oiseaux rares et animaux typiques de la forêt sèche.'],
    ],
    'includes_title' => 'Inclus', 'includes' => ['Transport en jeep 4x4','Guide professionnel Robert','Eau','Déjeuner dans un restaurant local (en option)'],
    'book_text' => 'Réserver cette excursion', 'book_sub' => 'Écrivez à Robert sur WhatsApp pour connaître les tarifs et les disponibilités.',
    'gallery_title' => 'Galerie', 'back' => 'Retour aux excursions',
  ],
  'de' => [
    'title' => 'Marafa-Canyon - Furaha Adventures Kenya',
    'meta'  => 'Ausflug zum Marafa-Canyon mit Robert. Der „Ort Gottes“ – rote und weiße Felsschluchten bei Sonnenuntergang. Ab Watamu und Malindi.',
    'hero_label' => 'Ausflug', 'hero_title' => 'Marafa-Canyon',
    'hero_desc' => 'Der Canyon mit roten und weißen Felsen, von Einheimischen „Hell’s Kitchen“ und von Besuchern „Ort Gottes“ genannt. Ein Sonnenuntergang hier bleibt unvergesslich.',
    'info_title' => 'Informationen', 'duration' => 'Ganztägig', 'departs' => 'Watamu / Malindi', 'type' => 'Landausflug',
    'body_h2' => 'Der Ort Gottes',
    'body_p1' => 'Nur 30 km von Malindi entfernt liegt eine der außergewöhnlichsten Landschaften der kenianischen Küste: der Marafa-Canyon. Dutzende Meter hohe Felsformationen wurden von Wind und Regen zu Formen geschliffen, die wie von einem Künstler gestaltet wirken.',
    'body_p2' => 'Die Farben verändern sich mit dem Sonnenstand. Am Morgen sind die Felsen ockerfarben und grau. Am späten Nachmittag leuchten sie feuerrot, dann violett und schließlich golden – ein Farbenspiel, das die Reise allein schon wert ist.',
    'body_p3' => 'Robert kennt die weniger begangenen Wege des Canyons und weiß, wo man die schönsten Sonnenuntergänge erlebt. Der Besuch umfasst einen Spaziergang zwischen den Felsformationen mit Erklärungen zur Geologie und zu lokalen Legenden.',
    'highlights_title' => 'Höhepunkte',
    'highlights' => [
      ['icon'=>'🌅','title'=>'Sonnenuntergang','desc'=>'Der Sonnenuntergang am Canyon gehört zu den schönsten in Kenia.'],
      ['icon'=>'🪨','title'=>'Geologie','desc'=>'Einzigartige Formationen aus rotem Lehm und weißem Gestein.'],
      ['icon'=>'📸','title'=>'Fotografie','desc'=>'An jeder Ecke des Canyons warten beeindruckende Motive.'],
      ['icon'=>'🦅','title'=>'Tierwelt','desc'=>'Seltene Vögel und typische Tiere des Trockenwaldes.'],
    ],
    'includes_title' => 'Inklusive', 'includes' => ['4x4-Jeep-Transport','Professioneller Guide Robert','Wasser','Mittagessen in einem lokalen Restaurant (optional)'],
    'book_text' => 'Diesen Ausflug buchen', 'book_sub' => 'Schreiben Sie Robert per WhatsApp für Preise und Verfügbarkeit.',
    'gallery_title' => 'Galerie', 'back' => 'Zurück zu den Ausflügen',
  ],
];
$d = $data[$lang];
?><!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $d['title']; ?></title>
  <meta name="description" content="<?php echo $d['meta']; ?>">
  <link rel="icon" type="image/png" href="../images/logo.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Barlow:wght@300;400;500;600&family=Barlow+Condensed:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<!-- NAV -->
<nav class="nav scrolled">
  <a href="../index.php" class="nav-logo">
    <img src="../images/logo.png" alt="Furaha Adventures Kenya">
  </a>
  <div class="nav-links">
    <a href="../index.php#safari">Safari</a>
    <a href="../index.php#escursioni"><?php echo ['en'=>'Excursions','it'=>'Escursioni','fr'=>'Excursions','de'=>'Ausflüge'][$lang]; ?></a>
    <a href="../index.php#chi-sono"><?php echo ['en'=>'About','it'=>'Chi Sono','fr'=>'À propos','de'=>'Über uns'][$lang]; ?></a>
    <a href="../index.php#recensioni"><?php echo ['en'=>'Reviews','it'=>'Recensioni','fr'=>'Avis','de'=>'Bewertungen'][$lang]; ?></a>
    <a href="../index.php#contatti"><?php echo ['en'=>'Contact','it'=>'Contatti','fr'=>'Contact','de'=>'Kontakt'][$lang]; ?></a>
    <label class="language-picker" aria-label="Select website language">
      <span class="language-picker-icon" aria-hidden="true">◎</span>
      <select class="language-select" aria-label="Select website language" onchange="window.location='marafa.php?lang='+this.value">
        <option value="en" <?php echo $lang==='en'?'selected':''; ?>>English</option>
        <option value="it" <?php echo $lang==='it'?'selected':''; ?>>Italiano</option>
        <option value="fr" <?php echo $lang==='fr'?'selected':''; ?>>Français</option>
        <option value="de" <?php echo $lang==='de'?'selected':''; ?>>Deutsch</option>
      </select>
    </label>
  </div>
  <button class="nav-burger"><span></span><span></span><span></span></button>
</nav>
<div class="mobile-nav">
  <button class="close-btn">&#x2715;</button>
  <a href="../index.php">Home</a>
  <a href="../index.php#safari">Safari</a>
  <a href="../index.php#escursioni"><?php echo ['en'=>'Excursions','it'=>'Escursioni','fr'=>'Excursions','de'=>'Ausflüge'][$lang]; ?></a>
  <a href="../index.php#contatti"><?php echo ['en'=>'Contact','it'=>'Contatti','fr'=>'Contact','de'=>'Kontakt'][$lang]; ?></a>
</div>

<!-- HERO - Full bleed cinematic for excursions -->
<div class="exc-detail-hero">
  <img src="../images/img115.jpg" alt="Canyon di Marafa al tramonto" class="exc-detail-hero-img">
  <div class="exc-detail-hero-overlay"></div>
  <div class="exc-detail-hero-content">
    <p class="section-label">
      <a href="../index.php" style="color:rgba(240,230,211,0.5);">Home</a>
      &nbsp;/&nbsp;
      <a href="../index.php#escursioni" style="color:rgba(240,230,211,0.5);"><?php echo ['en'=>'Excursions','it'=>'Escursioni','fr'=>'Excursions','de'=>'Ausflüge'][$lang]; ?></a>
      &nbsp;/&nbsp;
      <?php echo $d['hero_label']; ?>
    </p>
    <h1 class="exc-detail-title"><?php echo $d['hero_title']; ?></h1>
    <p class="exc-detail-desc"><?php echo $d['hero_desc']; ?></p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="https://wa.me/254714434430?text=Salve%20Robert,%20vorrei%20prenotare%20l'escursione%20al%20Canyon%20di%20Marafa." class="btn btn-whatsapp" target="_blank" rel="noopener">
        <?php echo $d['book_text']; ?>
      </a>
    </div>
  </div>
</div>

<!-- QUICK INFO BAR -->
<div style="background:rgba(200,87,10,0.08);border-bottom:1px solid rgba(200,87,10,0.15);padding:1.2rem 4rem;">
  <div style="max-width:1200px;margin:0 auto;display:flex;gap:3rem;flex-wrap:wrap;">
    <div class="detail-meta-item"><span class="dot"></span><?php echo $d['duration']; ?></div>
    <div class="detail-meta-item"><span class="dot"></span><?php echo ['en'=>'Departs: ','it'=>'Partenza: ','fr'=>'Départ : ','de'=>'Abfahrt: '][$lang]; ?><?php echo $d['departs']; ?></div>
    <div class="detail-meta-item"><span class="dot"></span><?php echo $d['type']; ?></div>
  </div>
</div>

<!-- BODY -->
<div class="exc-detail-body">
  <div data-aos="fade-up">
    <h2 class="section-title" style="font-size:1.8rem;margin-bottom:1.5rem;"><?php echo $d['body_h2']; ?></h2>
    <p style="color:rgba(240,230,211,0.7);margin-bottom:1rem;line-height:1.8;"><?php echo $d['body_p1']; ?></p>
    <p style="color:rgba(240,230,211,0.7);margin-bottom:1rem;line-height:1.8;"><?php echo $d['body_p2']; ?></p>
    <p style="color:rgba(240,230,211,0.7);margin-bottom:2rem;line-height:1.8;"><?php echo $d['body_p3']; ?></p>

    <!-- Photo strip -->
    <div class="exc-photo-strip">
      <img loading="lazy" decoding="async" src="../images/img110.jpg" alt="Marafa canyon">
      <img loading="lazy" decoding="async" src="../images/img115.jpg" alt="Tramonto Marafa">
      <img loading="lazy" decoding="async" src="../images/img112.jpg" alt="Paesaggio canyon">
    </div>

    <!-- Highlights -->
    <h2 style="font-family:var(--font-display);font-size:1.5rem;color:var(--white);margin-bottom:1.2rem;"><?php echo $d['highlights_title']; ?></h2>
    <div class="exc-highlights">
      <?php foreach($d['highlights'] as $h): ?>
      <div class="exc-highlight-item">
        <span class="hi-icon"><?php echo $h['icon']; ?></span>
        <div class="hi-text">
          <strong><?php echo htmlspecialchars($h['title']); ?></strong>
          <?php echo htmlspecialchars($h['desc']); ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- SIDEBAR -->
  <div data-aos="fade-left" data-aos-delay="100">
    <div class="sidebar-card" style="position:sticky;top:100px;">
      <h3><?php echo $d['includes_title']; ?></h3>
      <ul class="sidebar-includes">
        <?php foreach($d['includes'] as $inc): ?>
        <li><span class="check">&#10003;</span> <?php echo htmlspecialchars($inc); ?></li>
        <?php endforeach; ?>
      </ul>

      <div style="margin-top:1.5rem;padding-top:1.5rem;border-top:1px solid rgba(240,230,211,0.08);">
        <p style="font-size:0.85rem;color:rgba(240,230,211,0.5);margin-bottom:1rem;"><?php echo $d['book_sub']; ?></p>
        <a href="https://wa.me/254714434430?text=Salve%20Robert,%20vorrei%20prenotare%20l'escursione%20al%20Canyon%20di%20Marafa." class="btn btn-whatsapp" style="width:100%;justify-content:center;" target="_blank" rel="noopener">
          <?php echo $d['book_text']; ?>
        </a>
        <a href="tel:+254714434430" class="btn btn-outline" style="width:100%;justify-content:center;margin-top:0.8rem;">
          +254 714 434 430
        </a>
      </div>
    </div>
  </div>
</div>

<!-- BACK -->
<div style="padding:0 4rem 4rem;max-width:1200px;margin:0 auto;">
  <a href="../index.php#escursioni" class="btn btn-outline">&larr; <?php echo $d['back']; ?></a>
</div>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Furaha Adventures Kenya. <?php echo $lang==='en'?'All rights reserved.':'Tutti i diritti riservati.'; ?></p>
      <p><?php echo $lang==='en'?'Designed by':'Progettato da'; ?> <a href="https://wa.me/254707412795" target="_blank" rel="noopener">Mega Designers KE</a></p>
    </div>
  </div>
</footer>

<a href="https://wa.me/254714434430?text=Salve,%20vorrei%20informazioni%20sui%20safari%20ed%20escursioni." class="wa-float" target="_blank" rel="noopener" aria-label="WhatsApp">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" onerror="window.AOS=undefined"></script>
<script src="../js/translations.js"></script>
<script src="../js/main.js"></script>
</body>
</html>
