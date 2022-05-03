
@extends('pimpinan.layouts.default')

@section('judul','Laporan Angota')

@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">LAPORAN ANGGOTA</h3>
					<div class="d-inline-block align-items-center">
					
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			<div class="col-12">
			
			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Anggota</h3>
				  <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
								<th>Kabupaten/Kota</th>
								<th>Distrik</th>
								<th>Kelurahan</th>
								<th>Agama</th>
								<th>Jenis Kelamin</th>
								<th>Pendidikan</th>
							</tr>
						</thead>
						<tbody>
							@foreach($anggota as $item)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$item->no_penduduk}}</td>
								<td>{{$item->nama}}</td>
								<td>{{$item->tempat}}</td>
								<td>{{$item->tgl_lahir}}</td>
								<td>{{$item->kelurahan->distrik->kota->nm_kota}}</td>
                            	<td>{{$item->kelurahan->distrik->nm_distrik}}</td>
                           		<td>{{$item->kelurahan->nm_kelurahan}}</td>
								<td>{{$item->agama}}</td>
								<td>{{$item->jenkel}}</td>
								<td>{{$item->pendidikan}}</td>
															
							</tr>
							@endforeach
							
						</tbody>				  
					
					</table>
					</div>              
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
    
@endsection
  