
@extends('user.layouts.default')

@section('judul','kegiatan')

@section('main')

    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Kegiatan</h3>
                <div class="d-inline-block align-items-center">
                    <nav>

                    </nav>
                </div>
            </div>

        </div>
    </div>

    <section class="content">
        <!-- START Card With Image -->
         
          @foreach ( $kegiatan as $item)
          <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="card">
                  <img class="card-img-top" src="{{asset('storage/kegiatan/' .$item->foto)}}" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">{{$item->tgl}}</h4>
                  <p class="card-text">{{$item->keterangan}}</p>
                  </div>
                </div>
            </div>
          </div>
          <!-- /.row -->
          @endforeach

    </section>

@endsection

</body>
</html>

