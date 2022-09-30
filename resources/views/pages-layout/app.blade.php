<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BPPD | Kota Palembang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <title>@yield('judul') - GenBI Sumsel</title>

  <!-- Favicons -->
  <link href="{{ asset('style/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('style/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('style/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('style/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">BPPD</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link @yield('home')" href="{{ route('home') }}">Home</a></li>
          <li class="dropdown"><a href="#">Profil</a>
            <ul>
              <li><a class="nav-link @yield('struktur')" href="{{ route('struktur') }}">Struktur Organisasi</a></li>
              <li><a class="nav-link @yield('pegawai')" href="{{ url('pegawai') }}">Data Pegawai</a></li>
            </ul>
          </li>
          <li><a class="nav-link @yield('datacuti')" href="{{ route('datacuti') }}">Pengajuan Cuti</a></li>
          <li><a class="nav-link @yield('galeri')" href="{{ route('galeri') }}">Galeri</a></li>
          <li><a class="nav-link @yield('kontak')" href="{{ route('kontak') }}">Kontak</a></li>
          <li><a class="nav-link @yield('login')" href="{{ route('login') }}">Login</a></li>

          <!-- {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}} -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Alamat</h3>
            <p>
              Jalan Merdeka No. 21 Kota Palembang, Sumatera Selatan 30136, Indonesia<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>JAM LAYANAN KANTOR</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> Senin 08:00 - 15:00</li>
              <li><i class="bx bx-chevron-right"></i> Selasa 08:00 - 15:00</li>
              <li><i class="bx bx-chevron-right"></i> Rabu 08:00 - 15:00</li>
              <li><i class="bx bx-chevron-right"></i> Kamis 08:00 - 15:00</li>
              <li><i class="bx bx-chevron-right"></i> Jumat 08:00 - 15:30</li>
              <li><i class="bx bx-chevron-right"></i> Sabtu Minggu Libur</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>INFORMASI KONTAK</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> Telpon: (0711) 352-282</li>
              <li><i class="bx bx-chevron-right"></i> FAX: (0711) 317-393</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial media kami</h4>
            <div class="social-links mt-3">
              <a href="https://www.instagram.com/bppdkotapalembang/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="mailto:info@bppd.palembang.go.id" target="_blank" class="instagram"><i class="bx bxs-envelope-open"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BPPD</span></strong>. All Rights Reserved
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('style/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('style/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('style/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('style/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('style/vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('style/js/main.js') }}"></script>

</body>

</html>