@extends('pages-layout.app')
@section('home', 'active')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Badan Pengelolaan Pajak Daerah Kota Palembang</h1>
          <h2 align="justify">Badan Pengelolaan Pajak Daerah Kota Palembang adalah institusi pemerintah yang menerima dan mengelolah pajak demi peningkatan pendapatan daerah Kota Palembang.</h2>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('style/img/wa.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sejarah Singkat</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p align="justify">
              sebelum Tahun 1975, Bidang pajak dan retribusi pada daerah tingkat I dan tingkat II merupakan urusan bagian Biro Keuangan pemda masing-masing. Hal tersebut berlaku di kota Palembang dengan mengacu pada perda tingkat II Palembang Nomor 9 tahun 1975 tanggal 11 november 1975 yang merupakan landas pembentukkan dinas pendapatan daerah yang bertempat di kota Palembang serta memiliki tugas mengelola segala hal dibidang pendapatan, penetapan, penagihan pajak dan retribusi daerah serta pendapatan daerah lainya yang menjadi hak dan kewenangan Pemerintah Kota Palembang sesuai dengan peraturan yang berlaku.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p align="justify">
              Berdasarkan Perda Nomor 3 tahun 1980 dibentuklah Dinas Pendapatan Daerah (Dipenda) Kota Palembang yang struktur dan tata kerja organisasinya berlaku sama diseluruh indonesia. yang kemudian disempurnakan kembali dengan perda Nomor 3 tahun 1990 kemudian perda Nomor 67 tahun 2001 tentang Tugas dan Fungsi Dinas Pendapatan Daerah Kota Palembang. hal ini dilakukan seiring dengan adanya beberapa perubahan seperti pertambahan penduduk serta usaha penyempurnaan dan penyelesaian struktur organisasi Dipenda Kota Palembang. Namun setelah keluarnya peraturan pemerintah Nomor 41 tahun 2007 tentang Organisasi Perangkat Daerah, maka struktur organisasi Dinas Pendapatan Daerah Kota Palembang tahun 2008 mengalami perubahan yang sesuai dengan perda Nomor 9 tahun 2008 tentang Struktur Organisasi dan Tata Kerja Dinas Daerah Kota Palembang.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>VISI, MISI, DAN TUJUAN <strong>Badan Pengelolaan Pajak Daerah Kota Palembang</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-1"><span>01</span> VISI <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                    <p align="justify">
                      Terwujudnya pengelolaan pendapatan daerah yang profesional untuk mendukung pelaksanaan pembangunan daerah yang mandiri dan sejahtera
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> MISI <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p align="justify">
                      1. merumuskan dan menyusun kebijakkan dibidang pengelolaan pendapatan daerah
                    </p>
                    <p align="justify">
                      2. Meningkatkan Kualitas sumber daya aparatur bidang pendapatan daerah sesuai dengan prinsip-prinsip penyelengaraan pemerintsh ysng bsik (Good Governance)
                    </p>
                    <p align="justify">
                      3. Menjalin jejaring kerja (Networking) dan koordinasi secara sinergis di bidang pendapatan daerah
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> TUJUAN <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p align="justify">
                      Tujuan pertama ditetapkan untuk peningkatan penerimaan pajak daerah sebagai sumber Pendapatan Asli Daerah (PAD).
                    </p>
                    <p align="justify"> 
                      Tujuan kedua ditetapkan untuk mewujudkan pelayanan publik yang berkualitas. Pelayanan pajak daerah akan terus ditingkatkan, dilengkapi dengan fasilitas yang representatif, baik dibidang sarana maupun prasarana pelayanan dan pembayaran pajak. Masyarakat akan diberikan kemudahan dan kenyamanan dalam pengurusan dan pembayaran pajak daerah.
                      
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/WA5.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->
@endsection