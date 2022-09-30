@extends('pages-layout.app')
@section('pegawai', 'active')
@section('content')
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Data Pegawai</li>
          </ol>
          <h2>Data Pegawai</h2>
  
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data Pegawai</h2>
          <p>Informasi Data Pegawai</p>
          <br>
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <th>No.</th>
              <th>Nama Pegawai</th>
              <th>Divisi</th>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach($pegawai as $data)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data -> name }}</td>
                    <td>{{ $data -> divisi }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </section><!-- End Portfolio Section -->
@endsection