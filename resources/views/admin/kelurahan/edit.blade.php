
@extends('admin.layouts.default')

@section('judul','Edit')

@section('main')


<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-12">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Edit Data Kabupaten/Kota</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form class="form" novalidate action="{{ route('kelurahan.update', $kelurahan->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label class="form-label">Nama Distrik</label>
                        <select class="form-select" name="distrik_id" required>
                                <option>-Pilih Distrik-</option>
                            @foreach ($distrik as $item)
                                <option @if ($item->id == $kelurahan->distrik_id)
                                selected
                                @endif value="{{$item->id}}">{{$item->nm_distrik}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Nama Distrik</label>
                            <input type="text" class="form-control" value="{{$kelurahan->nm_kelurahan}}" id="nm_kelurahan" name="nm_kelurahan" placeholder="Masukan Nama Kelurahan">
                        </div>
                        </div>
                    </div>
                <!-- /.box-body -->
                <div class="box-footer text-end">
                    <button type="submit" class="btn btn-warning me-1">
                    <i class="ti-trash"></i><a href="{{route('kelurahan.index')}}"> Batal</a>
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ti-save-alt"></i> Save
                    </button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
</section>
<!-- /.content -->




@endsection


</body>
</html>

