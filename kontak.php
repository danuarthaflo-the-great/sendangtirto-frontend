<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Hubungi Kami – Kalurahan Sendangtirto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/main.css?v=1.2"/>
  <link rel="stylesheet" href="css/navbar.css?v=1.2"/>
  <link rel="stylesheet" href="css/components.css?v=1.2"/>
  <style>
    /* Gaya pesan error (Merah) */
    .error-msg {
      color: #dc2626;
      font-size: 12px;
      margin-top: 4px;
      display: none;
    }
    /* Gaya input saat salah */
    .invalid {
      border-color: #dc2626 !important;
      background-color: #fef2f2 !important;
    }
    /* Gaya alert sukses (Hijau) */
    .success-alert {
      background-color: #dcfce7;
      color: #15803d;
      padding: 12px;
      border-radius: 4px;
      text-align: center;
      margin-bottom: 15px;
      display: none;
      font-weight: bold;
    }
  </style>
</head>
<body>

<?php include '_navbar-snippet.php'; ?>

<div class="page-content">

  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="hero-anim">
      <span class="stag" style="color:var(--emas-light)"><i class="fa-solid fa-location-dot"></i> Pusat Bantuan</span>
      <h1>Hubungi Kami</h1>
      <p>Kirimkan pertanyaan, pengaduan, atau aspirasi Anda langsung kepada Pemerintah Kalurahan Sendangtirto.</p>
    </div>
  </div>

  <section style="background:var(--putih)">
    <div class="breadcrumb fu">
      <a href="index.php">Beranda</a><span>›</span><span>Kontak</span>
    </div>

    <div class="kontak-grid" style="margin-top: 32px;">
      <div class="kinfo fu">
        <h3>Informasi Kontak Resmi</h3>
        <div class="krow"><div class="kicon"><i class="fa-solid fa-location-dot"></i></div><div><h5>ALAMAT</h5><p>Jl. Berbah KM 2, Sendangtirto,<br/>Kec. Berbah, Kab. Sleman, DIY 55573</p></div></div>
        <div class="krow"><div class="kicon"><i class="fa-solid fa-phone"></i></div><div><h5>TELEPON</h5><p>(0274) 497-1234</p></div></div>
        <div class="krow"><div class="kicon"><i class="fa-solid fa-envelope"></i></div><div><h5>EMAIL</h5><p>devsleman@sendangtirtosid.slemankab.go.id</p></div></div>
        <div class="krow"><div class="kicon"><i class="fa-solid fa-globe"></i></div><div><h5>WEBSITE</h5><p>sendangtirtosid.slemankab.go.id</p></div></div>
        <div class="krow"><div class="kicon"><i class="fa-solid fa-clock"></i></div><div><h5>JAM PELAYANAN</h5><p>Senin–Jumat: 08.00 – 15.30 WIB<br/>Istirahat: 12.00 – 13.00 WIB</p></div></div>
      </div>
      
      <div class="kform fu fu-d1">
        <h3>Kirim Pesan / Pengaduan</h3>

        <div id="alert-sukses" class="success-alert">
          Pesan Anda berhasil dikirim!
        </div>

        <form id="formKontak" novalidate>
          <div class="fg-row">
            <div class="fg">
              <label>NAMA LENGKAP</label>
              <input type="text" id="nama" placeholder="Nama sesuai KTP"/>
              <div id="err-nama" class="error-msg">Nama wajib diisi!</div>
            </div>
            <div class="fg">
              <label>NO. WHATSAPP</label>
              <input type="tel" id="wa" placeholder="08xx-xxxx-xxxx"/>
              <div id="err-wa" class="error-msg">Nomor WhatsApp wajib diisi!</div>
            </div>
          </div>
          
          <div class="fg">
            <label>JENIS KEPERLUAN</label>
            <select id="keperluan">
              <option value="">-- Pilih --</option>
              <option value="Layanan">Layanan Administrasi</option>
              <option value="Pengaduan">Pengaduan Masyarakat</option>
              <option value="Umum">Informasi Umum</option>
              <option value="Saran">Saran & Masukan</option>
            </select>
            <div id="err-keperluan" class="error-msg">Silakan pilih jenis keperluan!</div>
          </div>

          <div class="fg">
            <label>PESAN</label>
            <textarea id="pesan" placeholder="Tuliskan pesan atau keperluan Anda..." rows="5"></textarea>
            <div id="err-pesan" class="error-msg">Pesan tidak boleh kosong!</div>
          </div>

          <button type="submit" class="fsub">Kirim Pesan <i class="fa-solid fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </section>

</div>

<?php include '_footer-snippet.php'; ?>

<script src="js/navbar.js"></script>
<script src="js/animations.js"></script>

<script>
const formulirKontak = document.getElementById("formKontak");
const kotakPemberitahuanSukses = document.getElementById("alert-sukses");

// Fungsi helper untuk memeriksa validitas isian input form (apakah kosong atau tidak)
function periksaValiditasInput(idElemenInput, idElemenError) {
  // Ambil elemen input HTML berdasarkan ID yang dilewatkan
  const elemenInput = document.getElementById(idElemenInput);
  // Ambil elemen pesan error HTML berdasarkan ID yang dilewatkan
  const elemenError = document.getElementById(idElemenError);

  // Periksa apakah nilai isian input setelah dihapus spasi kosongnya bernilai kosong
  if (elemenInput.value.trim() === "") {
    // Tambahkan kelas CSS 'invalid' untuk memberi bingkai merah pada input
    elemenInput.classList.add("invalid");
    // Tampilkan elemen pesan error di layar dengan mengubah properti display menjadi block
    elemenError.style.display = "block";
    // Kembalikan nilai false yang menandakan input tidak valid (kosong)
    return false;
  } else {
    // Hapus kelas CSS 'invalid' agar tampilan input kembali normal
    elemenInput.classList.remove("invalid");
    // Sembunyikan kembali elemen pesan error dari layar
    elemenError.style.display = "none";
    // Kembalikan nilai true yang menandakan input valid (terisi)
    return true;
  }
}

// Menambahkan event listener saat formulir dikirimkan (submit) oleh pengguna
formulirKontak.addEventListener("submit", function (kejadianSubmit) {
  // Mencegah tindakan bawaan browser yang akan memuat ulang (reload) halaman
  kejadianSubmit.preventDefault();

  // Memeriksa validitas input nama lengkap dan menyimpan hasilnya
  const apakahNamaValid = periksaValiditasInput("nama", "err-nama");
  // Memeriksa validitas input nomor WhatsApp dan menyimpan hasilnya
  const apakahWaValid = periksaValiditasInput("wa", "err-wa");
  // Memeriksa validitas pilihan jenis keperluan dan menyimpan hasilnya
  const apakahKeperluanValid = periksaValiditasInput("keperluan", "err-keperluan");
  // Memeriksa validitas input isi pesan dan menyimpan hasilnya
  const apakahPesanValid = periksaValiditasInput("pesan", "err-pesan");

  // Periksa apakah semua isian form bernilai valid (true)
  if (apakahNamaValid && apakahWaValid && apakahKeperluanValid && apakahPesanValid) {
    // Tampilkan kotak pemberitahuan sukses pengiriman pesan ke pengguna
    kotakPemberitahuanSukses.style.display = "block";
    // Bersihkan seluruh isian form agar kembali kosong seperti semula
    formulirKontak.reset();

    // Jalankan timer untuk menyembunyikan kotak pemberitahuan sukses setelah 4 detik
    setTimeout(function () {
      // Sembunyikan kotak pemberitahuan sukses pengiriman pesan
      kotakPemberitahuanSukses.style.display = "none";
    }, 4000);
  }
});
</script>

</body>
</html>