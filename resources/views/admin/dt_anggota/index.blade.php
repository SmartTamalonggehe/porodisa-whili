@extends('admin.layouts.default')

@section('judul', 'Anggota')

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
                <h2 class="page-title">ANGGOTA</h2>
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
                <div id="map"></div>
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Data Anggota</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Penduduk</th>
                                        <th>Nama </th>
                                        <th>Pendidikan </th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anggota as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->no_penduduk }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->pendidikan }}</td>
                                            <td align="center">
                                                <a href="{{ route('anggotaAdmin.show', $item->id) }}"><button
                                                        type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-success mb-5">Detail</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Penduduk</th>
                                        <th>Nama </th>
                                        <th>Pendidikan </th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
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
