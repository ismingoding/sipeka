<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SIPEKA-Sistem Informasi Pelayanan Masyarakat Kelurahan Bukit Datuk</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

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
      <form action="forms/newsletter.php" class="form-subscribe php-email-form">
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
          <li><a href="/" class="active">Beranda</a></li>
          <li><a href="{{ route('profilkelurahan') }}">Profil Kelurahan</a></li>
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
          <li><a href="blog.html">Pemberdayaan</a></li>
          <li><a href="blog.html">Gallery</a></li>
          <li><a href="{{ route('profil') }}">Profile</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
    
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/selamatdatang.jpg" alt="">
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/administrasi.jpg" alt="">
          <div class="carousel-container">
            <h2>Pelayanan Administratif</h2>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/pengaduan.jpg" alt="">
          <div class="carousel-container">
            <h2>Pengaduan & Saran</h2>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/pengumuman.jpg" alt="">
          <div class="carousel-container">
            <h2>Berita & Pengumuman</h2>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/tracking.jpg" alt="">
          <div class="carousel-container">
            <h2>Tracking Permohonan</h2>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>SISTEM INFORMASI PELAYANAN MASYARAKAT KELURAHAN BUKIT DATUK</h2>
        <p>Selamat Datang!</p>
      </div><!-- End Section Title -->
      <center><h2>Layanan Kelurahan</h2></center>
      <div class="content">
        <div class="container">
          <div class="row g-0">
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">01</span>
                <div class="service-item-icon">
                <i class="fas fa-envelope-open-text fa-3x text-primary mb-3" style="font-size:80px" fill="currentColor" opacity="1" data-original="currentColor" class=""></i>
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Pengajuan Surat</h3>
                  <p>
                     Ajukan berbagai surat administrasi seperti SKTM, Domisili, Keterangan Usaha, dan lainnya secara online.
                  </p>
                  <a href="#" class="btn btn-primary btn-sm mt-2">Ajukan Sekarang</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">02</span>
                <div class="service-item-icon">
                <i class="fas fa-comments fa-3x text-warning mb-3" style="font-size:80px" fill="currentColor" opacity="1" data-original="currentColor" class=""></i>
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Pengaduan & Saran</h3>
                  <p>
                    Sampaikan pengaduan atau saran Anda untuk peningkatan kualitas pelayanan kami kepada masyarakat.
                  </p>
                  <a href="#" class="btn btn-warning btn-sm mt-2">Kirim Pengaduan</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">03</span>
                <div class="service-item-icon">
                <i class="fas fa-bullhorn fa-3x text-info mb-3" style="font-size:80px" fill="currentColor" opacity="1" data-original="currentColor" class=""></i>
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Berita & Pengumuman</h3>
                  <p>
                    Dapatkan informasi terbaru seputar kegiatan, pengumuman resmi, dan agenda penting.
                  </p>
                  <a href="#" class="btn btn-info btn-sm mt-2">Lihat Berita</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="service-item">
                <span class="number">04</span>
                <div class="service-item-icon">
                <i class="fas fa-search-location fa-3x text-success mb-3" style="font-size:80px" fill="currentColor" opacity="1" data-original="currentColor" class=""></i>
                </div>
                <div class="service-item-content">
                  <h3 class="service-heading">Tracking Permohonan</h3>
                  <p>
                    Lacak status permohonan surat Anda dengan mudah dan cepat tanpa harus datang ke kantor kelurahan.
                  </p>
                  <a href="#" class="btn btn-success btn-sm mt-2">Lacak Permohonan</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="assets/img/kantor.jpg" alt="Kantor Kelurahan Bukit Datuk" class="img-fluid img-overlap" data-aos="zoom-out">
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <h3 class="content-subtitle text-white opacity-50">Selamat Datang!</h3>
              <h2 class="content-title mb-4">
                Kelurahan <strong>Bukit Datuk</strong> Kota Dumai
              </h2>
              <p class="opacity-50">
                Selamat datang di Website Pelayanan Masyarakat Kelurahan Bukit Datuk, Kota Dumai. Kami hadir untuk memberikan kemudahan 
                akses pelayanan publik bagi seluruh masyarakat Kelurahan Bukit Datuk. Melalui platform ini, Anda dapat melakukan berbagai 
                permohonan administrasi, melacak status layanan, mengirimkan pengaduan, serta mendapatkan informasi terkini dari kantor 
                kelurahan secara online dan transparan.
              </p>
              <h2 class="content-title mb-4">
                Profil Singkat Kelurahan Bukit Datuk
              </h2>
              <p class="opacity-50">
              Kelurahan Bukit Datuk merupakan salah satu kelurahan di Kecamatan Dumai Selatan, Kota Dumai, Provinsi Riau. Kelurahan ini 
              memiliki visi "Mewujudkan Pelayanan Prima dan Transparan untuk Masyarakat yang Sejahtera dan Partisipatif."
              Dengan jumlah penduduk lebih dari 8.000 jiwa dan beragam latar belakang, Kelurahan Bukit Datuk terus berupaya meningkatkan 
              pelayanan publik berbasis digital, efisien, dan ramah masyarakat.
              </p>

              <!-- <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-cloud-rain me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Plants needs rain</h4>
                    <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start mb-4">
                  <i class="bi bi-heart me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Love organic foods</h4>
                    <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-start">
                  <i class="bi bi-shop me-4 display-6"></i>
                  <div>
                    <h4 class="m-0 h5 text-white">Sell vegies</h4>
                    <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p>
                  </div> 
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
            <img src="assets/img/peta.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h2 class="content-title mb-4">Peta Wilayah Kelurahan Bukit Datuk</h2>
            <p class="mb-4">
            Kelurahan Bukit Datuk mempunyai luas wilayah ± 18,2 Km2. Adapun Kelurahan Bukit Datuk 
            mempunyai batas wilayah sebagai berikut:
            </p>
            <p class="mb-4">
              <ul>
                <li>Sebelah Utara berbatasan dengan Kelurahan Ratu Sima</li>
                <li>Sebelah Selatan berbatasan dengan Kelurahan Bumi Ayu</li>
                <li>Sebelah Timur berbatasan dengan Kelurahan Dumai Kota</li>
                <li>Sebelah Barat berbatasan dengan Kelurahan Ratu Sima</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita & Pengumuman</h2>
        <p>Kelurahan Bukit Datuk</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/acara1.jpeg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Peringatan Hari Besar Islam & Nasional</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Budi Santoso</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Event Akbar</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/acara2.jpeg" class="img-fluid" alt="">
                <span class="post-date">Agustus 5</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Rapat Reorganisasi dan Pembentukan Panitia HUT RI Ke 78</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Susi Susila</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Event Akbar</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/acara3.jpg" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Penerimaan Hadiah Lomba Evaluasi Program Pokok PKK</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Maymunah</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Event Akbar</span>
                  </div>
                </div>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

        </div>

      </div>

    </section><!-- /Recent Posts Section -->

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>