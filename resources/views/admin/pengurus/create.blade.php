@extends('admin.layouts.default')

@section('judul', 'Pengurus')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Data Pengurus</h3>
                <div class="d-inline-block align-items-center">
                    {{-- <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                        </ol>
                    </nav> --}}
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
                        <h3 class="box-title">Form Tambah Data Pengurus</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form" action="{{ route('pengurus.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">No Penduduk</label>
                                            <input type="text" class="form-control" id="no_penduduk" name="no_penduduk"
                                                placeholder="Masukan No Penduduk">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama </label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Masukan Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Jabatan </label>
                                            <input type="text" class="form-control" id="jabatan" name="jabatan"
                                                placeholder="Masukan jabatan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="jenkel">Jenis Kelamin</label>
                                            <div class="demo-radio-button">
                                                <input name="jenkel" type="radio" id="laki_laki" value="Laki-Laki" class="with-gap radio-col-primary"  />
                                                <label for="laki_laki">Laki-Laki</label>
                                                <input name="jenkel" type="radio" id="perempuan" value="Perempuan" class="with-gap radio-col-success" />
                                                <label for="perempuan">Perempuan</label>
                                            </div>
                                        </div>
                                        </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tempat Lahir </label>
                                            <input type="text" class="form-control" id="tempat" name="tempat"
                                                placeholder="Masukan Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tanggan lahir </label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                                placeholder="Masukan Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="agama">Agama</label>
                                            <div class="demo-radio-button">
                                                <input name="agama" type="radio" id="kristen" value="Kriten" class="with-gap radio-col-success"  />
                                                <label for="kristen">Kristen Protestan</label>
                                                <input name="agama" type="radio" id="katolik" value="Katolik" class="with-gap radio-col-success" />
                                                <label for="katolik">Katolik</label>
                                                <input name="agama" type="radio" id="islam" value="Islam" class="with-gap radio-col-success" />
                                                <label for="islam">Islam</label>
                                                <input name="agama" type="radio" id="hindu" value="Hindu" class="with-gap radio-col-success" />
                                                <label for="hindu">Hindu</label>
                                                <input name="agama" type="radio" id="budha" value="Budha" class="with-gap radio-col-success" />
                                                <label for="budha">Budha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Pendidikan </label>
                                            <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                                                placeholder="Masukan Pendidikan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Pekerjaan </label>
                                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                                placeholder="Masukan Pekerjaan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Foto</label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" name="foto" id="foto">
                                                <label class="input-group-text" for="foto">Upload</label>
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
