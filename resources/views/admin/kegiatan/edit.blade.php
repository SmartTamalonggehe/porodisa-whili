
@extends('admin.layouts.default')

@section('judul','Edit')

@section('main')


<div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title">KEGIATAN</h2>
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
            <h3 class="box-title">Form Edit Kegiatan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form class="form" novalidate action="{{route('kegiatan.update', $kegiatan->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-10">
                        <div class="form-group">
                            <label class="form-label">Keterangan</label>
                            <textarea type="text" class="form-control" value="{{$kegiatan->keterangan}}" id="keterangan" name="keterangan" placeholder="Masukan Keterangan"></textarea>
                        </div>
                        </div>
                        <div class="col-md-10">
                        <div class="form-group">
                            <label class="form-label">Taggal</label>
                            <input type="date" class="form-control" value="{{$kegiatan->tgl}}" id="tgl" name="tgl" placeholder="Masukan Keterangan">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Foto</label>
                                <div class="input-group mb-3">
                                <input type="file" value="{{$kegiatan->foto}}" class="form-control" name="foto" id="foto">
                                    <label class="input-group-text" for="foto">Upload</label>
                                  </div>
                        </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer text-end">
                    <button type="submit" class="btn btn-warning me-1">
                        <i class="ti-trash"></i><a href="{{route('kegiatan.index')}}"> Batal</a>
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

