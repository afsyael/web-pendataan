@extends('pages-layout.app')
@section('datacuti', 'active')
@section('content')
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Data Pengajuan Cuti</li>
          </ol>
          <h2>Data Pengajuan Cuti</h2>
  
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
          <h2>Data Pengajuan Cuti</h2>
          <p></p>
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

        <div class="col-lg-12">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Alasan Cuti</th>
                <th>Divisi</th>
                <th>Alamat</th>
                <th>NIP</th>
                <th>Email</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($datacuti as $data)
              <tr>
                <td>{{$data->nama}}</td>
                <td>{{$data->alasan_cuti}}</td>
                <td>{{$data->divisi}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->nip}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->mulai}}</td>
                <td>{{$data->selesai}}</td>
                <td>
                  <a href="{{url('/print/'.$data->id)}}" target="_blank"><div class="text-center"><button class="btn btn-primary" type="submit">Cetak</button></div></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>  
       <!-- <div class="col-lg-12 align-items-stretch">
            <form action="{{url('/print')}}" method="get">
              @csrf
              <div class="row">
                <div class="form-group col-md-1">
                  <div class="text-center"><button class="btn btn-primary" type="submit">Cetak</button></div>
                </div>
              </div>
              <br>
            </form>
          </div>
      </div> -->

    </div>
  </section><!-- End Contact Section -->
@endsection