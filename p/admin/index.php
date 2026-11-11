<?php
session_start();

define('ADMIN_PASSWORD', 'furaha2024');
define('IMAGES_DIR', '../images/');

// All pages with friendly labels
$PAGES = [
  // Homepage
  'Homepage' => [
    'homepage' => ['label' => 'Homepage', 'file' => '../index.php', 'icon' => '🏠'],
  ],
  // Safari Packages
  'Safari Packages' => [
    'safari-1gg-tsavo'    => ['label' => '1 Day — Tsavo East',                    'file' => '../safari/1-gg-tsavo-est.php',                  'icon' => '🐘'],
    'safari-2gg-tsavo'    => ['label' => '2 Days — Tsavo East',                   'file' => '../safari/2-gg-tsavo-est.php',                  'icon' => '🐘'],
    'safari-2gg-mara'     => ['label' => '2 Days — Maasai Mara',                  'file' => '../safari/2-gg-maasai-mara.php',                'icon' => '🦁'],
    'safari-3gg-amboseli' => ['label' => '3 Days — Amboseli & Tsavo East',        'file' => '../safari/3-gg-amboseli-e-tsavo-est.php',       'icon' => '🐘'],
    'safari-3gg-mara'     => ['label' => '3 Days — Maasai Mara',                  'file' => '../safari/3-gg-maasai-mara.php',                'icon' => '🦁'],
    'safari-4gg-mara'     => ['label' => '4 Days — Maasai Mara & Lake Nakuru',    'file' => '../safari/4-gg-maasai-mara-e-lago-nakuru.php',  'icon' => '🦏'],
    'safari-5gg-taita'    => ['label' => '5 Days — Amboseli, Taita Hills & Tsavo','file' => '../safari/5-gg-amboseli-taita-tsavo.php',       'icon' => '🌍'],
    'safari-5gg-mara'     => ['label' => '5 Days — Mara, Amboseli & Tsavo East',  'file' => '../safari/5-gg-mara-amboseli-tsavo-est.php',    'icon' => '🌍'],
    'safari-6gg'          => ['label' => '6 Days — Grand Tour Kenya',              'file' => '../safari/6-gg-mara-nakuru-amboseli-tsavo.php', 'icon' => '⭐'],
    'safari-7gg'          => ['label' => '7 Days — Grand Tour Kenya (Full)',       'file' => '../safari/7-gg-grand-tour-kenya.php',           'icon' => '⭐'],
  ],
  // Excursions
  'Excursions' => [
    'esci-safari-blu'    => ['label' => 'Blue Safari',              'file' => '../escursioni/safari-blu.php',      'icon' => '⛵'],
    'esci-safari-blu-2'  => ['label' => 'Blue Safari (Sardinia 2)', 'file' => '../escursioni/safari-blu-2.php',    'icon' => '⛵'],
    'esci-crab-shack'    => ['label' => 'Crab Shack — Dabaso',      'file' => '../escursioni/crab-shack.php',      'icon' => '🦞'],
    'esci-marafa'        => ['label' => 'Marafa Canyon',            'file' => '../escursioni/canyon-marafa.php',   'icon' => '🏜'],
    'esci-robinson'      => ['label' => 'Robinson Island',          'file' => '../escursioni/isola-robinson.php',  'icon' => '🏖'],
    'esci-che-shale'     => ['label' => 'Che Shale — Golden Sand',  'file' => '../escursioni/che-shale.php',       'icon' => '🌊'],
    'esci-malindi'       => ['label' => 'Malindi Tour',             'file' => '../escursioni/giro-malindi.php',    'icon' => '🕌'],
    'esci-gedi'          => ['label' => 'Gedi Ruins',               'file' => '../escursioni/rovine-gedi.php',     'icon' => '🏛'],
    'esci-arabuko'       => ['label' => 'Arabuko Sokoke Forest',    'file' => '../escursioni/arabuko-sokoke.php',  'icon' => '🌲'],
  ],
];

// Flatten for lookup
$ALL_PAGES = [];
foreach ($PAGES as $group => $pages) {
  foreach ($pages as $key => $meta) {
    $ALL_PAGES[$key] = $meta;
  }
}

$msg = ''; $error = '';

// Login / logout
if (isset($_POST['password'])) {
  if ($_POST['password'] === ADMIN_PASSWORD) $_SESSION['fa_admin'] = true;
  else $error = 'Wrong password. Try again.';
}
if (isset($_GET['logout'])) { session_destroy(); header('Location: index.php'); exit; }
$in = !empty($_SESSION['fa_admin']);

// Upload new image
if ($in && isset($_FILES['upload']) && $_FILES['upload']['error'] === UPLOAD_ERR_OK) {
  $allowed = ['image/jpeg','image/jpg','image/png','image/webp'];
  $mime = mime_content_type($_FILES['upload']['tmp_name']);
  if (!in_array($mime, $allowed)) {
    $error = 'File type not supported. Use JPG, PNG or WEBP.';
  } else {
    $name = preg_replace('/[^a-z0-9\-_]/', '-', strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_FILENAME)));
    $ext  = strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION));
    $filename = $name . '.' . $ext;
    $dest = IMAGES_DIR . $filename;
    if (file_exists($dest)) $dest = IMAGES_DIR . $name . '-' . time() . '.' . $ext;
    move_uploaded_file($_FILES['upload']['tmp_name'], $dest) 
      ? $msg = '✓ Image uploaded: <strong>' . basename($dest) . '</strong>'
      : $error = 'Upload failed. Check folder permissions on images/.';
  }
}

// Swap image in page
if ($in && ($_POST['action'] ?? '') === 'swap') {
  $pk  = $_POST['page_key'] ?? '';
  $old = basename($_POST['old_img'] ?? '');
  $new = basename($_POST['new_img'] ?? '');
  if (!isset($ALL_PAGES[$pk])) {
    $error = 'Invalid page.';
  } elseif (!$old || !$new) {
    $error = 'Select both the current image and the new one.';
  } elseif ($old === $new) {
    $error = 'You selected the same image for both. Nothing changed.';
  } else {
    $fp = __DIR__ . '/' . $ALL_PAGES[$pk]['file'];
    if (!file_exists($fp)) {
      $error = 'File not found on server: ' . $ALL_PAGES[$pk]['file'];
    } else {
      $content = file_get_contents($fp);
      $count   = substr_count($content, $old);
      if ($count === 0) {
        $error = '"' . $old . '" was not found in this page.';
      } else {
        file_put_contents($fp, str_replace($old, $new, $content));
        $label = $ALL_PAGES[$pk]['label'];
        $msg   = '✓ Replaced <strong>' . $old . '</strong> with <strong>' . $new . '</strong> on <strong>' . $label . '</strong>. (' . $count . ' spot' . ($count>1?'s':'') . ' updated)';
      }
    }
  }
}

// Get images used in a page
function pageImgs($file) {
  $fp = __DIR__ . '/' . $file;
  if (!file_exists($fp)) return [];
  preg_match_all('/images\/([\w\-\.]+\.(?:jpg|jpeg|png|webp))/i', file_get_contents($fp), $m);
  $r = array_unique($m[1]); sort($r); return $r;
}

// All images in folder
function allImgs() {
  $r = [];
  foreach (glob(IMAGES_DIR . '*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE) as $f) $r[] = basename($f);
  usort($r, 'strnatcasecmp'); return $r;
}

$selKey  = $_GET['page'] ?? '';
$selMeta = $selKey && isset($ALL_PAGES[$selKey]) ? $ALL_PAGES[$selKey] : null;
$pageImgs = $selMeta ? pageImgs($selMeta['file']) : [];
$allImgs  = allImgs();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Image Manager — Furaha Adventures Kenya</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
:root{
  --bg:#0f0a05;--surface:#1e1408;--card:#2a1d0d;--raised:#342210;
  --gold:#c8892a;--dust:#e8c97a;--bark:#5c4020;--bone:#f2ebd9;--mist:#a89880;
  --green:#4a7c59;--red:#8b2222;--r:10px;
}
body{font-family:'Segoe UI',system-ui,sans-serif;background:var(--bg);color:var(--bone);min-height:100vh;font-size:15px}

/* ===== LOGIN ===== */
.login-page{display:flex;align-items:center;justify-content:center;min-height:100vh;padding:1.5rem}
.login-card{background:var(--surface);border:1px solid var(--bark);border-radius:var(--r);padding:2.5rem 2rem;width:100%;max-width:340px;text-align:center}
.login-card h1{font-size:1.4rem;color:var(--dust);margin-bottom:.3rem}
.login-card .sub{font-size:.82rem;color:var(--mist);margin-bottom:2rem}

/* ===== SHELL ===== */
.shell{display:grid;grid-template-rows:auto 1fr;height:100vh;overflow:hidden}
.topbar{background:var(--surface);border-bottom:1px solid var(--bark);padding:.75rem 1.25rem;display:flex;align-items:center;justify-content:space-between;gap:1rem;flex-shrink:0}
.brand{font-weight:700;color:var(--dust);font-size:.95rem}
.brand em{color:var(--gold);font-style:normal}
.body{display:grid;grid-template-columns:230px 1fr;overflow:hidden}
@media(max-width:650px){.body{grid-template-columns:1fr}}

/* ===== SIDEBAR ===== */
.sidebar{background:var(--surface);border-right:1px solid var(--bark);overflow-y:auto;padding:1rem .75rem}
.sb-group{margin-bottom:1.25rem}
.sb-label{font-size:.65rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--gold);padding:.25rem .5rem;margin-bottom:.25rem;display:block}
.sb-btn{display:flex;align-items:center;gap:.5rem;width:100%;background:none;border:none;padding:.45rem .6rem;border-radius:6px;color:var(--mist);font-size:.8rem;cursor:pointer;text-align:left;transition:background .15s,color .15s;text-decoration:none}
.sb-btn:hover{background:rgba(200,137,42,.1);color:var(--bone)}
.sb-btn.active{background:rgba(200,137,42,.18);color:var(--dust);font-weight:600}
.sb-icon{font-size:1rem;width:20px;text-align:center;flex-shrink:0}

/* ===== CONTENT ===== */
.content{overflow-y:auto;padding:1.5rem}

/* ===== ALERTS ===== */
.alert{padding:.75rem 1rem;border-radius:var(--r);font-size:.85rem;margin-bottom:1.25rem;line-height:1.5}
.alert-ok{background:rgba(74,124,89,.18);border:1px solid rgba(74,124,89,.35);color:#8ecba0}
.alert-err{background:rgba(139,34,34,.2);border:1px solid rgba(139,34,34,.4);color:#f09090}

/* ===== CARDS ===== */
.card{background:var(--card);border:1px solid var(--bark);border-radius:var(--r);padding:1.25rem;margin-bottom:1.25rem}
.card-title{font-size:.82rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem}

/* ===== UPLOAD ===== */
.upload-zone{border:2px dashed var(--bark);border-radius:var(--r);padding:1.1rem 1.25rem;display:flex;align-items:center;gap:1rem;flex-wrap:wrap;transition:border-color .2s}
.upload-zone:focus-within{border-color:var(--gold)}

/* ===== PLACEHOLDER ===== */
.placeholder{text-align:center;padding:3rem 2rem;color:var(--mist)}
.placeholder .big{font-size:2.5rem;margin-bottom:.75rem}
.placeholder p{font-size:.9rem;line-height:1.6}
.placeholder p strong{color:var(--dust)}

/* ===== IMAGE SLOTS ===== */
.slots{display:grid;grid-template-columns:repeat(auto-fill,minmax(170px,1fr));gap:1rem}
.slot{background:var(--raised);border:1px solid var(--bark);border-radius:var(--r);overflow:hidden;transition:border-color .2s}
.slot:hover{border-color:var(--gold)}
.slot-img{width:100%;height:110px;object-fit:cover;display:block}
.slot-name{padding:.4rem .65rem;font-size:.7rem;color:var(--mist);border-bottom:1px solid var(--bark)}
.slot-body{padding:.75rem}
.slot-body label{font-size:.67rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--mist);margin-bottom:.3rem;display:block}
.slot-select{width:100%;background:var(--surface);border:1px solid var(--bark);color:var(--bone);font-size:.78rem;padding:.4rem .6rem;border-radius:6px;outline:none;margin-bottom:.6rem;transition:border-color .2s}
.slot-select:focus{border-color:var(--gold)}
.slot-preview{display:none;width:100%;height:70px;object-fit:cover;border-radius:6px;margin-bottom:.6rem;border:2px solid var(--gold)}

/* ===== BUTTONS ===== */
.btn{display:inline-flex;align-items:center;gap:.35rem;padding:.48rem 1.1rem;border-radius:6px;border:none;font-size:.78rem;font-weight:700;letter-spacing:.05em;text-transform:uppercase;cursor:pointer;text-decoration:none;transition:all .15s;white-space:nowrap}
.btn-gold{background:var(--gold);color:#0f0a05}
.btn-gold:hover{background:var(--dust)}
.btn-outline{background:transparent;color:var(--bone);border:1px solid var(--bark)}
.btn-outline:hover{border-color:var(--gold);color:var(--gold)}
.btn-red{background:var(--red);color:#fff}
.btn-red:hover{filter:brightness(1.2)}
.btn-sm{padding:.32rem .75rem;font-size:.7rem}
.btn-block{width:100%;justify-content:center}

/* ===== FORM BASICS ===== */
.fg{margin-bottom:.85rem}
label.lbl{display:block;font-size:.7rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--mist);margin-bottom:.3rem}
input[type=password],input[type=file]{width:100%;background:var(--surface);border:1px solid var(--bark);color:var(--bone);font-size:.87rem;padding:.5rem .8rem;border-radius:6px;outline:none;transition:border-color .2s}
input:focus{border-color:var(--gold)}
input[type=file]{color:var(--mist);font-size:.8rem}
</style>
</head>
<body>

<?php if (!$in): ?>
<!-- ===== LOGIN ===== -->
<div class="login-page">
  <div class="login-card">
    <h1>🦁 Furaha Admin</h1>
    <p class="sub">Image Manager — Furaha Adventures Kenya</p>
    <?php if($error):?><div class="alert alert-err"><?=$error?></div><?php endif;?>
    <form method="POST">
      <div class="fg">
        <label class="lbl" for="pw">Password</label>
        <input type="password" name="password" id="pw" autofocus placeholder="Enter admin password">
      </div>
      <button type="submit" class="btn btn-gold btn-block" style="margin-top:.5rem">Log In</button>
    </form>
  </div>
</div>

<?php else: ?>
<!-- ===== ADMIN SHELL ===== -->
<div class="shell">
  <header class="topbar">
    <div class="brand">🦁 Furaha <em>Admin</em> — Image Manager</div>
    <div style="display:flex;gap:.6rem;align-items:center">
      <a href="../index.php" class="btn btn-outline btn-sm" target="_blank">↗ View Site</a>
      <a href="?logout=1" class="btn btn-red btn-sm">Log Out</a>
    </div>
  </header>

  <div class="body">
    <!-- ===== SIDEBAR ===== -->
    <nav class="sidebar">
      <?php foreach($PAGES as $group => $pages): ?>
      <div class="sb-group">
        <span class="sb-label"><?=$group?></span>
        <?php foreach($pages as $key => $meta): ?>
        <a href="?page=<?=urlencode($key)?>" class="sb-btn <?=$selKey===$key?'active':''?>">
          <span class="sb-icon"><?=$meta['icon']?></span>
          <?=$meta['label']?>
        </a>
        <?php endforeach;?>
      </div>
      <?php endforeach;?>
    </nav>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="content">
      <?php if($msg):  ?><div class="alert alert-ok"><?=$msg?></div><?php endif;?>
      <?php if($error):?><div class="alert alert-err"><?=$error?></div><?php endif;?>

      <!-- UPLOAD -->
      <div class="card">
        <div class="card-title">📤 Upload New Image</div>
        <form method="POST" enctype="multipart/form-data">
          <div class="upload-zone">
            <input type="file" name="upload" accept="image/jpeg,image/png,image/webp" required>
            <button type="submit" class="btn btn-gold">Upload</button>
            <span style="font-size:.75rem;color:var(--mist)">JPG · PNG · WEBP — max 10 MB</span>
          </div>
        </form>
      </div>

      <?php if(!$selKey): ?>
      <!-- NO PAGE SELECTED YET -->
      <div class="card">
        <div class="placeholder">
          <div class="big">👈</div>
          <p>Pick a page from the sidebar to<br>see and swap its images.</p>
          <p style="margin-top:.75rem;font-size:.8rem">
            <strong>Homepage</strong> · <strong>Safari Packages</strong> · <strong>Excursions</strong>
          </p>
        </div>
      </div>

      <?php elseif(!$selMeta): ?>
      <div class="card">
        <div class="alert alert-err">Page not found.</div>
      </div>

      <?php else: ?>
      <!-- PAGE SELECTED -->
      <div class="card">
        <div class="card-title"><?=$selMeta['icon']?> <?=$selMeta['label']?></div>

        <?php if(empty($pageImgs)): ?>
          <p style="color:var(--mist);font-size:.85rem">No images found on this page.</p>
        <?php else: ?>
          <p style="font-size:.82rem;color:var(--mist);margin-bottom:1.1rem;line-height:1.6">
            Below are all images currently on this page.<br>
            Use the dropdown under each one to pick a replacement, then click <strong style="color:var(--dust)">Replace</strong>.
          </p>

          <div class="slots">
            <?php foreach($pageImgs as $img): ?>
            <div class="slot">
              <img class="slot-img" src="../images/<?=$img?>" alt="<?=$img?>">
              <div class="slot-name"><?=$img?></div>
              <div class="slot-body">
                <form method="POST">
                  <input type="hidden" name="action" value="swap">
                  <input type="hidden" name="page_key" value="<?=$selKey?>">
                  <input type="hidden" name="old_img" value="<?=$img?>">
                  <label>Replace with:</label>
                  <select name="new_img" class="slot-select" onchange="showPreview(this)">
                    <option value="">— choose new image —</option>
                    <?php foreach($allImgs as $a): ?>
                    <option value="<?=$a?>" <?=$a===$img?'disabled':''?>><?=$a?></option>
                    <?php endforeach;?>
                  </select>
                  <img class="slot-preview" src="" alt="preview">
                  <button type="submit" class="btn btn-gold btn-block btn-sm">Replace</button>
                </form>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        <?php endif;?>
      </div>
      <?php endif;?>

    </main>
  </div>
</div>

<script>
function showPreview(sel) {
  var img = sel.closest('.slot-body').querySelector('.slot-preview');
  if (sel.value) {
    img.src = '../images/' + sel.value;
    img.style.display = 'block';
  } else {
    img.style.display = 'none';
  }
}
</script>
<?php endif;?>
</body>
</html>
