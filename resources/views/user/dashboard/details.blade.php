@extends('user.layouts.default')

@section('judul','Dashboard')

@section('main')
    
  
<section class="content">       
      <div class="col-md-5 col-lg-7">
            <div class="card">
                  <div class="card-body">
                  <h5><b>{{$berita->judul}}</b></h5>	 
                  <p>{{$berita->isi}}</p>
                  <span class="fs-14 text-muted">{{$berita->tgl}}</span>
                  </div>
                  <img class="card-img-top bter-0 btsr-0" src="{{asset('storage/gambar/'.$berita->gambar)}}" alt="Card image cap">
                  <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('anggota')}}"><button type="button" class="waves-effect waves-light btn btn-outline btn-warning mb-5">Kembali</button></a>
                  </div>
                  </div>
            </div>
      </div>
</section>

@endsection

 
