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
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Karyawan yang mengajukan cuti</h3>
              </div>
              <div class="card-body">
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
              </div>
              <!-- form start -->
              <form method="post" action="{{url('/updatecuti')}}">
               @csrf
                @foreach($cuti as $data)
                <input type="hidden" class="form-control" name="idcuti" value="{{$data->id}}">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{$data->nama}}" readonly>
                  </div>
                   <div class="form-group">
                        <label>Alasan Cuti</label>
                        <input type="text" name="alasan" class="form-control" placeholder="Alasan Cuti" value="{{$data->alasan_cuti}}" readonly>
                  </div>
                  <div class="form-group">
                        <label>Divisi</label>
                          <input type="text" name="divisi" class="form-control" placeholder="divisi" value="{{$data->divisi}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{$data->alamat}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIP</label>
                    <input type="number" name="nip" class="form-control" placeholder="Masukkan NIP" value="{{$data->nip}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="{{$data->email}}" readonly>
                  </div>
                  <div class="form-group">
                  <label>Mulai:</label>
                    <input type="text" name="mulai" class="form-control" placeholder="mulai" value="{{$data->mulai}}" readonly>
                </div>
                
                  <div class="form-group">
                  <label>Selesai:</label>
                    <input type="text" name="selesai" class="form-control" placeholder="selesai" value="{{$data->selesai}}" readonly>
                   </div>
            
                <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                        <option value="On Process" @if($data->status == "On Process") selected @endif>On Process</option>
                          <option value="Approved" @if($data->status == "Approved") selected @endif>Approved</option>
                          <option value="Decline" @if($data->status == "Decline") selected @endif>Decline</option>
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