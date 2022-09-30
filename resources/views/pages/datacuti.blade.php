@extends('pages-layout.app')
@section('datacuti', 'active')
@section('content')
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Pengajuan Cuti</li>
          </ol>
          <h2>Pengajuan Cuti</h2>
  
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          @if(session('status'))
            <div class="alert alert-success alert-dismissible" role="alert">
              <div class="alert-message">
                <span><strong>{{ session('status') }}</strong></span>
              </div>
            </div>
          @endif
        <div class="section-title">
          <h2>Form Pengajuan Cuti</h2>
          <p>Silahkan isi form dibawah ini untuk mengajukan cuti atau klik pencarian jika sudah mengirim data</p>
        </div>
        <div class="row">
        @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible" role="alert">
            <div class="alert-message">
            @foreach ($errors->all() as $error)
               <span><strong>{{ $error }} <br/></strong></span>
            @endforeach
          </div>
        </div>
        @endif

          <div class="col-lg-12 mt-5 mt-lg-0 align-items-stretch">
            <form action="{{url('/insertcuti')}}" method="post">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Alasan Cuti</label>
                  <select class="form-control" name="alasan" required>
                    <option value="Sakit">Sakit</option>
                    <option value="Melahirkan">Melahirkan</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Divisi</label>
                  <select class="form-control" name="divisi" required="">
                    <option value="Kepala Badan">Kepala Badan</option>
                    <option value="Sekretariat">Sekretariat</option>
                    <option value="SUBAG Umum Dan Kepegawaian">SUBAG Umum Dan Kepegawaian</option>
                    <option value="SUBAG Perencanaan">SUBAG Perencanaan</option>
                    <option value="SUBAG Keuangan">SUBAG Keuangan</option>
                    <option value="Bidang Pajak Daerah">Bidang Pajak Daerah</option>
                    <option value="Bidang Pengelolaan Piutang">Bidang Pengelolaan Piutang</option>
                    <option value="Bidang Pengkajian Dan Pengembangan">Bidang Pengkajian Dan Pengembangan</option>
                    <option value="Bidang PBB Dan BPHTB">Bidang PBB dan BPHTB</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="name">Alamat</label>
                <textarea class="form-control" name="alamat" rows="4" required></textarea>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">NIP</label>
                  <input type="number" name="nip" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Mulai</label>
                  <input type="date" name="mulai" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Selesai</label>
                  <input type="date" name="selesai" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
            </form>
          </div>

          <p>&nbsp;</p>
          <p>&nbsp;</p>

            <div class="col-lg-12 align-items-stretch">
            <div class="col-lg-5">
              <h3>Pencarian Data</h3>
            </div>
            <form action="{{url('/cari')}}" method="get">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="number" name="cari" class="form-control" placeholder="Enter Your NIP" value="{{ old('cari') }}">
                </div>
                <div class="form-group col-md-1">
                  <div class="text-center"><button class="btn btn-primary" type="submit">Cari</button></div>
                </div>
              </div>
              <br>
            </form>
          </div>
      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection