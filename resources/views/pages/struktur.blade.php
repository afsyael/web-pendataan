@extends('pages-layout.app')
@section('struktur', 'active')
@section('content')
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Struktur Organisasi</li>
          </ol>
          <h2>Struktur Organisasi</h2>
  
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Struktur Organisasi</h2>
          <p>Penjelasan mengenai detail informasi struktur organisasi BPPD Kota Palembang sedang dalam perbaikan.</p>
            <div class="portfolio-img"><img src="{{ asset('style/img/struktur.png') }}" class="img-fluid" alt=""></div>
          <!-- <img src="{{ asset('style/img/struktur.png') }}" alt="" data-aos="fade-up" data-aos-delay="200"> -->
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@endsection