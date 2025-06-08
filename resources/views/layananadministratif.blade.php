<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Layanan Administratif- SIPEKA</title>
  <meta name="description" content="Website resmi pelayanan masyarakat Kelurahan Bukit Datuk, Kota Dumai.">
  <meta name="keywords" content="Kelurahan Bukit Datuk, Pelayanan Masyarakat, Dumai, Website Kelurahan">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <!-- CDN Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/profilkelurahan.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: AgriCulture
  * Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sukses!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <strong>Gagal!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/LOGO KOTA DUMAI.png" alt="logokotadumai">
        <h5 class="sitename">SISTEM INFORMASI PELAYANAN MASYARAKAT KELURAHAN BUKIT DATUK</h5>
      </a>

      <nav id="navmenu" class="navmenu">
      <form action="/search" method="GET">
              <div class="form-group d-flex align-items-stretch">
                  <input type="email" name="email" class="form-control h-100" placeholder="Search">
                  <input type="submit" class="btn btn-success px-4" value="Search">
              </div>
              <!--<div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">
                  Your subscription request has been sent. Thank you!
            </div>-->
        </form>
        <ul>
          <li><a href="/">Beranda</a></li>
          <li><a href="{{ route('profilkelurahan') }}">Profil Kelurahan</a></li>
          <li class="dropdown"><a href="#" class="active"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('layananadministratif') }}">Layanan Administratif</a></li>
              <li><a href="#">Layanan Pengaduan & Saran</a></li>
              <li><a href="#">Berita & Pengumuman</a></li>
              <li><a href="#">Tracking Permohonan</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Kelembagaan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Lembaga Pemberdayaan Masyarakat Kelurahan (LPMK)</a></li>
              <li><a href="#">Pemberdayaan Kesejahteraan Keluarga (PKK)</a></li>
              <li><a href="#">BKM Sejahtera Mandiri</a></li>
              <li><a href="#">UEK-SP Usaha Bersama</a></li>
              <li><a href="#">Kelurahan Siaga Aktif</a></li>
              <li><a href="#">Forum RT</a></li>
              <li><a href="#">Persatuan Majelis Taklim</a></li>

            </ul>
          </li>
          <li><a href="#">Pemberdayaan</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Profile</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
    
  </header>

  <main class="main">

    <br>
    <!-- Page Title -->
    <div class="page-judul">
            <h2>Layanan Administratif</h2>
            <p>Pilih jenis surat yang ingin Anda ajukan</p>
        </div>

        <!-- Info Banner -->
        <div class="info-banner">
            <h3>ℹ️ Informasi Penting</h3>
            <p>Pastikan semua dokumen persyaratan telah disiapkan sebelum mengajukan permohonan. Proses verifikasi akan dilakukan dalam waktu 1-3 hari kerja. Untuk informasi lebih lanjut, hubungi petugas kelurahan.</p>
        </div>

        <!-- Search and Filter -->
        <div class="search-filter">
            <div class="search-box">
                <input type="text" class="search-input" placeholder="Cari jenis surat atau layanan..." id="searchInput">
                <button class="search-btn" onclick="filterServices()">🔍 Cari</button>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="services-grid" id="servicesGrid">
            <!-- Surat Pengantar Kartu Keluarga -->
            <div class="service-card" data-service="kartu keluarga kk">
                <div class="service-header">
                    <div class="service-icon">👨‍👩‍👧‍👦</div>
                    <div class="service-info">
                        <h3>Surat Pengantar Kartu Keluarga</h3>
                        <span class="service-code">KK-001</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat pengantar untuk pembuatan atau perubahan Kartu Keluarga (KK) yang diperlukan untuk keperluan administrasi kependudukan.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Surat Pengantar RT</li>
                        <li>Fotocopy KK lama (jika ada)</li>
                        <li>Fotocopy Surat nikah/cerai (jika ada perubahan)</li>
                        <li>Fotocopy Surat keterangan lahir/mati (jika ada)</li>
                        <li>Fotocopy Surat Pindah Bagi Pendatang</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1-2 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat Pengantar Kartu Keluarga')" data-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>


                <!-- Surat Pengantar SKGR -->
                <div class="service-card" data-service="skgr ganti rugi">
                    <div class="service-header">
                        <div class="service-icon">📜</div>
                        <div class="service-info">
                            <h3>Surat Pengantar Pembuatan SKGR</h3>
                            <span class="service-code">SKGR-002</span>
                        </div>
                    </div>
                    <div class="service-description">
                        Surat Keterangan Ganti Rugi untuk keperluan klaim asuransi atau kompensasi atas kerugian yang dialami.
                    </div>
                    <div class="service-requirements">
                        <h4>📋 Persyaratan:</h4>
                        <ul class="requirements-list">
                            <li>Surat Dasar Tanah Asli</li>
                            <li>Fotocopy KTP Pemilik dan Pembeli Tanah</li>
                            <li>Fotocopy KTP Sempadan Tanah</li>
                            <li>Fotocopy KTP Saksi Keluarga 2 Orang</li>
                            <li>Surat keterangan kepolisian (jika ada)</li>
                            <li>Dokumen pendukung kerugian</li>
                        </ul>
                    </div>
                    <div class="service-footer">
                        <div class="service-time">
                            <span>⏱️</span>
                            <span>2-3 hari kerja</span>
                        </div>
                        <button class="apply-btn" onclick="applyService('Surat Pengantar SKGR')" data-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                    </div>
                </div>

            <!-- SKTM -->
            <div class="service-card" data-service="sktm tidak mampu miskin">
                <div class="service-header">
                    <div class="service-icon">🏠</div>
                    <div class="service-info">
                        <h3>Surat Keterangan Tidak Mampu (SKTM)</h3>
                        <span class="service-code">SKTM-003</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat keterangan untuk warga yang membutuhkan bantuan sosial, beasiswa, atau keringanan biaya layanan publik.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Surat Pengantar RT</li>
                        <li>Fotocopy KTP dan KK</li>
                        <li>Surat keterangan penghasilan</li>
                        <li>Surat keterangan RT/RW</li>
                        <li>Foto rumah tampak depan</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1-2 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat Keterangan Tidak Mampu (SKTM)')" data-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Surat Keterangan Kematian -->
            <div class="service-card" data-service="kematian meninggal">
                <div class="service-header">
                    <div class="service-icon">🕊️</div>
                    <div class="service-info">
                        <h3>Surat Keterangan Kematian</h3>
                        <span class="service-code">SKM-004</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat keterangan untuk mencatat peristiwa kematian yang diperlukan untuk administrasi dan keperluan pemakaman.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Surat Pengantar RT</li>
                        <li>Surat keterangan dokter/rumah sakit</li>
                        <li>Fotocopy KTP almarhum</li>
                        <li>Fotocopy KK</li>
                        <li>KTP pelapor</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat Keterangan Kematian')" data-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Surat Keterangan Catatan Kepolisian -->
            <div class="service-card" data-service="catatan kepolisian skck">
                <div class="service-header">
                    <div class="service-icon">🚔</div>
                    <div class="service-info">
                        <h3>Surat Keterangan Catatan Kepolisian</h3>
                        <span class="service-code">SKCK-005</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat pengantar untuk pembuatan SKCK yang diperlukan untuk melamar pekerjaan atau keperluan lainnya.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Fotocopy KTP dan KK</li>
                        <li>Pas foto 4x6 (2 lembar)</li>
                        <li>Surat keterangan dari RT/RW</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat Pengantar SKCK')" data-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- IMB -->
            <div class="service-card" data-service="imb izin mendirikan bangunan">
                <div class="service-header">
                    <div class="service-icon">🏗️</div>
                    <div class="service-info">
                        <h3>Surat Izin Mendirikan Bangunan (IMB)</h3>
                        <span class="service-code">IMB-006</span>
                    </div>
                </div>
                <div class="service-description">
                    Izin untuk mendirikan atau merenovasi bangunan sesuai dengan tata ruang dan peraturan yang berlaku.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Surat Pengantar RT</li>
                        <li>Fotocopy sertifikat tanah</li>
                        <li>Fotocopy KTP dan KK</li>
                        <li>Gambar rencana bangunan</li>
                        <li>Surat Bukti Lunas Pajak PBB</li>
                        <li>Surat pernyataan tidak keberatan tetangga</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>7-14 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat IMB')" data-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Surat Izin Keramaian -->
            <div class="service-card" data-service="izin keramaian acara event">
                <div class="service-header">
                    <div class="service-icon">🎉</div>
                    <div class="service-info">
                        <h3>Surat Izin Keramaian/Mengadakan Acara</h3>
                        <span class="service-code">SKA-007</span>
                    </div>
                </div>
                <div class="service-description">
                    Izin untuk mengadakan acara atau kegiatan yang melibatkan banyak orang di wilayah kelurahan.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Surat permohonan</li>
                        <li>Fotocopy KTP penyelenggara</li>
                        <li>Surat tidak keberatan RT/RW</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>3-5 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat Izin Keramaian')" data-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Pengantar Surat Nikah -->
            <div class="service-card" data-service="nikah pernikahan">
                <div class="service-header">
                    <div class="service-icon">💍</div>
                    <div class="service-info">
                        <h3>Pengantar Surat Nikah</h3>
                        <span class="service-code">SPN-008</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat pengantar untuk proses pernikahan di KUA atau tempat ibadah yang diakui secara hukum.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Surat Pengantar RT</li>
                        <li>Fotocopy KTP calon pengantin</li>
                        <li>Fotocopy KK masing-masing</li>
                        <li>Surat keterangan belum menikah diatas materai</li>
                        <li>Pas foto bersama 4x6</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1-2 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Pengantar Surat Nikah')" data-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Pengantar Surat Akta Kelahiran -->
            <div class="service-card" data-service="akta kelahiran">
                <div class="service-header">
                    <div class="service-icon">👶</div>
                    <div class="service-info">
                        <h3>Pengantar Surat Akta Kelahiran</h3>
                        <span class="service-code">SPAK-009</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat pengantar untuk perpindahan tempat tinggal ke daerah lain dalam atau luar kota.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Fotocopy KTP dan KK</li>
                        <li>Surat keterangan RT</li>
                        <li>Fotocopy Buku Nikah</li>
                        <li>Surat Keterangan Kelahiran</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1-2 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Pengantar Surat Akta Kelahiran')" ata-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

                <!-- Pengantar Surat Pindah -->
                <div class="service-card" data-service="pindah domisili">
                <div class="service-header">
                    <div class="service-icon">📦</div>
                    <div class="service-info">
                        <h3>Pengantar Surat Keterangan Pindah</h3>
                        <span class="service-code">SPP-010</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat pengantar untuk perpindahan tempat tinggal ke daerah lain dalam atau luar kota.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Fotocopy KTP dan KK</li>
                        <li>Surat keterangan RT</li>
                        <li>Surat keterangan tujuan pindah</li>
                        <li>Formulir perpindahan penduduk</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1-2 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Pengantar Surat Pindah')" ata-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Surat Keterangan Domisili-->
            <div class="service-card" data-service="keterangan domisili">
                <div class="service-header">
                    <div class="service-icon">📍</div>
                    <div class="service-info">
                        <h3>Surat Keterangan Domisili</h3>
                        <span class="service-code">SKD-011</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat pengantar untuk perpindahan tempat tinggal ke daerah lain dalam atau luar kota.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Fotocopy KTP dan KK</li>
                        <li>Surat keterangan RT</li>
                        <li>Surat pindah</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1-2 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat Keterangan Domisili')" ata-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Surat Keterangan Usaha-->
            <div class="service-card" data-service="keterangan usaha">
                <div class="service-header">
                    <div class="service-icon">💼</div>
                    <div class="service-info">
                        <h3>Surat Keterangan Usaha</h3>
                        <span class="service-code">SKU-012</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat pengantar untuk perpindahan tempat tinggal ke daerah lain dalam atau luar kota.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Fotocopy KTP dan KK</li>
                        <li>Surat keterangan RT</li>
                        <li>Surat Pernyataan Diatas Materai 6000</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1-2 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat Keterangan Usaha')" ata-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Surat Keterangan Kredit Bank-->
            <div class="service-card" data-service="kredit bank">
                <div class="service-header">
                    <div class="service-icon">💳</div>
                    <div class="service-info">
                        <h3>Surat Keterangan Kredit Bank</h3>
                        <span class="service-code">SKKB-013</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat pengantar untuk perpindahan tempat tinggal ke daerah lain dalam atau luar kota.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Fotocopy KK</li>
                        <li>Surat keterangan RT</li>
                        <li>Dokumen Pernyataan Jenis Usaha</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1-2 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat Keterangan Kredit Bank')" ata-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Surat AHli Waris-->
            <div class="service-card" data-service="ahli waris">
                <div class="service-header">
                    <div class="service-icon">📜</div>
                    <div class="service-info">
                        <h3>Surat Ahli Waris</h3>
                        <span class="service-code">SAW-014</span>
                    </div>
                </div>
                <div class="service-description">
                    Surat pengantar untuk perpindahan tempat tinggal ke daerah lain dalam atau luar kota.
                </div>
                <div class="service-requirements">
                    <h4>📋 Persyaratan:</h4>
                    <ul class="requirements-list">
                        <li>Fotocopy KK yang meninggal</li>
                        <li>Fotocopy KTP ahli waris</li>
                        <li>Fotocopy Surat Nikah</li>
                        <li>Surat keterangan RT</li>
                        <li>Surat Pernyataan Ahli</li>
                    </ul>
                </div>
                <div class="service-footer">
                    <div class="service-time">
                        <span>⏱️</span>
                        <span>1-2 hari kerja</span>
                    </div>
                    <button class="apply-btn" onclick="applyService('Surat Ahli Waris')" data-bs-toggle="modal" data-bs-target="#modalcreate">Ajukan</button>
                </div>
            </div>

            <!-- Modal Create Surat -->
            <div class="modal fade" id="modalcreate" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajukan Surat</h5>
                    </div>

                    <form method="POST" action="{{ route('administratif.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                        {{-- Nama user (ditampilkan, bukan diedit) --}}
                        <div class="form-group">
                            <label for="">Nama Pemohon</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->nama }}" disabled>
                        </div>

                        {{-- Jenis surat --}}
                        <div class="form-group">
                            <label for="jenisSuratDisplay">Jenis Surat</label>
                            <input type="hidden" name="jenis_surat" id="jenisSuratHidden" required>
                            <input type="text" class="form-control" id="jenisSuratDisplay" disabled>
                        </div>


                        {{-- Catatan --}}
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea name="catatan" class="form-control" rows="3" placeholder="Tambahkan catatan jika perlu" required></textarea>
                        </div>

                        {{-- File upload (opsional) --}}
                        <div class="form-group">
                            <label for="file_path">Upload Dokumen Pendukung Dalam Satu File PDF (PDF, max 2MB per file)</label>
                            <input type="file" class="form-control" name="file_path[]" accept=".pdf,.jpg,.jpeg,.png" multiple required>
                        </div>


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Ajukan</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">Kelurahan Bukit Datuk</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Jalan Marlan Jaya, Kelurahan Bukit Datuk</p>
              <p>Kecamatan Dumai Selatan, Kota Dumai</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Jenis Surat Otomatis -->
  <script>
    function applyService(jenis) {
        document.getElementById('jenisSuratHidden').value = jenis;
        document.getElementById('jenisSuratDisplay').value = jenis;
        const modal = new bootstrap.Modal(document.getElementById('modalcreate'));
        modal.show();
    }
  </script>

    <script>
    document.getElementById('modalcreate').addEventListener('hidden.bs.modal', function () {
        this.querySelector('form').reset();
        document.getElementById('jenisSuratDisplay').value = '';
    });
    </script>

  <!-- Vendor JS Files -->
  <script>
        // Add interactive effects
        document.querySelectorAll('.service-item').forEach(item => {
            item.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1.05)';
                }, 150);
            });
        });

        // Smooth scroll animation for stats
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.stat-card, .profile-card, .service-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Add number animation for statistics
        function animateNumber(element, target) {
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current).toLocaleString();
            }, 30);
        }

        // Trigger number animations when stats come into view
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const numberElement = entry.target.querySelector('.stat-number');
                    const targetNumber = parseInt(numberElement.textContent.replace(/,/g, ''));
                    animateNumber(numberElement, targetNumber);
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        document.querySelectorAll('.stat-card').forEach(card => {
            statsObserver.observe(card);
        });
  </script>

  <!-- filter pencarian -->
  <script>
    function filterServices() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const services = document.querySelectorAll('.service-card');

        services.forEach(service => {
            const text = service.textContent.toLowerCase();
            if (text.includes(input)) {
                service.style.display = 'block';
            } else {
                service.style.display = 'none';
            }
        });
    }
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>