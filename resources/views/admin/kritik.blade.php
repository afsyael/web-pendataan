@extends('admin.index')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kritik & Saran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Kritik & Saran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kritik & Saran</h3>
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
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Pesan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    @foreach($kritik as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data -> name }}</td>
                    <td>{{ $data -> email }}</td>
                    <td>{{ $data -> subject }}</td>
                    <td>{{ $data -> pesan }}</td>
                    <td>
                      <a href="{{url('/deletekritik/'.$data->id)}}" class="btn btn-sm btn-danger" title="Hapus Data {{$data->name}} " onclick="return confirm('Apakah anda yakin akan menghapus data {{$data->name}} ?');">
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
                    <th>Subject</th>
                    <th>Pesan</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
@endsection