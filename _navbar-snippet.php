<?php $page = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar">
  <a class="nav-brand" href="index.php">
    <div class="nav-emblem">
      <img src="img/logo-sleman.jpg" alt="Logo Sleman">
    </div>
    <div class="nav-brand-text">
      <strong>Kalurahan Sendangtirto</strong>
      <small>Kapanewon Berbah · Kab. Sleman · DIY</small>
    </div>
  </a>

  <ul class="nav-menu">
    <li><a href="index.php" class="<?= $page == 'index.php' ? 'active' : '' ?>">Beranda</a></li>
    <li><a href="statistik.php" class="<?= $page == 'statistik.php' ? 'active' : '' ?>">Statistik</a></li>
    <li><a href="struktur.php" class="<?= $page == 'struktur.php' ? 'active' : '' ?>">Struktur</a></li>
    <li><a href="layanan.php" class="<?= $page == 'layanan.php' ? 'active' : '' ?>">Layanan</a></li>
    <li><a href="berita.php" class="<?= ($page == 'berita.php' || $page == 'berita-detail.php') ? 'active' : '' ?>">Berita</a></li>
    <li><a href="pengumuman.php" class="<?= $page == 'pengumuman.php' ? 'active' : '' ?>">Pengumuman</a></li>
    <li><a href="kontak.php" class="<?= $page == 'kontak.php' ? 'active' : '' ?>">Kontak</a></li>
    <li><button class="nav-cta">Layanan Online</button></li>
  </ul>

  <button class="nav-toggle" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<div class="nav-drawer">
  <a href="index.php"><span class="drawer-icon">🏠</span> Beranda</a>
  <a href="statistik.php"><span class="drawer-icon">📊</span> Statistik Penduduk</a>
  <a href="struktur.php"><span class="drawer-icon">🏛️</span> Struktur Organisasi</a>
  <a href="layanan.php"><span class="drawer-icon">⚙️</span> Layanan</a>
  <a href="berita.php"><span class="drawer-icon">📰</span> Berita & Kegiatan</a>
  <a href="pengumuman.php"><span class="drawer-icon">📢</span> Pengumuman</a>
  <a href="kontak.php"><span class="drawer-icon">📍</span> Kontak</a>
  <a href="#" class="drawer-cta">🖥️ Layanan Online</a>
</div>
<div class="nav-overlay"></div>