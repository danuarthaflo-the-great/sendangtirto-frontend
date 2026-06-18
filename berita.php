<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Berita & Kegiatan – Kalurahan Sendangtirto</title>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/navbar.css"/>
  <link rel="stylesheet" href="css/components.css"/>
</head>
<body>

<?php include '_navbar-snippet.php'; ?>

<div class="page-content">

  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="hero-anim">
      <span class="stag" style="color:var(--emas-light)">📰 Informasi Terkini</span>
      <h1>Berita & Kegiatan</h1>
      <p>Ikuti perkembangan kegiatan, program, dan informasi terbaru dari Kalurahan Sendangtirto.</p>
    </div>
  </div>

  <section style="background:var(--krem)">
    <div class="breadcrumb fu">
      <a href="index.php">Beranda</a><span>›</span><span>Berita & Kegiatan</span>
    </div>

    <div class="search-box fu">
      <input type="text" id="searchInput" placeholder="🔍 Cari berita..."/>
      <button onclick="doSearch()">Cari</button>
    </div>

    <div class="filter-tabs fu" id="filterTabs">
      <button class="filter-tab active" onclick="filterBerita('semua', this)">Semua</button>
      <button class="filter-tab" onclick="filterBerita('sosial', this)">Sosial</button>
      <button class="filter-tab" onclick="filterBerita('pemerintahan', this)">Pemerintahan</button>
      <button class="filter-tab" onclick="filterBerita('kesehatan', this)">Kesehatan</button>
      <button class="filter-tab" onclick="filterBerita('keagamaan', this)">Keagamaan</button>
      <button class="filter-tab" onclick="filterBerita('pkk', this)">PKK</button>
      <button class="filter-tab" onclick="filterBerita('keamanan', this)">Keamanan</button>
    </div>

    <div class="berita-list-grid auto-stagger" id="beritaGrid">

      <div class="blist-card fu" data-kategori="pemerintahan">
        <div class="blist-thumb">🏘️</div>
        <div class="blist-body">
          <span class="badge badge-light">Pelayanan Warga</span>
          <h3>Jempol Bapak: Dekatkan Warga Padukuhan Kadipolo dan Sribit Bayar Pajak PBB</h3>
          <p>Pemerintah Kalurahan Sendangtirto menyelenggarakan program Jempol Bapak di Padukuhan Kadipolo dan Sribit, memudahkan warga membayar PBB.</p>
          <div class="blist-meta">
            <span>📅 21 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="sosial">
        <div class="blist-thumb">🤝</div>
        <div class="blist-body">
          <span class="badge badge-light">Sosial</span>
          <h3>Penyaluran BLT-DD untuk 52 Keluarga Penerima Manfaat di Gedung Serbaguna</h3>
          <p>Kalurahan Sendangtirto menyalurkan Bantuan Langsung Tunai Dana Desa kepada 52 KPM dengan total Rp900.000 per keluarga.</p>
          <div class="blist-meta">
            <span>📅 31 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="keagamaan">
        <div class="blist-thumb">🕌</div>
        <div class="blist-body">
          <span class="badge badge-light">Keagamaan</span>
          <h3>Pengajian Jumat Pagi Dirangkai Syawalan dan Pamitan Calon Jamaah Haji</h3>
          <p>Pengajian rutin di Balai Kalurahan kali ini dirangkai dengan syawalan bersama pamong dan pamitan jamaah haji yang akan berangkat.</p>
          <div class="blist-meta">
            <span>📅 3 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="pemerintahan">
        <div class="blist-thumb">👑</div>
        <div class="blist-body">
          <span class="badge badge-light">Pemerintahan</span>
          <h3>Lurah dan Pamong Ikuti Mangayubagya 80 Tahun Yuswa Sri Sultan HB X</h3>
          <p>Lurah dan seluruh pamong Kalurahan Sendangtirto turut berpartisipasi dalam rangkaian peringatan 80 tahun usia Sri Sultan HB X.</p>
          <div class="blist-meta">
            <span>📅 2 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="pkk">
        <div class="blist-thumb">👩‍👧‍👦</div>
        <div class="blist-body">
          <span class="badge badge-light">PKK</span>
          <h3>Pokja II TP PKK Kalurahan Ikuti Pembinaan Administrasi PKK Kapanewon Berbah</h3>
          <p>Pembinaan administrasi PKK diikuti perwakilan Pokja II dari seluruh kalurahan di wilayah Kapanewon Berbah.</p>
          <div class="blist-meta">
            <span>📅 22 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="keamanan">
        <div class="blist-thumb">🛡️</div>
        <div class="blist-body">
          <span class="badge badge-light">Keamanan</span>
          <h3>Pembinaan Satlinmas 2025 Digelar di Balai Kalurahan Sendangtirto</h3>
          <p>Satuan Perlindungan Masyarakat (Satlinmas) Kalurahan Sendangtirto mengikuti pembinaan rutin tahunan untuk meningkatkan kapasitas personel.</p>
          <div class="blist-meta">
            <span>📅 15 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="kesehatan">
        <div class="blist-thumb">🏥</div>
        <div class="blist-body">
          <span class="badge badge-light">Kesehatan</span>
          <h3>Posyandu Kalurahan Catat Rekor Kunjungan Balita di Bulan April</h3>
          <p>Antusiasme warga terhadap program posyandu meningkat signifikan, dengan jumlah kunjungan balita terbanyak sepanjang sejarah kalurahan.</p>
          <div class="blist-meta">
            <span>📅 10 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="sosial">
        <div class="blist-thumb">🌿</div>
        <div class="blist-body">
          <span class="badge badge-light">Sosial</span>
          <h3>Kalurahan dan Lanud Adisutjipto Tinjau Batas Lahan Masjid Sulthoni Wotgaleh</h3>
          <p>Peninjauan bersama antara pihak kalurahan dan Lanud Adisutjipto dilakukan untuk memperjelas batas lahan Masjid Sulthoni dan Makam Wotgaleh.</p>
          <div class="blist-meta">
            <span>📅 5 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="pemerintahan">
        <div class="blist-thumb">📜</div>
        <div class="blist-body">
          <span class="badge badge-light">Adminduk</span>
          <h3>Sosialisasi Administrasi Kependudukan di Kapanewon Berbah</h3>
          <p>Kapanewon Berbah menggelar sosialisasi mengenai Administrasi Kependudukan dan Pencatatan Akta Kematian bagi seluruh pamong.</p>
          <div class="blist-meta">
            <span>📅 24 Feb 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

    </div><div id="noResult" style="display:none;text-align:center;padding:48px 0;color:var(--muted)">
      <div style="font-size:48px;margin-bottom:12px">🔍</div>
      <p>Tidak ada berita yang sesuai pencarian.</p>
    </div>

    <div class="pagination fu">
      <button class="page-btn active">1</button>
      <button class="page-btn">2</button>
      <button class="page-btn">3</button>
      <button class="page-btn">›</button>
    </div>
  </section>

</div>

<?php include '_footer-snippet.php'; ?>

<script src="js/navbar.js"></script>
<script src="js/animations.js"></script>
<script>
// Filter berita by kategori
function filterBerita(kat, btn) {
  document.querySelectorAll('.filter-tab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  const cards = document.querySelectorAll('#beritaGrid .blist-card');
  let visible = 0;
  cards.forEach(card => {
    const match = kat === 'semua' || card.dataset.kategori === kat;
    card.style.display = match ? '' : 'none';
    if (match) visible++;
  });
  document.getElementById('noResult').style.display = visible === 0 ? 'block' : 'none';
}

// Search
function doSearch() {
  const q = document.getElementById('searchInput').value.toLowerCase().trim();
  const cards = document.querySelectorAll('#beritaGrid .blist-card');
  let visible = 0;
  cards.forEach(card => {
    const text = card.textContent.toLowerCase();
    const match = !q || text.includes(q);
    card.style.display = match ? '' : 'none';
    if (match) visible++;
  });
  document.getElementById('noResult').style.display = visible === 0 ? 'block' : 'none';
}

document.getElementById('searchInput').addEventListener('keydown', e => {
  if (e.key === 'Enter') doSearch();
});

// Pagination click effect
document.querySelectorAll('.page-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.page-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  });
});
</script>
</body>
</html>