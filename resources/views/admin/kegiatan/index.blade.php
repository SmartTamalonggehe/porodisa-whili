@extends('admin.layouts.default')

@section('judul', 'Kegiatan')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Data Kegiatan</h3>
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


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Tambah Data kegiatan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <form class="form" action="{{route('kegiatan.store')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label class="form-label">Keterangan</label>
                                            <textarea type="text" class="form-control" id="keterangan" name="keterangan"
                                                placeholder="Masukan Nama Kabupaten/Kota"></textarea>
                                        </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label class="form-label">Taggal</label>
                                            <input type="date" class="form-control" id="tgl" name="tgl"
                                                placeholder="Masukan Nama Kabupaten/Kota">
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




    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Kegiatan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th> Kegiatan</th>
                                        <th> Tanggal</th>
                                        <th> Gambar</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kegiatan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>{{ $item->tgl }}</td>
                                            <td align="center">
                                                <img width="100px" src="{{asset('storage/kegiatan/'.$item->foto)}}" alt="" srcset="">
                                            </td>
                                            <td align="center">
                                                <a href="{{ route('kegiatan.edit', $item->id) }}"><button type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-success mb-5">Edit</button></a>
                                                <a href="{{ route('kegiatan.destroy', $item->id) }}"><button type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-danger mb-5">Hapus</button></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kegiatan</th>
                                        <th>Tanggal</th>
                                        <th>Gambar</th>
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
