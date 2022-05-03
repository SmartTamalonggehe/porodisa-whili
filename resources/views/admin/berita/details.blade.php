</div>

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

    <section class="content">
        	<!-- /.col -->        
			<div class="col-md-5 col-lg-7">
				<div class="card">
				  <div class="card-body">
					<h2 class="card-title"><b>{{$berita->judul}}</b></h2>	
          <p class="card-text">{{$berita->isi}}</p>
				
				  </div>
				  <img class="card-img-top bter-0 btsr-0" src="{{asset('storage/gambar/'.$berita->gambar)}}" alt="Card image cap">
				  <div class="card-footer d-flex justify-content-between">
					<span class="fs-14 text-muted">{{$berita->tgl}}</span>
          <button type="submit" class="waves-effect waves-light btn btn-outline  btn-success-light mb-5" ><a href="{{route('berita.index')}}"> Detail Berita</a></button>      
				  </div>
				</div>
			</div>
        
			<!-- /.col -->
    </section>
    

@endsection


</body>
</html>
