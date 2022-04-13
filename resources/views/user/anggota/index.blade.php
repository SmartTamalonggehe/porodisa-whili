
@extends('user.layouts.default')

@section('judul','anggota')

@section('main')

    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Data Anggota</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        {{-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                        </ol> --}}
                    </nav>
                </div>
            </div>

        </div>
    </div>

    {{-- @if (!$anggota) --}}

        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-12">
                <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Silahkan Input Data Anda</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form class="form" novalidate action="{{route('anggota.store')}}" method="post">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">No Pendudukn</label>
                                    <input type="text" class="form-control" id="no_penduduk" name="no_penduduk" placeholder="Masukan No Penduduk">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Tempat lahir</label>
                                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukan Tempat Lahir">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" >
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nama Kelurahan</label>
                                    <select class="form-select" name="kelurahan_id" >
                                            <option value="">- Pilih Kelurahan -</option>
                                        @foreach ($kelurahan as $item)
                                            <option value="{{$item->id}}">{{$item->nm_kelurahan}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="agama">Agama</label>
                                    <select class="form-select" name="agama" id="agama" required>
                                            <option value="">- Pilih Agama -</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="islam">Islam</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                    </select>
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
                                    <label class="form-label">Pendidikan</label>
                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Masukan Pendidikan" >
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" >
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
                    </form>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
        </section>
        <!-- /.content -->

    {{-- @else --}}

        <!-- Main content -->
        {{-- <section class="content">
            <div class="row">
            <div class="col-12">
                <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Anda</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>No. Penduduk</td>
                                <td>:</td>
                                <td>{{$anggota->no_pendudukan}}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{$anggota->nama}}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{$anggota->nama}}</td>
                            </tr>
                            <tr>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>:</td>
                            <td>{{$anggota->tempat}}, {{$anggota->tgl_lahir}}</td>
                            </tr>
                            <tr>
                                <td>Kota - Distrik - Kelurahan</td>
                                <td>:</td>
                                <td>{{$anggota->kelurahan->distrik->kota->nm_kota}}-
                                    {{$anggota->kelurahan->distrik->nm_distrik}}-
                                    {{$anggota->kelurahan->nm_kelurahan}}
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{$anggota->jenkel}}</td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td>{{$anggota->pendidikan}}</td>
                            </tr>
                            <tr>
                                <td>pekerjaan</td>
                                <td>:</td>
                                <td>{{$anggota->pekerjaan}}</td>
                            </tr>
                            <tr>
                                <td>lokasi</td>
                                <td>:</td>
                                <td>{{$anggota->lokasi}}</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->

        </section> --}}
        <!-- /.content -->

    {{-- @endif --}}

@endsection

</body>
</html>

