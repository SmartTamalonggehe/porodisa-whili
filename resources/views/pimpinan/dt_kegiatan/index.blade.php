
@extends('pimpinan.layouts.default')

@section('judul','Laporan Anggota')

@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">KEGIATAN</h3>
					<div class="d-inline-block align-items-center">
						<nav>
						</nav>
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
								<th>Keterangan</th>
								<th>Tanggal</th>
								<th>Foto Kegiatan</th>
							</tr>
						</thead>
						<tbody>
							@foreach($kegiatan as $item)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$item->keterangan}}</td>
								<td>{{$item->tgl}}</td>
								<td align="center">
                                    <img width="150px" src="{{asset('storage/kegiatan/'.$item->foto)}}" alt="" srcset="">
                            	</td>			
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
  