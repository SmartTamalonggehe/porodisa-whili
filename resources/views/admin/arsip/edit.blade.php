@extends('admin.layouts.default')

@section('judul', 'Edit')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title"> Arsip</h2>
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
                        <h4 class="box-title">Form Edit Data Arsip</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form" novalidate action="{{ route('arsip.update', $arsip->id) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="nm_arsip">Nama Arsip</label>
                                            <input type="text" class="form-control" id="nm_arsip" name="nm_arsip"
                                                placeholder="Masukan Nama Arsip" value="{{ $arsip->nm_arsip }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="keterangan">Keterangan</label>
                                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                                placeholder="Masukan Ketrangan" value="{{ $arsip->keterangan }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="file_arsip">File</label>
                                            <input type="file" class="form-control" id="file_arsip" name="file_arsip">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer text-end">
                                    <button type="submit" class="btn btn-warning me-1">
                                        <i class="ti-trash"></i><a href="{{ route('pengurus.index') }}"> Batal</a>
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
