
@extends('admin.layouts.default')

@section('judul','Edit')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title"> KABUPATEN/KOTA</h2>
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
            <h4 class="box-title">Form Edit Data Kabupaten/Kota</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form class="form" novalidate action="{{route('kota.update', $kota->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-10">
                        <div class="form-group">
                            <label class="form-label">Nama Kabupaten/Kota</label>
                            <input type="text" class="form-control" value="{{$kota->nm_kota}}" id="nm_kota" name="nm_kota" placeholder="Masukan Nama Kabupaten/Kota">
                        </div>
                        </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer text-end">
                    <button type="submit" class="btn btn-warning me-1">
                    <i class="ti-trash"></i><a href="{{route('pengurus.index')}}"> Batal</a>
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ti-save-alt"></i> Simpan
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

