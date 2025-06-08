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
  <link href="assets/css/layananpengaduan.css" rel="stylesheet">

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
              <li><a href="{{ route('layananpengaduan') }}">Layanan Pengaduan & Saran</a></li>
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
            <h2>Layanan Pengaduan & Saran</h2>
            <p>Sampaikan aspirasi, keluhan, dan saran Anda untuk kemajuan bersama Kelurahan Bukit Datuk</p>
        </div>

        <!-- Info Banner -->
        <!--<div class="info-banner">
            <h3>ℹ️ Informasi Penting</h3>
            <p>Pastikan semua dokumen persyaratan telah disiapkan sebelum mengajukan permohonan. Proses verifikasi akan dilakukan dalam waktu 1-3 hari kerja. Untuk informasi lebih lanjut, hubungi petugas kelurahan.</p>
        </div>-->

        <!-- Search and Filter -->
        <!--<div class="search-filter">
            <div class="search-box">
                <input type="text" class="search-input" placeholder="Cari jenis surat atau layanan..." id="searchInput">
                <button class="search-btn" onclick="filterServices()">🔍 Cari</button>
            </div>
        </div>-->

        <div class="service-cards">
            <div class="service-card">
                <div class="service-icon">📝</div>
                <h3>Ajukan Pengaduan Baru</h3>
                <p>Laporkan masalah atau keluhan terkait pelayanan publik di wilayah Kelurahan Bukit Datuk. Tim kami akan segera menindaklanjuti laporan Anda.</p>
                <button class="btn" data-bs-toggle="modal" data-bs-target="#modalpengaduan"><a class="btntext" href="#">Buat Pengaduan</a></button>
            </div>

            <div class="service-card">
                <div class="service-icon">💡</div>
                <h3>Kirim Saran & Masukan</h3>
                <p>Berikan saran konstruktif untuk meningkatkan kualitas pelayanan dan pembangunan di Kelurahan Bukit Datuk.</p>
                <a href="#" class="btn">Kirim Saran</a>
            </div>

            <div class="service-card">
                <div class="service-icon">🔍</div>
                <h3>Lacak Status Pengaduan</h3>
                <p>Pantau perkembangan pengaduan yang telah Anda ajukan dengan menggunakan nomor tiket atau NIK Anda.</p>
                <a href="#" class="btn">Lacak Status</a>
            </div>

            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Laporan Bulanan</h3>
                <p>Lihat statistik dan laporan penanganan pengaduan masyarakat setiap bulannya untuk transparansi pelayanan.</p>
                <a href="#" class="btn">Lihat Laporan</a>
            </div>
        </div>

        <div class="recent-complaints">
            <h3>📋 Pengaduan Terbaru</h3>
            
            <div class="complaint-item">
                <div class="complaint-title">Perbaikan Jalan Rusak RT 05 RW 02</div>
                <div class="complaint-meta">
                    <span>📅 2 hari yang lalu</span>
                    <span>👤 Anonim</span>
                    <span class="status-badge status-process">Dalam Proses</span>
                </div>
            </div>

            <div class="complaint-item">
                <div class="complaint-title">Lampu Penerangan Jalan Mati</div>
                <div class="complaint-meta">
                    <span>📅 3 hari yang lalu</span>
                    <span>👤 Pak Budi</span>
                    <span class="status-badge status-resolved">Selesai</span>
                </div>
            </div>

            <div class="complaint-item">
                <div class="complaint-title">Saluran Air Tersumbat</div>
                <div class="complaint-meta">
                    <span>📅 5 hari yang lalu</span>
                    <span>👤 Ibu Sari</span>
                    <span class="status-badge status-pending">Menunggu</span>
                </div>
            </div>

            <div class="complaint-item">
                <div class="complaint-title">Saran Penambahan Taman Kanak-kanak</div>
                <div class="complaint-meta">
                    <span>📅 1 minggu yang lalu</span>
                    <span>👤 Ibu Dewi</span>
                    <span class="status-badge status-process">Dikaji</span>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal Create Pengaduan -->
        <div class="modal fade" id="modalpengaduan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajukan Pengaduan</h5>
                    </div>

                    <form method="POST" action="{{ route('pengaduan.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            {{-- Nama user (hanya ditampilkan) --}}
                            <div class="form-group">
                                <label for="">Nama Pelapor</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->nama }}" disabled>
                            </div>

                            {{-- Judul Pengaduan --}}
                            <div class="form-group">
                                <label for="judul_pengaduan">Judul Pengaduan</label>
                                <input type="text" name="judul_pengaduan" class="form-control" required>
                            </div>

                            {{-- Kategori Pengaduan (disesuaikan enum di database) --}}
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="pelayanan">Pelayanan</option>
                                    <option value="fasilitas_umum">Fasilitas Umum</option>
                                    <option value="kshtn_kbrshn">Kesehatan & Kebersihan</option>
                                    <option value="katib">Keamanan & Ketertiban</option>
                                    <option value="sosial">Sosial</option>
                                    <option value="pelanggaran_hukum">Pelanggaran Hukum</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>

                            {{-- Deskripsi Pengaduan --}}
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="4" required placeholder="Jelaskan permasalahan secara rinci..."></textarea>
                            </div>

                            {{-- Upload Bukti (opsional) --}}
                            <div class="form-group">
                                <label for="file_path">Upload Bukti Pendukung (PDF/JPG/PNG, max 2MB per file)</label>
                                <input type="file" class="form-control" name="file_path[]" accept=".pdf,.jpg,.jpeg,.png" multiple>
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