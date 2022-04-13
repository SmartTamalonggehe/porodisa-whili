
@extends('admin.layouts.default')

@section('judul','Edit')

@section('main')


<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-12">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Edit Data Pengurus</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form class="form" novalidate action="{{route('pengurus.update', $pengurus->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">No Penduduk</label>
                            <input type="text" class="form-control" value="{{$pengurus->no_penduduk}}" id="no_penduduk" name="no_penduduk">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" value="{{$pengurus->nama}}" id="nama" name="nama">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" value="{{$pengurus->jabatan}}" id="jabatan" name="jabatan">
                        </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="jenkel">Jenis Kelami</label>
                                <div class="demo-radio-button">
                                    <input name="jenkel" type="radio" id="laki_laki" value="Laki-Laki" {{$pengurus->jenkel == 'Laki-Laki'? 'checked' : ''}} class="with-gap radio-col-success"  />
                                    <label for="laki_laki">Laki-Laki</label>
                                    <input name="jenkel" type="radio" id="perempuan" value="Perempuan " {{$pengurus->jenkel == 'Perempuan '? 'checked' : ''}} class="with-gap radio-col-success" />
                                    <label for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Tempat lahir</label>
                            <input type="text" class="form-control" value="{{$pengurus->tempat}}" id="tempat" name="tempat">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Tanggal lahir</label>
                            <input type="date" class="form-control" value="{{$pengurus->tgl_lahir}}" id="tgl_lahir" name="tgl_lahir">
                        </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="agama">Agama</label>
                                <div class="demo-radio-button">
                                    <input name="agama" type="radio" id="kristen" value="Kristen Protestan" {{$pengurus->agama == 'Kristen Protestan'? 'checked' : ''}} class="with-gap radio-col-success"  />
                                    <label for="kristen">Kristen Protestan</label>
                                    <input name="agama" type="radio" id="katolik" value="Katolik " {{$pengurus->agama == 'Katolik '? 'checked' : ''}} class="with-gap radio-col-success" />
                                    <label for="katolik">Katolik</label>
                                    <input name="agama" type="radio" id="islam" value="Islam " {{$pengurus->agama == 'Islam '? 'checked' : ''}} class="with-gap radio-col-success" />
                                    <label for="islam">Islam</label>
                                    <input name="agama" type="radio" id="hindu" value="Hindu" {{$pengurus->agama == 'Hindu'? 'checked' : ''}} class="with-gap radio-col-success" />
                                    <label for="hindu">Hindu</label>
                                    <input name="agama" type="radio" id="budha" value="Budha" {{$pengurus->agama == 'Budha'? 'checked' : ''}} class="with-gap radio-col-success" />
                                    <label for="budha">Budha</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Pendidikan</label>
                            <input type="text" class="form-control" value="{{$pengurus->pendidikan}}" id="pendidikan" name="pendidikan">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control" value="{{$pengurus->pekerjaan}}" id="pekerjaan" name="pekerjaan">
                        </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Foto</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" value="{{$pengurus->foto}}" name="foto" id="foto">
                                    <label class="input-group-text" for="foto">Upload </label>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-end">
                    <button type="submit" class="btn btn-warning me-1">
                    <i class="ti-trash"></i><a href="{{route('pengurus.index')}}"> batal</a>
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

