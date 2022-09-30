@extends('pages-layout.app')
@section('galeri', 'active')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Galeri</li>
          </ol>
          <h2>Galeri</h2>
  
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri kegiatan</h2>
          <p>Galeri kegiatan</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Galeri</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('style/img/foto003.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Senam Rutin</h4>
              <a href="{{ asset('style/img/foto03.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Senam rutin pegawai BPPD Kota Palembang"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ asset('style/img/foto004.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Meninjau Pembangunan Restorasi</h4>
              <a href="{{ asset('style/img/foto04.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Meninjau pembangunan restorasi sekanak lambidaro segmen lebak cindo"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('style/img/foto011.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Audiensi</h4>
              <a href="{{ asset('style/img/foto01.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Audiensi bersama pengurus daerah ikatan indonesia (INI)"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{ asset('style/img/foto002.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Kunjungan Staf Khusus Walikota</h4>
              <a href="{{ asset('style/img/foto02.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Kunjungan staf khusus walikota, membahas tentang perubahan target pajak daerah tahun 2021"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ asset('style/img/foto055.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Pengantaran Surat Pembayaran PBB</h4>
              <a href="{{ asset('style/img/foto05.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Pengantaran himbauan percepatan pembayaran PBB kepada wajib pajak"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('style/img/foto006.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Penyampaian Surat Pembayaran PBB</h4>
              <a href="{{ asset('style/img/foto06.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Penyampaian surat himbauan percepatan pembayaran PBB postensial"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{ asset('style/img/foto007.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Menertibkan Pajak Reklame</h4>
              <a href="{{ asset('style/img/foto07.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Terjun kelapangan menertibkan pajak reklame yang belum memperpanjang masa pajak di wilayah kec. ilir barat I dan ilir barat II"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('style/img/foto008.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Walikota Mengikuti Rapat Tindak Lanjut PPKM</h4>
              <a href="{{ asset('style/img/foto08.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Walikota Palembang H. Harnojoyo mengikuti Rapat Koordinasi Tindak Lanjut Arahan Presiden Republik Indonesia tentang PPKM bersama Kapolda Sumatera Selatan "><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('style/img/foto010.png') }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Senam Rutin</h4>
              <a href="{{ asset('style/img/foto009.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Senam Pagi Rutin Pegawai BPPD Kota Palembang dengan tetap memperhatikan Protokol Kesehatan."><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@endsection