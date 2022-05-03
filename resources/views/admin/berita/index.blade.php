
@extends('admin.layouts.default')

@section('judul','Berita')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Berita</h3>
                <div class="d-inline-block align-items-center">
                  
                </div>
            </div>

        </div>
    </div>
    

    @if (session('berhasil'))
    <div class="box-body pad res-tb-block">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> {{session('berhasil')}} </div>							
    </div>
    @endif
		
	<section class="content">
	<a href="{{route('berita.create')}}"><button type="submit" class="waves-effect waves-light btn btn-outline btn-info mb-5 right">Tambah Data</button></a><br>
	<div class="row">
			<!-- /.col -->
			<div class="col-lg-12 col-md-12">
			  <!-- Carousel Slider Only Slide -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Klik Detail Untuk Melihat Berita Lebih Lengkap</h4>
				</div>
				<div class="box-body">
					<div id="carousel-example-generic-Controls" class="carousel slide" data-bs-ride="carousel">                  
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					  @foreach($berita as $key => $item)
						<div class="carousel-item  {{$key == 0 ? 'active' : ''}}">
						  <img src="{{asset('storage/gambar/'.$item->gambar)}}" class="img-fluid" alt="slide-1"> 
						  
							<div class="text-center">
							<button type="submit" class="waves-effect waves-light btn btn-outline  btn-success-light mb-5" ><a href="{{route('berita.show', $item->id)}}"> Detail Berita</a></button>
							<form action="{{ route('berita.destroy', $item->id) }}" method="post" id="formHapus" class="d-inline">
								@csrf
								@method('DELETE')
								<button type="submit" class="waves-effect waves-light btn btn-outline btn-danger mb-5" onclick="return confirm('Anda Yakin Menghapus Data Ini? ')">Hapus</button>
							</form>
							</div>
						</div>
					
						@endforeach
					  </div>
					
					  <!-- Controls -->
					  <a class="carousel-control-prev" href="#carousel-example-generic-Controls" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carousel-example-generic-Controls" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>               
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
@endsection


</body>
</html>
