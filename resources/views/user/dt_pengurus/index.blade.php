@extends('user.layouts.default')

@section('judul','Pengurus')

@section('main')


<div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title">PENGURUS</h2>
                <div class="d-inline-block align-items-center">
                    <nav>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<section class="content">
	 <!-- START Card With Image -->
	 <div class=""></div>
	<div class="row fx-element-overlay">
		@foreach ($pengurus as $item)
			<div class="col-md-4 col-lg-4">
			  <div class="box b-solid">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="{{asset('storage/pengurus/' .$item->foto)}}" style="height: 450px;" alt="user">
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">{{$item->nama}}</h3>
						<div><small>{{$item->jabatan}}</small></div>
					</div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>

		@endforeach
			<!-- /.col -->
	</div>
	<!-- /.row -->
	<!-- END Card with image -->

</section>

@endsection


