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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">



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
          <li><a href="/">Beranda</a></li>
          <li><a href="about.html">Profil Kelurahan</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Layanan Administratif</a></li>
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

  <div class="container">
    <div class="row">
      
      <!-- Sidebar -->
      <aside class="col-md-3 mb-4">
        <div class="card shadow-sm rounded-3">
          <div class="card-header bg-success text-white">
            <h5 class="mb-0">Navigasi</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="/"><i class="fa fa-home me-2"></i>Beranda</a></li>
            <li class="list-group-item"><a href="{{ route('profil') }}"><i class="fa fa-user me-2"></i>Profil</a></li>
            <li class="list-group-item"><a href="{{ route('riwayatpermohonan') }}"><i class="fa fa-folder-open me-2"></i>Riwayat Permohonan</a></li>
            <li class="list-group-item"><a href="{{ route('riwayatpengaduan') }}" class="active-link"><i class="fa fa-users me-2"></i>Riwayat Pengaduan & Saran</a></li>
            <li class="list-group-item">
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-link" style="padding: 0; border: none; background: none; color: inherit; text-decoration: none;">
                        <i class="fas fa-sign-out-alt me-2"></i>Sign Out
                    </button>
                </form>
            </li>
          </ul>
        </div>
      </aside>

      <!-- Konten Utama -->
      <div class="col-md-9">
        <div class="card shadow-sm p-4 rounded-3">
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Riwayat Pengaduan</h1>
          </div>

          <!-- Row -->
          <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Riwayat Pengaduan</h6>
            </div>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h6><i class="fas fa-check"></i><b> Success!</b></h6>
                {{ session('success') }}
            </div>
            @endif

            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                    <tr>
                    <th>No</th>
                    <th>Judul Pengaduan</th>
                    <th>Kategori</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($riwayat as $row)
                    <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->judul_pengaduan }}</td>
                    <td>{{ ucfirst(str_replace('_', ' ', $row->kategori)) }}</td>
                    <td>{{ \Carbon\Carbon::parse($row->tgl_pengaduan)->format('d-m-Y') }}</td>
                    <td>
                        @php
                        $badgeClass = [
                            'diajukan' => 'badge-warning',
                            'ditinjau' => 'badge-primary',
                            'ditanggapi' => 'badge-info',
                            'selesai' => 'badge-success'
                        ][$row->status] ?? 'badge-secondary';
                        @endphp
                        <span class="badge {{ $badgeClass }}">{{ ucfirst($row->status) }}</span>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>


    </div>
  </div>


  </main>

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>