@extends('user.layouts.default')

@section('judul', 'anggota')

@section('css')
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
    <style>
        #map {
            height: 60vh;
        }

        .mapboxgl-popup {
            max-width: 200px;
        }

        .popup {
            background-color: #fff;
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            color: #000;
        }

        .popup h5 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: black
        }

    </style>
@endsection

@section('main')

    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title"> ANGGOTA</h2>
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
                <input type="hidden" id="typeMaps" value="admin">
                <div id="map"></div>
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Silahkan Input Data Anda</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form" novalidate action="{{ route('anggotaUser.store') }}" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">No Pendudukn</label>
                                            <input type="text" class="form-control" id="no_penduduk" name="no_penduduk"
                                                placeholder="Masukan No Penduduk">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Masukan Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Tempat lahir</label>
                                            <input type="text" class="form-control" id="tempat" name="tempat"
                                                placeholder="Masukan Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Nama Kelurahan</label>
                                            <select class="form-select" name="kelurahan_id">
                                                <option value="">- Pilih Kelurahan -</option>
                                                @foreach ($kelurahan as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nm_kelurahan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
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

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label" for="jenkel">Jenis Kelamin</label>
                                            <div class="demo-radio-button">
                                                <input name="jenkel" type="radio" id="laki_laki" value="Laki-Laki"
                                                    class="with-gap radio-col-primary" />
                                                <label for="laki_laki">Laki-Laki</label>
                                                <input name="jenkel" type="radio" id="perempuan" value="Perempuan"
                                                    class="with-gap radio-col-success" />
                                                <label for="perempuan">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Pendidikan</label>
                                            <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                                                placeholder="Masukan Pendidikan">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label class="form-label">Pekerjaan</label>
                                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                                placeholder="Masukan Pekerjaan">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Longitude</label>
                                            <input type="text" class="form-control" id="longitude" name="longitude">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Latitude</label>
                                            <input type="text" class="form-control" id="latitude" name="latitude">
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
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->

@endsection
@section('script')
    <script src="{{ mix('js/maps.js') }}"></script>
@endsection
</body>

</html>
