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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Input Data Karyawan</h3>
                </div>
                @if(session('status'))
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <div class="alert-icon contrast-alert">
                  </div>
                  <div class="alert-message">
                    <span><strong>{{ session('status') }}</strong></span>
                  </div>
              </div>
              @endif
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Divisi</th>
                    <th>Telepon</th>
                    <th>NIP</th>
                    <th>Negara Domisili</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    @foreach($karyawan as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data -> name }}</td>
                    <td>{{ $data -> email }}</td>
                    <td>{{ $data -> jk }}</td>
                    <td>{{ $data -> divisi }}</td>
                    <td>{{ $data -> telepon }}</td>
                    <td>{{ $data -> nip }}</td>
                    <td>{{ $data -> negara_domisili }}</td>
                    <td>{{ $data -> alamat }}</td>
                    <td>{{ $data -> status_pernikahan }}</td>
                    <td>
                      <a href="{{url('/editkaryawan/'.$data->id)}}" class="btn btn-sm btn-info">
                      <i class="fas fa-edit"></i></a>

                      <a href="{{url('/deletekaryawan/'.$data->id)}}" class="btn btn-sm btn-danger" title="Hapus Data {{$data->name}} " onclick="return confirm('Apakah anda yakin akan menghapus data {{$data->name}} ?');">
                      <i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Devisi</th>
                    <th>Telepon</th>
                    <th>NIP</th>
                    <th>Negara Domisili</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Data Karyawan</h3>
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
              <form method="post" action="{{url('/insertkaryawan')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="name" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukan Email" required="">
                  </div>
                  <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jk">
                          <option value="Laki-laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Divisi</label>
                        <select class="form-control" name="divisi">
                          <option>Kepala Badan</option>
                          <option>Sekretariat</option>
                          <option>SUBAG Umum dan kepegawaian</option>
                          <option>SUBAG Perencanaan</option>
                          <option>SUBAG Keuangan</option>
                          <option>Bidang Pajak Daerah</option>
                          <option>Bidang Pengelolaan Piutang</option>
                          <option>Bidang Pengkajian Dan pengembangan</option>
                          <option>Bidang PBB dan BPHTB</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telepon</label>
                    <input type="number" name="telp" class="form-control" placeholder="Nomor Telpon" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIP</label>
                    <input type="number" name="nip" class="form-control" placeholder="Nip" required="">
                  </div>
                  <div class="form-group">
                        <label>Negara Domisili</label>
                        <select class="form-control" name="negara">
                          <option>Indonesia</option>
                          <option>Luar Negeri</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <textarea name="alamat"class="form-control" placeholder="alamat" required=""></textarea>
                  </div>
                  <div class="form-group">
                        <label>Status Pernikahan</label>
                        <select class="form-control" name="status">
                          <option>Menikah</option>
                          <option>Belum Menikah</option>
                        </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

                  </div>
                </form> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>    
  </div>
@endsection