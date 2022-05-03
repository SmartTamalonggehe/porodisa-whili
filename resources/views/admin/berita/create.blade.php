
@extends('admin.layouts.default')

@section('judul','Berita')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Dashboard</h3>
                <div class="d-inline-block align-items-center">
                  
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
                        <h3 class="box-title">Form Tambah Data Berita</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <form class="form" enctype="multipart/form-data" action="{{route('berita.store')}}" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                placeholder="Judul">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Isi Berita</label>
                                            <textarea type="text" class="form-control" id="isi" name="isi"
                                                placeholder="Masukan Isi Berita"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Taggal</label>
                                            <input type="date" class="form-control" id="tgl" name="tgl"></input>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="form-label">Gambar</label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" name="gambar" id="gambar">
                                                <label class="input-group-text" for="gambar">Upload</label>
                                              </div>
                                    </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer text-end">

                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti-save-alt"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->

@endsection


</body>
</html>
