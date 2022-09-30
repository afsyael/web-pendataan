<!DOCTYPE html>
<html>
<head>

	<title>Cetak Pengajuan Cuti</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 7pt;
		}
		.tanggal {
			padding-left: 70%;
		}
		p {
			font-size: 10pt;
		}
	</style>
</head>
<body>
	<section class="content">
		<div class="row">
			<div>
				<center>
					<h4>Data Pengajuan Cuti</h4>
					<hr align="center" size="4">
				</center>
			</div>
		</div>
		<div class="row">
			<div class="tanggal">
				<div class="col-lg-5 mt-0 mb-3">
					<p>Tanggal Cetak : {{ date("Y-m-d") }}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 mt-0 mb-2">
				<h5>Data Karyawan :</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<table class='table table-striped'>
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Alasan</th>
							<th>Divisi</th>
							<th>Alamat</th>
							<th>NIP</th>
							<th>Email</th>
							<th>Mulai</th>
							<th>Selesai</th>
						</tr>
					</thead>
					<tbody>
					<?php $no=1; ?>
					@foreach($cuti as $data)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->nama}}</td>
							<td>{{$data->alasan_cuti}}</td>
							<td>{{$data->divisi}}</td>
							<td>{{$data->alamat}}</td>
							<td>{{$data->nip}}</td>
							<td>{{$data->email}}</td>
							<td>{{$data->mulai}}</td>
							<td>{{$data->selesai}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
</body>
</html>