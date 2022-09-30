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
					<h4>Form Pengajuan Cuti</h4>
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
		@foreach($cetakdata as $p)
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
						<tr>
							<td>{{$p->nama}}</td>
							<td>{{$p->alasan_cuti}}</td>
							<td>{{$p->divisi}}</td>
							<td>{{$p->alamat}}</td>
							<td>{{$p->nip}}</td>
							<td>{{$p->email}}</td>
							<td>{{$p->mulai}}</td>
							<td>{{$p->selesai}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="tanggal">
				<div class="col-lg-5 mt-2 mb-3">
					<center>
					<p>Menyetujui,</p>
					<p>Pimpinan</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>(___________________)</p>
					</center>
				</div>
			</div>
		</div>
	</section>
</body>
</html>