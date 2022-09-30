@extends('admin.index')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Karyawan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Karyawan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Karyawan</h3>
              </div>
                @if(count($errors) > 0)
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <div class="alert-icon contrast-alert">
                </div>
                <div class="alert-message">
                  @foreach ($errors->all() as $error)
                    <span><strong>{{ $error }} <br/></strong></span>
                  @endforeach
                </div>
              </div>
              @endif   

              <!-- form start -->
              <form method="post" action="{{url('/updatekaryawan')}}">
                @csrf
                @foreach($karyawan as $data)
                <input type="hidden" class="form-control" name="idkaryawan" value="{{$data->id}}">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="name" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{$data->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukan Email" value="{{$data->email}}">
                  </div>
                  <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jk">
                          <option value="Laki-laki" @if($data->jk == "Laki-laki") selected @endif>Laki-Laki</option>
                          <option value="Perempuan" @if($data->jk == "Perempuan") selected @endif>Perempuan</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Divisi</label>
                        <select class="form-control" name="divisi">
                          <option value="Kepala Bagian"
                          @if($data->divisi == "Kapala Bagian") selected @endif>Kepala Bagian</option>
                          <option value="Sekretariat"
                          @if($data->divisi == "Sekretariat") selected @endif>Sekretariat</option>
                          <option value="SUBAG Umum dan kepegawaian"
                          @if($data->divisi == "SUBAG Umum dan kepegawaian") selected @endif>SUBAG Umum dan kepegawaian</option>
                          <option value="SUBAG Perencanaan"
                          @if($data->divisi == "SUBAG Perencanaan") selected @endif>SUBAG Perencanaan</option>
                          <option value="SUBAG Keuangan"
                          @if($data->divisi == "SUBAG Keuangan") selected @endif>SUBAG Keuangan</option>
                          <option value="Bidang Pajak Daerah"
                          @if($data->divisi == "Bidang Pajak Daerah") selected @endif>Bidang Pajak Daerah</option>
                          <option value="Bidang Pengelolaan Piutang"
                          @if($data->divisi == "Bidang Pengelolaan Piutang") selected @endif>Bidang Pengelolaan Piutang</option>
                          <option value="Bidang Pengkajian Dan pengembangan"
                          @if($data->divisi == "Bidang Pengkajian Dan pengembangan") selected @endif>Bidang Pengkajian Dan pengembangan</option>
                          <option value="Bidang PBB dan BPHTB"                         
                          @if($data->divisi == "Bidang PBB dan BPHTB") selected @endif>Bidang PBB dan BPHTB</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telepon</label>
                    <input type="number" name="telp" class="form-control" placeholder="Phone Number" value="{{$data->telepon}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIP</label>
                    <input type="number" name="nip" class="form-control" placeholder="Nip" value="{{$data->nip}}">
                  </div>
                  <div class="form-group">
                        <label>Negara Domisili</label>
                        <select class="form-control" name="negara">
                          <option value="Indonesia"
                          @if($data->negara_domisili == "Indonesia") selected @endif>Indonesia</option>
                          <option value="Luar Negeri"
                          @if($data->negara_domisili == "Luar Negeri") selected @endif>Luar Negeri</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea name="alamat"class="form-control" placeholder="alamat">{{$data->alamat}}</textarea>
                  </div>
                  <div class="form-group">
                        <label>Status Pernikahan</label>
                        <select class="form-control" name="status">
                          <option value="Menikah"
                           @if($data->status_pernikahan == "Menikah") selected @endif>Menikah</option>
                          <option value="Belum Menikah"
                           @if($data->status_pernikahan == "Belum Menikah") selected @endif>Belum Menikah</option>
                        </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                 @endforeach
              </form>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>    
  </div>
@endsection