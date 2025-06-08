<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profil Kelurahan Bukit Datuk - SIPEKA</title>
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
          <li><a href="{{ route('profilkelurahan') }}" class="active">Profil Kelurahan</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
  <div class="container">

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">11,483</div>
                <div class="stat-label">Total Penduduk</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">2,505</div>
                <div class="stat-label">Kepala Keluarga</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">26</div>
                <div class="stat-label">RT</div>
            </div>
        </div>

        <!-- About Section -->
        <div class="about-section">
            <div class="about-header">
                <div class="card-icon">🏛️</div>
                <div class="card-title">Tentang Kelurahan Bukit Datuk</div>
            </div>
            <div class="about-content">
                <img src="assets/img/kantor.jpg" alt="Kantor Kelurahan Bukit Datuk" class="office-image">
                <div class="about-text">
                    <h3>Sejarah dan Visi Kelurahan</h3>
                    <p>Kelurahan Bukit Datuk merupakan salah satu kelurahan yang terletak di Kecamatan Dumai Selatan, Kota Dumai, Provinsi Riau. Kelurahan ini memiliki posisi strategis sebagai daerah yang berkembang pesat dengan pertumbuhan ekonomi dan industri yang signifikan.</p>
                    
                    <p>Dengan luas wilayah 18.2 km², Kelurahan Bukit Datuk dihuni oleh 11.483 jiwa yang tersebar dalam 26 RT. Kelurahan ini terus berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat melalui berbagai program pembangunan dan pemberdayaan masyarakat.</p>
                    
                    <p>Visi kami adalah <strong>"Terwujudnya Pemerintah yang terbaik melalui pelayanan prima terhadap masyarakat".</strong></p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Profile Information -->
            <div class="profile-card">
                <div class="card-header">
                    <div class="card-icon">📍</div>
                    <div class="card-title">Informasi Kelurahan</div>
                </div>
                <div class="info-item">
                    <span class="info-label">Nama Kelurahan</span>
                    <span class="info-value">Bukit Datuk</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Kecamatan</span>
                    <span class="info-value">Dumai Selatan</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Kota</span>
                    <span class="info-value">Dumai</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Provinsi</span>
                    <span class="info-value">Riau</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Kode Pos</span>
                    <span class="info-value">28825</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Luas Wilayah</span>
                    <span class="info-value">18.2 km²</span>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="profile-card">
                <div class="card-header">
                    <div class="card-icon">📞</div>
                    <div class="card-title">Kontak & Jam Kerja</div>
                </div>
                <div class="info-item">
                    <span class="info-label">Lurah</span>
                    <span class="info-value">Aga Muhaimin, A.Md</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Telepon</span>
                    <span class="info-value">(0765) 123456</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Email</span>
                    <span class="info-value">bukitdatuk@dumai.go.id</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Alamat</span>
                    <span class="info-value">Jl. Sudirman No. 123, Bukit Datuk</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Jam Kerja</span>
                    <span class="info-value">Senin-Jumat: 08:00-16:00</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Hari Sabtu</span>
                    <span class="info-value">08:00-12:00</span>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="services-section">
            <div class="services-header">
                <h2 class="services-title">Struktur Organisasi Kelurahan Bukit Datuk</h2>
            </div>
            <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                <figure>
                  <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="person-contents">
                  <h3>Aga Muhaimin, A.Md</h3>
                  <span class="position">Lurah</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                <figure>
                  <img src="assets/img/team/team-2.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="person-contents">
                  <h3>Ismail Rasyada, SKM</h3>
                  <span class="position">Sekretaris</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                <figure>
                  <img src="assets/img/team/team-3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="person-contents">
                  <h3>Delisma Lubis, SKM</h3>
                  <span class="position">KASI Pemerintahan</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                <figure>
                  <img src="assets/img/team/team-4.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="person-contents">
                  <h3>Hesti Diah Sufni, ST</h3>
                  <span class="position">Kasi PM-KESSOS</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
              <div class="person">
                <figure>
                  <img src="assets/img/team/team-4.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="person-contents">
                  <h3>Muhammad Suhaimi, S.Ag</h3>
                  <span class="position">Kasi Trantib</span>
                </div>
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>