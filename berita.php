<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Berita & Kegiatan – Kalurahan Sendangtirto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/main.css?v=1.1"/>
  <link rel="stylesheet" href="css/navbar.css?v=1.1"/>
  <link rel="stylesheet" href="css/components.css?v=1.1"/>
</head>
<body>

<?php include '_navbar-snippet.php'; ?>

<div class="page-content">

  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="hero-anim">
      <span class="stag" style="color:var(--emas-light)"><i class="fa-solid fa-newspaper"></i> Informasi Terkini</span>
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
      <button onclick="lakukanPencarianBerita()">Cari</button>
    </div>

    <div class="filter-tabs fu" id="filterTabs">
      <button class="filter-tab active" onclick="saringKategoriBerita('semua', this)">Semua</button>
      <button class="filter-tab" onclick="saringKategoriBerita('sosial', this)">Sosial</button>
      <button class="filter-tab" onclick="saringKategoriBerita('pemerintahan', this)">Pemerintahan</button>
      <button class="filter-tab" onclick="saringKategoriBerita('kesehatan', this)">Kesehatan</button>
      <button class="filter-tab" onclick="saringKategoriBerita('keagamaan', this)">Keagamaan</button>
      <button class="filter-tab" onclick="saringKategoriBerita('pkk', this)">PKK</button>
      <button class="filter-tab" onclick="saringKategoriBerita('keamanan', this)">Keamanan</button>
      <div class="berita-list-grid auto-stagger" id="beritaGrid">

      <div class="blist-card fu" data-kategori="pemerintahan">
        <div class="blist-thumb"><img src="img/thum-Jempol Bapak Dekatkan Warga Padukuhan Kadipolo dan Sribit Bayar Pajak PBB.png" alt="Jempol Bapak"></div>
        <div class="blist-body">
          <span class="badge badge-light">Pelayanan Warga</span>
          <h3>Jempol Bapak: Dekatkan Warga Padukuhan Kadipolo dan Sribit Bayar Pajak PBB</h3>
          <p>Pemerintah Kalurahan Sendangtirto menyelenggarakan program Jempol Bapak di Padukuhan Kadipolo dan Sribit, memudahkan warga membayar PBB.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 21 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="sosial">
        <div class="blist-thumb"><img src="img/thum-Penyaluran BLT-DD untuk 52 Keluarga Penerima Manfaat di Gedung Serbaguna.png" alt="BLT-DD"></div>
        <div class="blist-body">
          <span class="badge badge-light">Sosial</span>
          <h3>Penyaluran BLT-DD untuk 52 Keluarga Penerima Manfaat di Gedung Serbaguna</h3>
          <p>Kalurahan Sendangtirto menyalurkan Bantuan Langsung Tunai Dana Desa kepada 52 KPM dengan total Rp900.000 per keluarga.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 31 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="keagamaan">
        <div class="blist-thumb"><img src="img/thum-Pengajian Jumat Pagi Dirangkai Syawalan dan Pamitan Calon Jamaah Haji.png" alt="Pengajian"></div>
        <div class="blist-body">
          <span class="badge badge-light">Keagamaan</span>
          <h3>Pengajian Jumat Pagi Dirangkai Syawalan dan Pamitan Calon Jamaah Haji</h3>
          <p>Pengajian rutin di Balai Kalurahan kali ini dirangkai dengan syawalan bersama pamong dan pamitan jamaah haji yang akan berangkat.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 3 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="pemerintahan">
        <div class="blist-thumb"><img src="img/thum-Lurah dan Pamong Ikuti Mangayubagya 80 Tahun Yuswa Sri Sultan HB X.png" alt="Mangayubagya"></div>
        <div class="blist-body">
          <span class="badge badge-light">Pemerintahan</span>
          <h3>Lurah dan Pamong Ikuti Mangayubagya 80 Tahun Yuswa Sri Sultan HB X</h3>
          <p>Lurah dan seluruh pamong Kalurahan Sendangtirto turut berpartisipasi dalam rangkaian peringatan 80 tahun usia Sri Sultan HB X.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 2 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="pkk">
        <div class="blist-thumb"><img src="img/thum-Pokja II TP PKK Kalurahan Ikuti Pembinaan Administrasi PKK Kapanewon Berbah.png" alt="Pembinaan PKK"></div>
        <div class="blist-body">
          <span class="badge badge-light">PKK</span>
          <h3>Pokja II TP PKK Kalurahan Ikuti Pembinaan Administrasi PKK Kapanewon Berbah</h3>
          <p>Pembinaan administrasi PKK diikuti perwakilan Pokja II dari seluruh kalurahan di wilayah Kapanewon Berbah.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 22 April 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="keamanan">
        <div class="blist-thumb"><img src="img/thum-Pembinaan Satlinmas 2025 Digelar di Balai Kalurahan Sendangtirto.png" alt="Satlinmas"></div>
        <div class="blist-body">
          <span class="badge badge-light">Keamanan</span>
          <h3>Pembinaan Satlinmas 2025 Digelar di Balai Kalurahan Sendangtirto</h3>
          <p>Satuan Perlindungan Masyarakat (Satlinmas) Kalurahan Sendangtirto mengikuti pembinaan rutin tahunan untuk meningkatkan kapasitas personel.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 15 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="kesehatan">
        <div class="blist-thumb"><img src="img/thum-Posyandu Kalurahan Catat Rekor Kunjungan Balita di Bulan April.png" alt="Posyandu"></div>
        <div class="blist-body">
          <span class="badge badge-light">Kesehatan</span>
          <h3>Posyandu Kalurahan Catat Rekor Kunjungan Balita di Bulan April</h3>
          <p>Antusiasme warga terhadap program posyandu meningkat signifikan, dengan jumlah kunjungan balita terbanyak sepanjang sejarah kalurahan.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 10 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="sosial">
        <div class="blist-thumb"><img src="img/thum-Kalurahan dan Lanud Adisutjipto Tinjau Batas Lahan Masjid Sulthoni Wotgaleh.png" alt="Masjid Wotgaleh"></div>
        <div class="blist-body">
          <span class="badge badge-light">Sosial</span>
          <h3>Kalurahan dan Lanud Adisutjipto Tinjau Batas Lahan Masjid Sulthoni Wotgaleh</h3>
          <p>Peninjauan bersama antara pihak kalurahan dan Lanud Adisutjipto dilakukan untuk memperjelas batas lahan Masjid Sulthoni dan Makam Wotgaleh.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 5 Maret 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

      <div class="blist-card fu" data-kategori="pemerintahan">
        <div class="blist-thumb"><img src="img/thum-Sosialisasi Administrasi Kependudukan di Kapanewon Berbah.png" alt="Sosialisasi Adminduk"></div>
        <div class="blist-body">
          <span class="badge badge-light">Adminduk</span>
          <h3>Sosialisasi Administrasi Kependudukan di Kapanewon Berbah</h3>
          <p>Kapanewon Berbah menggelar sosialisasi mengenai Administrasi Kependudukan dan Pencatatan Akta Kematian bagi seluruh pamong.</p>
          <div class="blist-meta">
            <span><i class="fa-solid fa-calendar-days"></i> 24 Feb 2026</span>
            <a href="berita-detail.php" class="blist-read">Baca →</a>
          </div>
        </div>
      </div>

    </div><div id="noResult" style="display:none;text-align:center;padding:48px 0;color:var(--muted)">
      <div style="font-size:48px;margin-bottom:12px"><i class="fa-solid fa-magnifying-glass"></i></div>
      <p>Tidak ada berita yang sesuai pencarian.</p>
    </div>

    <div class="pagination fu">
      <button class="page-btn active">1</button>
      <button class="page-btn">2</button>
      <button class="page-btn">3</button>
      <button class="page-btn"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
  </section>

</div>

<?php include '_footer-snippet.php'; ?>

<script src="js/navbar.js"></script>
<script src="js/animations.js"></script>
<script>
// Fungsi untuk menyaring berita berdasarkan kategori yang dipilih
function saringKategoriBerita(kategoriPilihan, tombolPilihan) {
  // Ambil semua tombol filter dan hapus kelas 'active' dari tombol tersebut
  document.querySelectorAll('.filter-tab').forEach(tombolTab => {
    // Menghapus kelas 'active' pada tab agar tidak terlihat aktif
    tombolTab.classList.remove('active');
  });
  // Tambahkan kelas 'active' ke tombol filter yang baru saja di-klik oleh pengguna
  tombolPilihan.classList.add('active');
  // Ambil seluruh elemen kartu berita di dalam grid berita
  const kumpulanKartu = document.querySelectorAll('#beritaGrid .blist-card');
  // Variabel penampung untuk menghitung jumlah kartu berita yang lolos saringan
  let jumlahKartuTerlihat = 0;
  // Lakukan perulangan untuk memeriksa kesesuaian kategori pada setiap kartu berita
  kumpulanKartu.forEach(kartu => {
    // Periksa apakah kategori pilihan adalah 'semua' atau cocok dengan atribut kategori pada kartu
    const apakahKategoriCocok = kategoriPilihan === 'semua' || kartu.dataset.kategori === kategoriPilihan;
    // Tampilkan kartu jika cocok, atau sembunyikan jika tidak cocok dengan kategori pilihan
    kartu.style.display = apakahKategoriCocok ? '' : 'none';
    // Jika kartu tersebut cocok dan ditampilkan, tambahkan nilai penghitung kartu terlihat
    if (apakahKategoriCocok) {
      // Tambahkan 1 ke variabel jumlah kartu terlihat
      jumlahKartuTerlihat++;
    }
  });
  // Jika tidak ada kartu berita yang terlihat, tampilkan pesan kosong. Jika ada, sembunyikan pesan tersebut
  document.getElementById('noResult').style.display = jumlahKartuTerlihat === 0 ? 'block' : 'none';
}

// Fungsi untuk melakukan pencarian berita berdasarkan teks input pengguna
function lakukanPencarianBerita() {
  // Ambil nilai teks dari kolom input pencarian, ubah ke huruf kecil, lalu bersihkan spasi di awal/akhir
  const kataKunciCari = document.getElementById('searchInput').value.toLowerCase().trim();
  // Ambil semua elemen kartu berita di dalam grid berita
  const kumpulanKartu = document.querySelectorAll('#beritaGrid .blist-card');
  // Variabel penampung untuk menghitung jumlah kartu berita yang lolos pencarian
  let jumlahKartuTerlihat = 0;
  // Lakukan perulangan untuk mencari teks kata kunci di dalam setiap kartu berita
  kumpulanKartu.forEach(kartu => {
    // Ambil seluruh isi teks dari kartu berita tersebut dan ubah menjadi huruf kecil
    const isiTeksKartu = kartu.textContent.toLowerCase();
    // Periksa apakah kata kunci kosong, atau apakah isi teks kartu mengandung kata kunci pencarian
    const apakahKataKunciCocok = !kataKunciCari || isiTeksKartu.includes(kataKunciCari);
    // Tampilkan kartu jika cocok dengan kata kunci, atau sembunyikan jika tidak cocok
    kartu.style.display = apakahKataKunciCocok ? '' : 'none';
    // Jika kartu tersebut cocok dan ditampilkan, tambahkan nilai penghitung kartu terlihat
    if (apakahKataKunciCocok) {
      // Tambahkan 1 ke variabel jumlah kartu terlihat
      jumlahKartuTerlihat++;
    }
  });
  // Jika tidak ada kartu berita yang cocok dengan kata kunci, tampilkan pesan kosong. Jika ada, sembunyikan
  document.getElementById('noResult').style.display = jumlahKartuTerlihat === 0 ? 'block' : 'none';
}

// Menambahkan event listener keyboard pada input pencarian
document.getElementById('searchInput').addEventListener('keydown', e => {
  // Jika tombol yang ditekan oleh pengguna adalah tombol Enter
  if (e.key === 'Enter') {
    // Jalankan fungsi pencarian berita
    lakukanPencarianBerita();
  }
});

// Menambahkan efek klik aktif pada seluruh tombol paginasi halaman
document.querySelectorAll('.page-btn').forEach(tombolHalaman => {
  // Daftarkan event klik pada setiap tombol halaman
  tombolHalaman.addEventListener('click', () => {
    // Hapus kelas 'active' dari semua tombol halaman terlebih dahulu
    document.querySelectorAll('.page-btn').forEach(tombolLain => {
      // Menghapus kelas 'active' pada tombol lain
      tombolLain.classList.remove('active');
    });
    // Tambahkan kelas 'active' ke tombol halaman yang sedang di-klik oleh pengguna
    tombolHalaman.classList.add('active');
  });
});
</script>
</body>
</html>