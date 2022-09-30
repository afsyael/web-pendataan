@extends('admin.index')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengajuan Cuti</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Pengajuan Cuti</li>
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
                <h3 class="card-title">Data Pengajuan Cuti</h3>
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
                <table id="example2" class="table table-responsive table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alasan Cuti</th>
                    <th>Divisi</th>
                    <th>Alamat</th>
                    <th>NIP</th>
                    <th>Email</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    @foreach($cuti as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data -> nama }}</td>
                    <td>{{ $data -> alasan_cuti }}</td>
                    <td>{{ $data -> divisi }}</td>
                    <td>{{ $data -> alamat }}</td>
                    <td>{{ $data -> nip }}</td>
                    <td>{{ $data -> email }}</td>
                    <td>{{ $data -> mulai }}</td>
                    <td>{{ $data -> selesai }}</td>
                    <td>{{ $data -> status }}</td>
                    <td>
                      <a href="{{url('/editcuti/'.$data->id)}}" class="btn btn-sm btn-info">
                      <i class="fas fa-edit"></i></a>

                      <a href="{{url('/deletecuti/'.$data->id)}}" class="btn btn-sm btn-danger" title="Hapus Data {{$data->name}} " onclick="return comfirm('Apakah anda yakin akan menghapus data {{$data->name}} ?');">
                      <i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  @endforeach
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alasan Cuti</th>
                    <th>Divisi</th>
                    <th>Alamat</th>
                    <th>NIP</th>
                    <th>Email</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <div class="card-footer">
                  <a href="{{url('/cuti/report')}}" class="btn btn-outline-primary">Report</a>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      <!-- /.container-fluid -->
    </section>
  </div>
@endsection