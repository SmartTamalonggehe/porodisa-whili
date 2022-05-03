@extends('user.layouts.default')

@section('judul','Dashboard')

@section('main')
    
  
      <section class="content">

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
					  @foreach( $berita as $key => $item)
						<div class="carousel-item  {{$key == 0 ? 'active' : ''}}">
						  <img src="{{asset('storage/gambar/'.$item->gambar)}}" class="img-fluid" alt="slide-1">
						
						  <a href="{{route('anggota.show', $item->id)}}">
						  <div class="text-center">		<button type="button" class="waves-effect waves-light btn btn-outline btn-rounded btn-success-light mb-5">Detail Berita</button></div></a>

						  
												
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


	  </section>

@endsection

 
