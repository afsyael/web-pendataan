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
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Admin</h3>
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
              <form method="post" action="{{url('/updateadmin')}}">
                @csrf
                @foreach($admin as $data)
                <input type="hidden" class="form-control" name="idadmin" value="{{$data->id}}">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{$data->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{$data->email}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone1">No. Telp</label>
                    <input type="number" name="telp" class="form-control" placeholder="Phone Number" value="{{$data->telp}}">
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
                  @endforeach
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