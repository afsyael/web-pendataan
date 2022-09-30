@extends('admin.index')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manajemen Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Admin</li>
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
                <h3 class="card-title">Data Admin</h3>
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
                    <th>No. Telp</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    @foreach($admin as $data)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data -> name }}</td>
                    <td>{{ $data -> email }}</td>
                    <td>{{ $data -> phone }}</td>
                    <td>
                      <a href="{{url('/editadmin/'.$data->id)}}" class="btn btn-sm btn-info">
                      <i class="fas fa-edit"></i></a>

                      <a href="{{url('/deleteadmin/'.$data->id)}}" class="btn btn-sm btn-danger" title="Hapus Data {{$data->name}} " onclick="return confirm('Apakah anda yakin akan menghapus data {{$data->name}} ?');">
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
                    <th>No. Telp</th>
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
                <h3 class="card-title">Input Data Admin</h3>
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
              <form method="post" action="{{url('/insertadmin')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone1">No. Telp</label>
                    <input type="number" name="telp" class="form-control" placeholder="Phone Number" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="">
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
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>    
  </div>
@endsection